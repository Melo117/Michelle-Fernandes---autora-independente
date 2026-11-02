<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site oficial de Michele Alves Feitosa de Oliveira, autora, professora e pesquisadora.">
    <meta name="theme-color" content="#27445c">
    <title><?= htmlspecialchars($page_title ?? 'Michele Feitosa | Autora e educadora', ENT_QUOTES, 'UTF-8') ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/assets/css/estilo.css?v=<?= filemtime(__DIR__ . '/../assets/css/estilo.css') ?>">
    <script src="public/assets/js/script.js?v=<?= filemtime(__DIR__ . '/../assets/js/script.js') ?>" defer></script>
</head>
