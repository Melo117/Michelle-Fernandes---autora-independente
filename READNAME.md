# Michele Feitosa — Site Institucional

Site institucional desenvolvido para apresentar a trajetória de Michele Alves Feitosa de Oliveira como autora, professora e pesquisadora.

O projeto destaca sua atuação nas áreas de educação, literatura, pesquisa histórica e cultura, além de apresentar seu livro infantil **A Tartaruga Petrus**, publicado em 2023.

## Sobre o projeto

O site foi criado com uma identidade visual delicada, literária e discretamente lúdica, utilizando tons de azul-claro, azul-marinho, branco e dourado suave.

A estrutura foi pensada para atender leitores, pais, responsáveis, professores, escolas e possíveis parceiros culturais.

## Páginas

- **Home:** apresentação da autora, principais áreas de atuação, destaque do livro e chamadas para contato.
- **Sobre:** biografia, formação acadêmica, trajetória profissional, projetos educacionais e participação em atividades literárias.
- **Meu Livro:** apresentação de *A Tartaruga Petrus*, informações da obra, imagens e chamada para compra.
- **Contato:** formulário visual para mensagens, compra do livro, convites e parcerias culturais.

## Tecnologias utilizadas

- HTML5
- CSS3
- PHP
- Google Fonts
- Layout responsivo
- Estrutura de templates compartilhados
- Manifesto de rotas em JSON

## Estrutura do projeto

```text
.
├── index.php
├── gmail.php
├── routes.json
├── composer.json
├── composer.lock
├── READNAME.md
├── public
│   ├── assets
│   │   ├── css
│   │   │   └── estilo.css
│   │   ├── docs
│   │   │   ├── guerra-no-ceu-terra-sem-paz.pdf
│   │   │   ├── o-mundo-invertido.pdf
│   │   │   └── somos-todos.pdf
│   │   └── img
│   │       └── fotos
│   │           ├── foto-01.jpg ... foto-36.jpg
│   ├── js
│   │   └── script.js
│   ├── pages
│   │   ├── contato.php
│   │   ├── home.php
│   │   ├── livro.php
│   │   ├── sobre.php
│   │   └── textos.php
│   └── templates
│       ├── footer.php
│       ├── head.php
│       └── header.php
└── vendor
    └── dependências instaladas pelo Composer
