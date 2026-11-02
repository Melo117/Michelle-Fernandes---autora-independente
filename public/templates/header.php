<header class="site-header">
    <div class="site header-inner">
        <a class="brand" href="index.php" aria-label="Michele Feitosa — página inicial">
            <span class="brand-mark" aria-hidden="true">M</span>
            <span class="brand-copy">
                <strong>Michele Feitosa</strong>
                <small>palavras que permanecem</small>
            </span>
        </a>

        <div class="nav-drawer">
            <button class="nav-toggle" type="button" aria-label="Abrir menu de navegação" aria-expanded="false" aria-controls="main-nav" data-menu-toggle>
                <span></span><span></span><span></span>
            </button>
            <nav class="main-nav" id="main-nav" aria-label="Navegação principal" data-nav>
                <a class="<?= ($page ?? '') === 'home' ? 'is-active' : '' ?>" href="index.php">Home</a>
                <a class="<?= ($page ?? '') === 'sobre' ? 'is-active' : '' ?>" href="index.php?page=sobre">Sobre</a>
                <a class="<?= ($page ?? '') === 'livro' ? 'is-active' : '' ?>" href="index.php?page=livro">Meu livro</a>
                <a class="<?= ($page ?? '') === 'textos' ? 'is-active' : '' ?>" href="index.php?page=textos">Textos</a>
                <a class="<?= ($page ?? '') === 'contato' ?> nav-cta" href="index.php?page=contato">Contato</a>
            </nav>
        </div>
    </div>
</header>
