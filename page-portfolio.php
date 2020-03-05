<?php
// Template Name: Portfolio
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php include(TEMPLATEPATH . "/include/introduction.php"); ?>
    <section data-anime="1200"class="container fadeInDown" data-slide="quote">
            <?php if(have_rows('portfolio_quote')): while(have_rows('portfolio_quote')) : the_row(); ?>
                    <blockquote class="clients-quote">
                        <?php the_sub_field('quote'); ?>
                        <cite><?php the_sub_field ('client'); ?></cite>
                    </blockquote>
            <?php endwhile; else: endif; ?>
    </section>
    <section class="portfolio">
        <div class="container">
            <?php include(TEMPLATEPATH . "/include/portfolio-clients.php"); ?>
        </div>
    </section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>