<?php
// Template Name: Home
get_header();
?>

<?php get_header(); ?>
        <section class="introduction">
            <div class="container">
                <h1 data-anime="400" class="fadeInDown">Bicicletas Feitas a Mão</h1>
                <blockquote data-anime="800" class="quote-external fadeInDown">
                    <p>"não tenha nada em sua casa que você não consiedere útil ou acredita ser bonito"</p>
                    <cite>WILLIAM MORRIS</cite>
                </blockquote>
                <a href="products.html" data-anime="1200" class="button">Orçamento</a>
            </div>
        </section>
        <section data-anime="1600" class="products container fadeInDown">
            <h2 class="subtitle">Produtos</h2>
            <ul class="products-group">
                <li class="grid-1-3"> 
                    <div class="products-icon">
                        <img src="assets/images/products/ride.svg" alt="Bikecraft Passeio">
                    </div>
                    <h3>Passeio</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
                </li>
                <li class="grid-1-3"> 
                    <div class="products-icon">
                        <img src="assets/images/products/sport.svg" alt="Bikecraft Passeio">
                    </div>
                    <h3>Passeio</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
                </li>
                <li class="grid-1-3"> 
                    <div class="products-icon">
                        <img src="assets/images/products/retro.svg" alt="Bikecraft Passeio">
                    </div>
                    <h3>Passeio</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
                </li>
            </ul>
            <div class="call-to-action">
                <p>clique aqui e veja os detalhes dos produtos</p>
                <a href="products.html" class="button button-black">Produtos</a>
            </div>
        </section>
        <section class="portfolio">
            <div class="container">
                <h2 class="subtitle"> Portfólio</h2>
                <ul class="portfolio-group">
                    <li class="grid-8"><img src="assets/images/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
                    <li class="grid-8"><img src="assets/images/portfolio/ride.jpg" alt="Bicicleta Passeio"></li>
                    <li class="grid-16"><img src="assets/images/portfolio/sport.jpg" alt="Bicicleta Sport"></li>
                </ul>
                <div class="call-to-action">
                    <p>conheça mais o nosso portfolio</p>
                    <a href="portfolio.html" class="button">Portfólio</a>
                </div>
            </div>
        </section>
        <section class="quality container">
            <h2 class="subtitle">Qualidades</h2>
            <img src="assets/images/bikcraft-quality.svg" alt="Bikcraft">
            <ul class="quality-group">
                <li class="grid-1-3">
                    <h3>Durabilidade</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação</p>
                </li>
                <li class="grid-1-3">
                    <h3>Durabilidade</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação</p>
                </li>
                <li class="grid-1-3"> 
                    <h3>Durabilidade</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação</p>
                </li>
            </ul>
            <div class="call-to-action">
                <p>conheça mais a nossa história</p>
                <a href="about.html" class="button button-black">Sobre</a>
            </div>
        </section>
<?php get_footer(); ?>