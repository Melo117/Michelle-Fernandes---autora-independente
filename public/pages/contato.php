<?php
$page = 'contato';
$page_title = 'Contato | Michele Feitosa';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<?php require_once __DIR__ . '/../templates/head.php'; ?>

<body>
    <?php require_once __DIR__ . '/../templates/header.php'; ?>
    <main>
        <section class="page-hero page-hero--contact">
            <div class="site page-hero-grid">
                <div><span class="eyebrow">Contato</span>
                    <h1>Uma boa conversa pode começar por uma mensagem.</h1>
                    <p>Para compra do livro, consultoria educacional, convites, escolas e parcerias culturais, deixe seu recado. Os canais oficiais serão atualizados após a confirmação das informações pela autora.</p>
                </div>
                <div class="page-hero-note page-hero-note--contact"><span class="quote-mark">✉</span>
                    <p>Leitura, educação e cultura: vamos aproximar essas ideias?</p>
                </div>
            </div>
        </section>

        <section class="section section--white contact-section">
            <div class="site contact-grid">
                <div class="form-panel">
                    <div class="section-kicker"><span>01</span><span class="line"></span><span>Escreva para Michele</span></div>
                    <h2>Conte como posso ajudar.</h2>
                    <p class="form-intro">Preencha os campos abaixo para enviar sua mensagem. A confirmação será exibida nesta página.</p>
                    <form class="contact-form" action="gmail.php" method="post" data-contact-form>
                        <div class="field-row"><label for="nome">Nome</label><input id="nome" name="nome" type="text" placeholder="Como podemos chamar você?" autocomplete="name" required></div>
                        <div class="field-row"><label for="email">E-mail</label><input id="email" name="email" type="email" placeholder="seuemail@exemplo.com" autocomplete="email" required></div>
                        <div class="field-row"><label for="assunto">Assunto</label><select id="assunto" name="assunto" required>
                                <option value="" selected disabled>Escolha uma opção</option>
                                <option>Quero comprar o livro</option>
                                <option>Consultoria educacional</option>
                                <option>Convite para escola ou evento</option>
                                <option>Parceria cultural</option>
                                <option>Outro assunto</option>
                            </select></div>
                        <div class="field-row"><label for="mensagem">Mensagem</label><textarea id="mensagem" name="mensagem" rows="5" placeholder="Escreva sua mensagem..." required></textarea></div>
                        <button class="button button--primary" type="submit">Preparar mensagem <span aria-hidden="true">↗</span></button>
                        <p data-feedback role="status" aria-live="polite" hidden></p>
                    </form>
                </div>
                <aside class="contact-aside">
                    <div class="aside-card aside-card--gold"><span class="aside-icon">◌</span>
                        <h3>Compra do livro</h3>
                        <p>O interesse em <em>A Tartaruga Petrus</em> pode ser registrado pelo formulário ou whatsApp.</p><a class="text-link text-link--dark" href="#contato">Quero comprar <span aria-hidden="true">→</span></a>
                    </div>
                    <div class="aside-card"><span class="aside-icon">✦</span>
                        <h3>Outros assuntos</h3>
                        <p>Convites para escolas, saraus, projetos culturais e parcerias também podem ser encaminhados por aqui.</p>
                    </div>
                    <div class="pending-contact"><span class="footer-label">Canais oficiais</span>
                        <p><strong>WhatsApp</strong><br><a href="https://wa.me/5511973413446" target="_blank" rel="noopener noreferrer">11 97341-3446</a></p>
                        <p><strong>Intagram</strong><br><a href="https://www.instagram.com/michelealvesfeitosa?utm_source=qr&obrf=MXFsYjhpbW5qenl6Ng==" target="_blank" rel="noopener noreferrer">@michelealvesfeitosa</a></p>
                       
                    </div>
                </aside>
            </div>
        </section>

        <section class="section section--paper contact-closing">
            <div class="site closing-copy"><span class="eyebrow">Obrigada pela visita</span>
                <h2>Que a próxima página seja escrita juntos.</h2><a class="inline-link" href="index.php">Voltar para a Home <span aria-hidden="true">→</span></a>
            </div>
        </section>
    </main>
    <?php require_once __DIR__ . '/../templates/footer.php'; ?>
</body>

</html>
