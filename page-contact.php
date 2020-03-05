<?php
// Template Name: Contact
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php include(TEMPLATEPATH . "/include/introduction.php"); ?>
        <section data-anime="1200" class="contact container fadeInDown">
            <form id="form-budget" class="contact-form grid-8">
                <label for="name">Nome</label>
                <input type="text" id="name">
                <label for="email">E-mail</label>
                <input type="text" id="email">
                <label for="phone">Telefone</label>
                <input type="text" id="phone">
                <label for="specifications">Especificações</label>
                <textarea id="specifications"></textarea>
                <button type="submit" class="button button-black">Enviar</button>
            </form>
            <div class="contact-data grid-8">
                <h3>Dados</h3> 
                <span><?php the_field('phone'); ?></span> 
                <span><?php the_field('email'); ?></span>
                <span><?php the_field('address1'); ?></span>
                <span><?php the_field('address2'); ?></span>
                <h3>Redes Sociais</h3>
                <?php include(TEMPLATEPATH . "/include/socialmedia.php"); ?>
            </div>
        </section>
        <section class="container contact-map">
            <a href="<?php the_field('map_link'); ?>" target="_blank" class="grid-16"><img src="<?php the_field('map_image'); ?>" alt="<?php the_field('map_address'); ?>"></a>
        </section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>