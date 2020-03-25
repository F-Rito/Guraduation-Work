<div class="post-group">
    <a href="<?php the_permalink(); ?>">
        <?php
            the_post_thumbnail('post_archive_thumbnail',
                array (
                    'alt' => the_title_attribute('echo=0'),
                    'title' => the_title_attribute('echo=0'),
                ));
        ?>
    </a>
    <div class="post-text-group">
        <a href="<?php the_permalink(); ?>" class="post-text-group__date"><?php the_time(get_option('date_format')); ?></a>
        <a href="<?php the_permalink(); ?>" class="post-text-group__text"><?php the_title(); ?></a>
    </div>
</div>