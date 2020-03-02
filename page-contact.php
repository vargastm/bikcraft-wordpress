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
                <span>+55 48 9 9352 3595</span> 
                <span>orcamento@bikcraft.com</span>
                <span>Rua Ali - Botafogo</span>
                <span>Rio de Janeiro - RJ - Brasil</span>
                <h3>Redes Sociais</h3>
                <ul>
                    <li><a href="#" target="_blank"><img src="assets/images/social-media/facebook.svg"></a></li>
                    <li><a href="#" target="_blank"><img src="assets/images/social-media/instagram.svg"></a></li>
                    <li><a href="#" target="_blank"><img src="assets/images/social-media/twitter.svg"></a></li>
                </ul>
            </div>
        </section>
        <section class="container contact-map">
            <a href="http://google.com" target="_blank" class="grid-16"><img src="assets/images/address-bikcraft.jpg" alt="Endereço da Bikcraft"></a>
        </section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>