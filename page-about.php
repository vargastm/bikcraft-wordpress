<?php
// Template Name: About
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php include(TEMPLATEPATH . "/include/introduction.php"); ?>
    <section data-anime="1200" class="about-mission container fadeInDown">
        <div class="grid-10">
            <h2 class="subtitle-internal">História, Missão e Visão</h2>
            <p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel ssencial na formulação de gestão inovadora da qual fazemos parte.</p>
            <p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel ssencial na formulação de gestão inovadora da qual fazemos parte.</p>
        </div>
        <div class="grid-6">
            <h2 class="subtitle-internal">Valores</h2>
            <ul>
                <li>- Qualidade no processo com</li>
                <li>- Fico no cliente sem perder a</li>
                <li>- Diversão, preservando a</li>
            </ul>
        </div>
        <div class="grid-16 team-picture">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-bikcraft.jpg" alt="Equipe Bikcraft">
        </div>
    </section>
    <section class="quality container">
        <?php include(TEMPLATEPATH . "/include/quality.php"); ?>
    </section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>