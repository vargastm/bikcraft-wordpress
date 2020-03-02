<?php
// Template Name: Portfolio
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php include(TEMPLATEPATH . "/include/introduction.php"); ?>
    <section data-anime="1200"class="container fadeInDown" data-slide="quote">
        <blockquote class="clients-quote">
            <p>"Pedalar sempre foi a  minhã paixão, o que o pessoal da Bikcraft fez foi intensificar o meu amor por esta atividade. Recomendo a todos que amo."</p>
            <cite>Barbara Moss</cite>
        </blockquote>
        <blockquote class="clients-quote">
            <p>"Nada melhor do que dar um rolê com minha Bikcraft na orla. Essa é a minha companheira mais fiel, nunca me trai e está sempre a minha disposição."</p>
            <cite>Jhony Rato</cite>
        </blockquote>
        <blockquote class="clients-quote">
            <p>"Aqueles que ainda não possuem uma Bikcraft, não sabem o que estão perdendo. A precisão é a bsurda e a velocidade transcedental. Nunca vi nada igual."</p>
            <cite>Bernardo Pereira</cite>
        </blockquote>
    </section>
    <section class="portfolio">
        <div class="container">
            <?php include(TEMPLATEPATH . "/include/portfolio-clients.php"); ?>
        </div>
    </section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>