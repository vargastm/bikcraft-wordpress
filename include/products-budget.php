<section class="budget">
    <div class="container">
        <h2 class="subtitle">Orçamento</h2>
        <form id="form-budget" class="form grid-8">
            <label for="name">Nome</label>
            <input type="text" id="name">
            <label for="email">E-mail</label>
            <input type="text" id="email">
            <label for="phone">Telefone</label>
            <input type="text" id="phone">
            <label for="specifications">Especificações</label>
            <textarea id="specifications"></textarea>
            <button type="submit" class="button">Enviar</button>
        </form>
        
        <?php 
            $contact = get_page_by_title('contato');
            $products = get_page_by_title('produtos'); 
        ?>

        <div class="budget-data grid-8">
            <h3>Dados</h3> 
            <span><?php the_field('phone', $contact); ?></span> 
            <span><?php the_field('email', $contact); ?></span>
            <h3>Monte a sua Bikcraft</h3>
            <p>Escolha as especificações</p>
            <?php the_field('group_budget', $products); ?>
        </div>
    </div>
</section>  