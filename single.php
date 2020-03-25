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
                <section class="blog-sec">
                    <div class="blog-post">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) :
                                the_post();
                        ?>
                                <h4 class="blog-post__title"><?php the_title(); ?></h4>
                                <div class="blog-post-texts">
                                    <?php the_content(); ?>
                                </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div> <!-- blog-post -->
                    <?php get_template_part('pagination'); ?>
                </section> <!-- post-sec -->
                <?php get_template_part('sidebar-blog'); ?>
            </div> <!-- container -->
        </div> <!-- wrap -->
    </article> <!-- main-area -->
</main>
<?php get_template_part('footer'); ?>