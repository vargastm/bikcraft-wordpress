<?php $contact = get_page_by_title('contato'); ?>

<ul>
    <?php if(have_rows('social_media', $contact)): while(have_rows('social_media', $contact)) : the_row(); ?>
        <li><a href="<?php the_sub_field('link_social'); ?>" target="_blank"><img src="<?php the_sub_field('icon_social'); ?>" alt="<?php the_sub_field('name_social'); ?>"></a></li>
    <?php endwhile; else : endif; ?>
</ul>