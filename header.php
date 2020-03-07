<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?></title>
        <meta property="og:type" content="website"/>
		<meta property="og:title" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?>"/>
		<meta property="og:description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('description_seo'); ?>"/>
		<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/og-image.png"/>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
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