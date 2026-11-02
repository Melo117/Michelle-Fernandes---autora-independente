<?php
$page = 'home';
$page_title = 'Michele Feitosa | Autora, professora e pesquisadora';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<?php require_once __DIR__ . '/../templates/head.php'; ?>

<body>
    <?php require_once __DIR__ . '/../templates/header.php'; ?>
    <main>
        <section class="hero hero-home">
            <div class="site hero-grid">
                <div class="hero-copy">
                    <span class="eyebrow">Literatura <i></i> Educação <i></i> Cultura</span>
                    <h1>Histórias que ensinam a olhar o mundo com mais cuidado.</h1>
                    <p class="hero-lead">Michele Alves Feitosa de Oliveira é autora, professora e pesquisadora. Uma trajetória feita de escuta, memória e compromisso com uma educação transformadora.</p>
                    <div class="button-row">
                        <a class="button button--primary" href="index.php?page=livro">Conheça o livro <span aria-hidden="true">↗</span></a>
                        <a class="button button--text" href="index.php?page=sobre">Minha trajetória <span aria-hidden="true">→</span></a>
                    </div>
                    <p class="hero-quote">“Entre palavras, memórias e saberes, a educação transforma vidas, a literatura amplia horizontes e a cultura preserva nossa história.”</p>
                </div>
                <div class="hero-visual">
                    <div class="portrait-frame"><img src="public/assets/img/fotos/foto-35.jpg" alt="Retrato de Michele Alves Feitosa de Oliveira sentada em um ambiente de trabalho"></div>
                    <div class="hero-sticker"><span>autora</span><strong>&amp;</strong><span>educadora</span></div>
                    <span class="scribble scribble--hero" aria-hidden="true">✦</span>
                </div>
            </div>
        </section>

        <section class="intro-strip">
            <div class="site intro-grid">
                <div class="section-kicker"><span>01</span><span class="line"></span><span>Um pouco sobre mim</span></div>
                <div>
                    <h2>Conhecimento também é uma forma de cuidado.</h2>
                    <p>Licenciada em História, Geografia e Pedagogia, com pós-graduação em Educação, Michele atua em diferentes frentes que aproximam sala de aula, pesquisa, escrita e cultura.</p><a class="inline-link" href="index.php?page=sobre">Conheça a autora <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>

        <section class="section section--white home-book">
            <div class="site split-feature">
                <div class="book-art book-art--home"><img src="public/assets/img/fotos/foto-33.jpg" alt="Livro A Tartaruga Petrus aberto ao lado de ilustrações coloridas"><span class="image-caption">A Tartaruga Petrus · 2023</span></div>
                <div class="feature-copy">
                    <div class="section-kicker"><span>02</span><span class="line"></span><span>Obra em destaque</span></div>
                    <h2>Uma história para a infância, uma janela para o mundo.</h2>
                    <p><em>A Tartaruga Petrus</em> é o primeiro livro publicado por Michele. A obra integra sua produção literária e expressa seu interesse pelo universo da infância, pela leitura e pelas possibilidades educativas da literatura.</p><a class="button button--outline" href="index.php?page=livro">Ler sobre a obra <span aria-hidden="true">↗</span></a>
                </div>
            </div>
        </section>

        <section class="section section--blue home-values">
            <div class="site">
                <div class="section-heading section-heading--row">
                    <div>
                        <div class="section-kicker"><span>03</span><span class="line"></span><span>Palavras em movimento</span></div>
                        <h2>Uma trajetória que atravessa muitos lugares.</h2>
                    </div>
                    <p>Da pesquisa histórica aos encontros literários, cada projeto nasce do desejo de tornar o conhecimento mais próximo, acessível e significativo.</p>
                </div>
                <div class="value-grid">
                    <article class="value-card"><span class="value-number">01</span>
                        <h3>Educação</h3>
                        <p>Práticas pedagógicas que valorizam o respeito à diversidade, a formação crítica e o protagonismo dos estudantes.</p>
                    </article>
                    <article class="value-card"><span class="value-number">02</span>
                        <h3>Literatura</h3>
                        <p>Textos, poemas e livros que convidam ao encontro com a infância, a humanidade e as contradições do mundo.</p>
                    </article>
                    <article class="value-card"><span class="value-number">03</span>
                        <h3>Memória</h3>
                        <p>Projetos culturais que aproximam história, patrimônio e sociedade, como o Museu na Escola: Revisitando o Passado.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section--paper home-recognition">
            <div class="site recognition-grid">
                <div class="recognition-copy">
                    <div class="section-kicker"><span>04</span><span class="line"></span><span>Presença e reconhecimento</span></div>
                    <h2>Literatura que se constrói em comunidade.</h2>
                    <p>Michele integra a Academia de Letras de Itaquaquecetuba, ocupando a cadeira nº 32, e participa de saraus, produções coletivas e iniciativas de incentivo à leitura, à escrita e à valorização da cultura local.</p><a class="inline-link" href="index.php?page=sobre#galeria">Ver registros da trajetória <span aria-hidden="true">→</span></a>
                </div>
                <figure class="recognition-photo"><img src="public/assets/img/fotos/foto-04.jpg" alt="Medalhas e reconhecimentos reunidos em uma composição fotográfica">
                    <figcaption>Registros de uma caminhada feita de estudo, escrita e encontros.</figcaption>
                </figure>
            </div>
        </section>

        <section class="contact-banner">
            <div class="site contact-banner-inner">
                <div><span class="eyebrow">Para leitores, escolas e parceiros</span>
                    <h2>Vamos conversar sobre livros?</h2>
                </div><a class="button button--light" href="index.php?page=contato">Entre em contato <span aria-hidden="true">↗</span></a>
            </div>
        </section>
    </main>
    <?php require_once __DIR__ . '/../templates/footer.php'; ?>
</body>

</html>
