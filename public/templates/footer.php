<aside class="accessibility-widget" aria-label="Recursos de acessibilidade">
    <button class="accessibility-toggle" type="button" aria-expanded="false" aria-controls="accessibility-panel" data-accessibility-toggle>
        Acessibilidade
    </button>
    <section class="accessibility-panel" id="accessibility-panel" aria-labelledby="accessibility-title" data-accessibility-panel hidden>
        <div class="accessibility-panel-heading">
            <h2 id="accessibility-title">Acessibilidade</h2>
            <button class="accessibility-close" type="button" aria-label="Fechar painel de acessibilidade" data-accessibility-close>×</button>
        </div>
        <div class="accessibility-control">
            <span id="font-size-label">Tamanho do texto</span>
            <div class="accessibility-font-controls" role="group" aria-labelledby="font-size-label">
                <button type="button" aria-label="Diminuir tamanho do texto" data-font-decrease> A− </button>
                <output aria-live="polite" data-font-size>100%</output>
                <button type="button" aria-label="Aumentar tamanho do texto" data-font-increase> A+ </button>
            </div>
        </div>
        <button class="accessibility-option" type="button" aria-pressed="false" data-accessibility-setting="contrast">
            Alto contraste
        </button>
        <button class="accessibility-option" type="button" aria-pressed="false" data-accessibility-setting="links">
            Destacar links
        </button>
        <button class="accessibility-option" type="button" aria-pressed="false" data-accessibility-setting="motion">
            Reduzir animações
        </button>
        <button class="accessibility-reset" type="button" data-accessibility-reset>Restaurar padrão</button>
        <p class="accessibility-status" role="status" aria-live="polite" data-accessibility-status></p>
    </section>
</aside>

<footer class="site-footer">
    <div class="site footer-grid">
        <div>
            <a class="brand brand--footer" href="index.php" aria-label="Voltar para a página inicial">
                <span class="brand-mark" aria-hidden="true">M</span>
                <span class="brand-copy">
                    <strong>Michele Feitosa</strong>
                    <small>autora, professora e pesquisadora</small>
                </span>
            </a>
            <p class="footer-note">Entre palavras, memórias e saberes, a educação transforma vidas.</p>
        </div>
        <div class="footer-links">
            <span class="footer-label">Explore</span>
            <a href="index.php?page=sobre">Sobre a autora</a>
            <a href="index.php?page=livro">A Tartaruga Petrus</a>
            <a href="index.php?page=textos">Textos autorais</a>
            <a href="index.php?page=contato">Fale comigo</a>
        </div>
        <div class="footer-signoff">
            <span class="footer-label">Um convite</span>
            <p>Para ler, aprender e imaginar novos caminhos.</p>
            <div>
                <span class="footer-label">redes sociais</span>
                <div class="footer-social-links">
                    <a href="https://www.instagram.com/michelealvesfeitosa?utm_source=qr&obrf=MXFsYjhpbW5qenl6Ng==" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <svg aria-hidden="true" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="5"></rect>
                            <circle cx="12" cy="12" r="4"></circle>
                            <circle cx="18" cy="6" r="1" fill="currentColor" stroke="none"></circle>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <svg aria-hidden="true" viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                            <path d="M13.5 21v-8h2.7l.4-3h-3.1V8.1c0-.9.3-1.5 1.6-1.5h1.7V3.9c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.3V10H7.3v3h2.8v8h3.4z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="creditos">
        <span>© <?= date('Y') ?> DevloPeira</span>
        <span>Site institucional</span>
    </div>
</footer>
