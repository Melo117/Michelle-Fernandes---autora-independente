<?php
$page = 'livro';
$page_title = 'Meu livro | A Tartaruga Petrus';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<?php require_once __DIR__ . '/../templates/head.php'; ?>

<body>
    <?php require_once __DIR__ . '/../templates/header.php'; ?>
    <main>
        <section class="page-hero page-hero--book">
            <div class="site page-hero-grid">
                <div><span class="eyebrow">Meu livro</span>
                    <h1>Uma pequena tartaruga, grandes possibilidades de imaginar.</h1>
                    <p><em>A Tartaruga Petrus</em> é a primeira obra publicada de Michele Alves Feitosa de Oliveira, lançada em 2023.</p>
                </div>
                <div class="page-hero-badge"><span>literatura</span><strong>infantil</strong><span>2023</span></div>
            </div>
        </section>

        <section class="section section--white book-detail">
            <div class="site book-detail-grid">
                <div class="book-cover-wrap">
                    <div class="book-cover-shadow"></div><img src="public/assets/img/fotos/foto-30.jpg" alt="Capa do livro A Tartaruga Petrus">
                </div>
                <div class="book-detail-copy">
                    <div class="section-kicker"><span>01</span><span class="line"></span><span>A obra</span></div>
                    <p class="book-year">Publicado em 2023</p>
                    <h2>A Tartaruga Petrus</h2>
                    <p class="lead-copy">Uma obra de literatura infantil que integra a produção literária da autora e expressa seu interesse pelo universo da infância, pela leitura e pelas possibilidades educativas da literatura.</p>
                    <p>O livro nasce do encontro entre imaginação e aprendizagem: um convite para que crianças, famílias e educadores se aproximem da leitura com curiosidade e afeto.</p>
                    <a class="button button--primary" href="index.php?page=contato">Tenho interesse no livro <span aria-hidden="true">↗</span></a>
                </div>
            </div>
        </section>

        <section class="section section--blue book-facts">
            <div class="site facts-grid">
                <div>
                    <div class="section-kicker"><span>02</span><span class="line"></span><span>Ficha da obra</span></div>
                    <h2>Um livro para abrir conversas.</h2>
                </div>
                <dl class="fact-list">
                    <div>
                        <dt>Título</dt>
                        <dd>A Tartaruga Petrus</dd>
                    </div>
                    <div>
                        <dt>Ano de publicação</dt>
                        <dd>2023</dd>
                    </div>
                    <div>
                        <dt>Gênero</dt>
                        <dd>Literatura infantil</dd>
                    </div>
                    <div>
                        <dt>Faixa etária</dt>
                        <dd>Livre</dd>
                    </div>
                </dl>
            </div>
        </section>

        <section class="section section--paper book-gallery">
            <div class="site book-gallery-grid">
                <div class="book-gallery-copy">
                    <div class="section-kicker"><span>03</span><span class="line"></span><span>Dentro do universo de Petrus</span></div>
                    <h2>Leitura também é encontro.</h2>
                    <p>As imagens recebidas mostram diferentes momentos de apresentação e circulação do livro. Para disponibilidade e condições de compra, o contato deve ser feito diretamente com a autora.</p><a class="inline-link" href="index.php?page=contato">Falar sobre a compra <span aria-hidden="true">→</span></a>
                </div>
                <div class="book-mosaic"><img class="mosaic-main" src="public/assets/img/fotos/foto-32.jpg" alt="Exemplares de A Tartaruga Petrus reunidos"><img class="mosaic-small" src="public/assets/img/fotos/foto-34.jpg" alt="Livro A Tartaruga Petrus com registro da autora"></div>
            </div>
        </section>

        <section class="contact-banner">
            <div class="site contact-banner-inner">
                <div><span class="eyebrow">Quer levar essa história com você?</span>
                    <h2>Entre em contato para saber mais.</h2>
                </div><a class="button button--light" href="index.php?page=contato">Falar com Michele <span aria-hidden="true">↗</span></a>
            </div>
        </section>
    </main>
    <?php require_once __DIR__ . '/../templates/footer.php'; ?>
</body>

</html>