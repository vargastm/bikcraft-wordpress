<?php
// Template Name: Home
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="introduction">
            <div class="container">
                <h1 data-anime="400" class="fadeInDown"><?php the_field('intro_title'); ?></h1>
                <blockquote data-anime="800" class="quote-external fadeInDown">
                    <p><?php the_field('quote_introduction'); ?></p>
                    <cite><?php the_field('author'); ?></cite>
                </blockquote>
                <a href="/produtos" data-anime="1200" class="button">Orçamento</a>
            </div>
        </section>
        <section data-anime="1600" class="products container fadeInDown">
            <h2 class="subtitle">Produtos</h2>
            <ul class="products-group">
                <li class="grid-1-3"> 
                    <div class="products-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/ride.svg" alt="Bikecraft Passeio">
                    </div>
                    <h3>Passeio</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
                </li>
                <li class="grid-1-3"> 
                    <div class="products-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/sport.svg" alt="Bikecraft Passeio">
                    </div>
                    <h3>Passeio</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
                </li>
                <li class="grid-1-3"> 
                    <div class="products-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/retro.svg" alt="Bikecraft Passeio">
                    </div>
                    <h3>Passeio</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
                </li>
            </ul>
            <div class="call-to-action">
                <p><?php the_field('call-products'); ?></p>
                <a href="/produtos" class="button button-black">Produtos</a>
            </div>
        </section>
        <section class="portfolio">
            <div class="container">
                <h2 class="subtitle"> Portfólio</h2>
                <?php include(TEMPLATEPATH . "/include/portfolio-clients.php"); ?>
                <div class="call-to-action">
                    <p><?php the_field('call-portfolio'); ?></p>
                    <a href="/portfolio" class="button">Portfólio</a>
                </div>
            </div>
        </section>
        <section class="quality container">
            <?php include(TEMPLATEPATH . "/include/quality.php"); ?>
            <div class="call-to-action">
                <p>conheça mais a nossa história</p>
                <a href="about.html" class="button button-black">Sobre</a>
            </div>
        </section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>