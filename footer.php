<?php $contact = get_page_by_title('contato'); ?>

    <style type="text/css">
        .break {
            background: url("<?php the_field('background_break', $contact); ?>") no-repeat center;
            background-size: cover;
        }
    </style>

        <section class="break">
            <blockquote class="quote-external container">
            <?php the_field('phrase_break', $contact); ?>
            <cite><?php the_field('phrase_author', $contact); ?></cite>
            </blockquote>
        </section>        
        <footer>
            <div class="footer">
                <div class="container footer-container">
                    <div class="grid-8 footer-storie">
                        <h3>Nossa História</h3>
                        <p><?php the_field('resume_storie', $contact); ?></p>
                    </div>
                    <div class="grid-4 footer-contact">
                        <h3>Contato</h3>
                        <ul>
                            <li>- <?php the_field('phone', $contact); ?></li>
                            <li>- <?php the_field('email', $contact); ?></li>
                            <li>- <?php the_field('address1', $contact); ?></li>
                            <li>- <?php the_field('address2', $contact); ?></li>
                        </ul>
                    </div>
                    <div class="grid-4 footer-social">
                        <h3>Social Media</h3>
                        <?php include(TEMPLATEPATH . "/include/socialmedia.php"); ?>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p class="grid-16">Bikcraft <?php echo date('Y'); ?> - Alguns direitos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/simple-anime.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/simple-slide.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>