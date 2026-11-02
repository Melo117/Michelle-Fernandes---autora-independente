<?php
$page = 'textos';
$page_title = 'Textos | Michele Feitosa';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<?php require_once __DIR__ . '/../templates/head.php'; ?>

<body>
    <?php require_once __DIR__ . '/../templates/header.php'; ?>
    <main>
        <section class="page-hero page-hero--texts">
            <div class="site page-hero-grid">
                <div>
                    <span class="eyebrow">Textos autorais</span>
                    <h1>Palavras para ler, pensar e conversar.</h1>
                    <p>Uma seleção de poemas, crônicas e reflexões de Michele Alves Feitosa de Oliveira sobre humanidade, paz, educação e os caminhos possíveis para transformar o mundo.</p>
                </div>
                <div class="page-hero-note"><span class="quote-mark">“</span>
                    <p>A literatura amplia horizontes e nos ensina a olhar com mais cuidado.</p>
                </div>
            </div>
        </section>

        <section class="section section--white texts-section">
            <div class="site">
                <div class="section-heading section-heading--narrow">
                    <div class="section-kicker"><span>01</span><span class="line"></span><span>Leituras disponíveis</span></div>
                    <h2>Textos que permanecem depois da leitura.</h2>
                    <p class="section-intro">Conheça alguns escritos da autora. Cada título pode ser lido diretamente no navegador ou baixado em PDF.</p>
                </div>
                <div class="texts-grid">
                    <article class="text-card">
                        <div class="text-card-top"><span class="text-card-number">01</span><span class="text-card-type">Crônica · reflexão</span></div>
                        <h3>O Mundo Invertido</h3>
                        <p>Um pequeno manual para sobreviver ao mundo que chamamos de normal, repensando tempo, desejo, consumo, felicidade e a coragem de fazer perguntas.</p>
                        <div class="text-card-actions"><a class="button button--outline" href="public/assets/docs/o-mundo-invertido.pdf" target="_blank" rel="noopener">Ler texto <span aria-hidden="true">↗</span></a><a class="text-download" href="public/assets/docs/o-mundo-invertido.pdf" download>Baixar PDF</a></div>
                    </article>
                    <article class="text-card">
                        <div class="text-card-top"><span class="text-card-number">02</span><span class="text-card-type">Artigo · paz</span></div>
                        <h3>Guerra no céu: Terra sem Paz!</h3>
                        <p>Uma reflexão sobre conflitos, intolerância e o desejo humano por uma vida em paz, defendendo a cultura do diálogo e ações individuais transformadoras.</p>
                        <div class="text-card-actions"><a class="button button--outline" href="public/assets/docs/guerra-no-ceu-terra-sem-paz.pdf" target="_blank" rel="noopener">Ler texto <span aria-hidden="true">↗</span></a><a class="text-download" href="public/assets/docs/guerra-no-ceu-terra-sem-paz.pdf" download>Baixar PDF</a></div>
                    </article>
                    <article class="text-card">
                        <div class="text-card-top"><span class="text-card-number">03</span><span class="text-card-type">Poema · sociedade</span></div>
                        <h3>Somos Todos</h3>
                        <p>Um poema sobre igualdade, justiça social, solidariedade e a necessidade de construir um mundo mais atento, concreto e humano.</p>
                        <div class="text-card-actions"><a class="button button--outline" href="public/assets/docs/somos-todos.pdf" target="_blank" rel="noopener">Ler texto <span aria-hidden="true">↗</span></a><a class="text-download" href="public/assets/docs/somos-todos.pdf" download>Baixar PDF</a></div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section--blue texts-note">
            <div class="site texts-note-grid">
                <div><div class="section-kicker"><span>02</span><span class="line"></span><span>Literatura e educação</span></div><h2>Textos também são espaços de encontro.</h2></div>
                <p>Para Michele, escrever é uma forma de escutar o mundo, compartilhar perguntas e aproximar pessoas. Escolas, eventos e projetos culturais podem conversar sobre essas obras por meio do contato.</p>
            </div>
        </section>

        <section class="contact-banner">
            <div class="site contact-banner-inner">
                <div><span class="eyebrow">Leituras, escolas e projetos</span><h2>Vamos conversar sobre um texto?</h2></div><a class="button button--light" href="index.php?page=contato">Entre em contato <span aria-hidden="true">↗</span></a>
            </div>
        </section>
    </main>
    <?php require_once __DIR__ . '/../templates/footer.php'; ?>
</body>

</html>
