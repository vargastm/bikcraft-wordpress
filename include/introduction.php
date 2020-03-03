<style type="text/css">
    .introduction-internal {
        background: url("<?php the_field('background_internal'); ?>") no-repeat center;
        background-size: cover;
    }
</style>

<section class="introduction-internal">
    <div class="container">
        <h1 data-anime="400" class="fadeInDown"><?php the_title(); ?></h1>
        <p data-anime="800" class="fadeInDown"><?php the_field('subtitle'); ?></p>
    </div>
</section>