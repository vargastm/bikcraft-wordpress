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
                <a href="/" class="grid-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bikcraft.svg" alt="Bikcraft"></a>
                <nav class="header-menu grid-14">
                    <?php
                        $args = array(
                            'menu' => 'principal',
                            'theme_location' => 'header-menu',
                            'container' => false
                        );
                        wp_nav_menu($args);
                    ?>
                </nav>
            </div>
        </header>