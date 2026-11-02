
<?php

header('Content-Type: application/json; charset=UTF-8');

function respond(int $status, bool $success, string $message): void
{
    http_response_code($status);

    echo json_encode(
        ['success' => $success, 'message' => $message],
        JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
    );

    exit;
}

// Aceita somente POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(405, false, 'Método não permitido. Envie o formulário novamente.');
}

// Recebe os dados
$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$assunto = trim($_POST['assunto'] ?? '');
$mensagem = trim($_POST['mensagem'] ?? '');

// Valida os campos
if (
    $nome === '' ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    $assunto === '' ||
    $mensagem === ''
) {
    respond(400, false, 'Preencha os campos corretamente.');
}

// LIMITADOR DE ENVIO
$limite = 10;
$janela = 600; // 10 minutos em segundos

$ip = $_SERVER['REMOTE_ADDR'] ?? '';

if ($ip === '') {
    respond(500, false, 'Não foi possível validar a conexão.');
}

// Não salva o IP diretamente no nome do arquivo
$chave = hash('sha256', __DIR__ . '|' . $ip);

$arquivo = rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR)
    . DIRECTORY_SEPARATOR
    . 'contato_rl_' . $chave . '.json';

$fp = @fopen($arquivo, 'c+');

if ($fp === false) {
    error_log('Não foi possível abrir o arquivo de limite.');
    respond(500, false, 'Serviço temporariamente indisponível.');
}

if (!flock($fp, LOCK_EX)) {
    fclose($fp);
    respond(500, false, 'Serviço temporariamente indisponível.');
}

$conteudo = stream_get_contents($fp);
$envios = json_decode($conteudo ?: '[]', true);

if (!is_array($envios)) {
    $envios = [];
}

$agora = time();

// Descarta tentativas com mais de 10 minutos
$envios = array_values(array_filter(
    $envios,
    static fn($timestamp) =>
        is_int($timestamp) && $timestamp > ($agora - $janela)
));

if (count($envios) >= $limite) {
    flock($fp, LOCK_UN);
    fclose($fp);

    header('Retry-After: 600');

    respond(
        429,
        false,
        'Limite de envios atingido. Tente novamente em alguns minutos.'
    );
}

// Registra a tentativa antes de enviar o e-mail
$envios[] = $agora;
$json = json_encode($envios);

rewind($fp);
ftruncate($fp, 0);

$gravado = fwrite($fp, $json);
fflush($fp);

flock($fp, LOCK_UN);
fclose($fp);

if ($gravado !== strlen($json)) {
    error_log('Falha ao registrar tentativas do formulário.');
    respond(500, false, 'Serviço temporariamente indisponível.');
}

// PHPMailer
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    // Configuração SMTP do Gmail
    $mail->isSMTP();
    $mail->Host = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['SMTP_USER'];
    $mail->Password = $_ENV['SMTP_PASS'];

    $mail->SMTPSecure =
        PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port = (int) $_ENV['SMTP_PORT'];

    // Remetente e destinatário
    $mail->setFrom($_ENV['SMTP_USER'], 'Meu Projeto');
    $mail->addAddress($_ENV['SMTP_USER']);
    $mail->addReplyTo($email, $nome);

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = $assunto;

    $mail->Body =
        '<h2>Nova mensagem de contato</h2>' .
        '<p><strong>Nome:</strong> ' .
        htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') . '</p>' .
        '<p><strong>E-mail:</strong> ' .
        htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '</p>' .
        '<p><strong>Assunto:</strong> ' .
        htmlspecialchars($assunto, ENT_QUOTES, 'UTF-8') . '</p>' .
        '<p><strong>Mensagem:</strong><br>' .
        nl2br(htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8')) .
        '</p>';

    $mail->AltBody =
        "Nome: {$nome}\n" .
        "E-mail: {$email}\n" .
        "Assunto: {$assunto}\n\n" .
        $mensagem;

    $mail->send();

    respond(
        200,
        true,
        'E-mail enviado com sucesso! Em breve entraremos em contato.'
    );

} catch (PHPMailer\PHPMailer\Exception $e) {
    error_log('Erro PHPMailer: ' . $mail->ErrorInfo);

    respond(
        500,
        false,
        'Não foi possível enviar o e-mail. Tente novamente mais tarde.'
    );
}
