<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        <script>document.documentElement.classList.add("js");</script>
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="header">
            <div class="container">
                <a href="index.html" class="grid-2"><img src="assets/images/bikcraft.svg" alt="Bikcraft"></a>
                <nav class="header-menu grid-14">
                    <ul>
                        <li><a href="/sobre">Sobre</a></li>
                        <li><a href="/produtos">Produtos</a></li>
                        <li><a href="/portfolio">Portfólio</a></li>
                        <li><a href="/contato">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </header>