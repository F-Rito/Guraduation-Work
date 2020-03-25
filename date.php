<?php get_template_part('header'); ?>
<section class="top-sec">
    <div class="top">
        <p class="top__img"><img src="<?php echo get_template_directory_uri(); ?>/image/top.jpg" alt="top.img"></p>
        <h2 class="top__text top__text-left">
            <br>
            <br>
            <span class="top__text-left-color page-title">
                BLOG
            </span>
        </h2>
        <h2 class="top__text top__text-right">
            <br>
            <br>
            <span class="top__text-right-color page-title">
                BLOG
            </span>
        </h2>
    </div>
</section> <!-- top-sec -->
<main>
    <article class="main-area">
        <div class="wrap">
            <div class="container">
                <section class="post-sec">
                    <div class="post">
                        <?php
                        if (have_posts()) :
                            $count = 1;
                            while (have_posts()) :
                                the_post();
                                if ($count % 2 > 0 && $count != 1) :
                        ?>
                    </div> <!-- post -->
                    <div class="post">
            <?php
                                endif;
                                get_template_part('content');
                                $count++;
                            endwhile;
                        endif;
            ?>
                    </div>
                    <?php get_template_part('pagination'); ?>
                </section>
                <?php get_template_part('sidebar-blog'); ?>
            </div>
        </div> <!-- wrap -->
    </article>
</main>
<?php get_template_part('footer'); ?>