<?php
// Template Name: Single Produtos
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section data-anime="1200" class="container products-group fadeInDown">
        <div class="grid-11">
            <img src="<?php the_field('product_picture1'); ?>" alt="Bikcraft <?php the_title(); ?>">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="grid-5 products-icon"><img src="<?php the_field('product_icon'); ?>"></div>
        <div class="grid-8"><img src="<?php the_field('product_picture2'); ?>" alt="Bikcraft <?php the_title(); ?>"></div>
        <div class="grid-8 products-info">
            <?php the_content(); ?>
        </div>
    </section>
    <?php include(TEMPLATEPATH . "/include/products-budget.php"); ?>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>