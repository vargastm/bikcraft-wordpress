<?php
// Template Name: About
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php include(TEMPLATEPATH . "/include/introduction.php"); ?>
    <section data-anime="1200" class="about-mission container fadeInDown">
        <div class="grid-10">
            <h2 class="subtitle-internal">História, Missão e Visão</h2>
            <?php the_field('mission'); ?>
        </div>
        <div class="grid-6">
            <h2 class="subtitle-internal">Valores</h2>
            <?php the_field('value'); ?>
        </div>
        <div class="grid-16 team-picture">
            <img src="<?php the_field('team_picture'); ?>" alt="Equipe Bikcraft">
        </div>
    </section>
    <section class="quality container">
        <?php include(TEMPLATEPATH . "/include/quality.php"); ?>
    </section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>