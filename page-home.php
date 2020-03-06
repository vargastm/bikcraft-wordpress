<?php
// Template Name: Home
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php 
        $image_id = get_field('background_home');
        $background_large = wp_get_attachment_image_src($image_id, 'large');
        $background_medium = wp_get_attachment_image_src($image_id, 'medium');
    ?>
    <style type="text/css">
        .introduction {
            background: url('<?php echo $background_large[0] ?>') no-repeat center;
            background-size: cover;
        }
        @media only screen and (max-width: 787px) {
            .introduction {
                background: url('<?php echo $background_medium[0] ?>') no-repeat center;
            }
        }
    </style>
    <section class="introduction">
        <div class="container">
            <h1 data-anime="400" class="fadeInDown"><?php the_field('introduction_title'); ?></h1>
            <blockquote data-anime="800" class="quote-external fadeInDown">
                <p><?php the_field('introduction_quote'); ?></p>
                <cite><?php the_field('author'); ?></cite>
            </blockquote>
            <a href="/produtos" data-anime="1200" class="button">Orçamento</a>
        </div>
    </section>
    <section data-anime="1600" class="products container fadeInDown">
        <h2 class="subtitle">Produtos</h2>
        <ul class="products-group product-inline">
            <?php
                $args = array (
                    'post_type' => 'produtos',
                    'order' => 'ASC'    
                );
                $the_query = new WP_Query ( $args );
            ?>
                <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li class="grid-1-3"> 
                    <a href="<?php the_permalink(); ?>">
                        <div class="products-icon">
                            <img src="<?php the_field('product_icon'); ?>" alt="Bikecraft <?php the_title(); ?>">
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_field('product_resume'); ?></p>
                    </a>
                </li>
            <?php endwhile; else: endif; ?>
        </ul>
        <div class="call-to-action">
            <p><?php the_field('call_products'); ?></p>
            <a href="/produtos" class="button button-black">Produtos</a>
        </div>
    </section>
    <section class="portfolio">
        <div class="container">
            <h2 class="subtitle"> Portfólio</h2>
            <?php include(TEMPLATEPATH . "/include/portfolio-clients.php"); ?>
            <div class="call-to-action">
                <p><?php the_field('call_portfolio'); ?></p>
                <a href="/portfolio" class="button">Portfólio</a>
            </div>
        </div>
    </section>
    <section class="quality container">
        <?php include(TEMPLATEPATH . "/include/quality.php"); ?>
        <div class="call-to-action">
            <p>conheça mais a nossa história</p>
            <a href="/sobre" class="button button-black">Sobre</a>
        </div>
    </section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>