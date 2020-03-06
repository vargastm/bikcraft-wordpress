<?php
// Template Name: Products
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php include(TEMPLATEPATH . "/include/introduction.php"); ?>
    <?php
        $args = array (
            'post_type' => 'produtos',
            'order' => 'ASC'    
        );
        $the_query = new WP_Query ( $args );
    ?>
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <section data-anime="1200" class="container products-group product-inline fadeInDown">
        <a href="<?php the_permalink(); ?>">
            <div class="grid-11">
                <img src="<?php the_field('product_picture1'); ?>" alt="Bikcraft <?php the_title(); ?>">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="grid-5 products-icon"><img src="<?php the_field('product_icon'); ?>"></div>
        </a>
        </section>
    <?php endwhile; else: endif; ?>
    <?php include(TEMPLATEPATH . "/include/products-budget.php"); ?>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>