<?php $about = get_page_by_title('sobre'); ?>
<h2 class="subtitle"><?php the_field('title_quality', $about); ?></h2>
<img src="<?php the_field('logo_bikcraft', $about); ?>" alt="Bikcraft">
<ul class="quality-group">
    <?php if(have_rows('quality_item', $about)): while(have_rows('quality_item', $about)) : the_row(); ?>
        <li class="grid-1-3">
            <h3><?php the_sub_field('title_item_quality', $about); ?></h3>
            <p><?php the_sub_field('description_item_quality', $about); ?></p>
        </li>
    <?php endwhile; else: endif; ?>
</ul>