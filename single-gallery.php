<?php
/*
Template Name: gallery
*/
?>

<?php get_template_part('header'); ?>
<section class="top-sec">
    <div class="top">
        <p class="top__img"><img src="<?php echo get_template_directory_uri(); ?>/image/top.jpg" alt="top.img"></p>
        <h2 class="top__text top__text-left">
            <br>
            <br>
            <span class="top__text-left-color page-title">
                GALLERY
            </span>
        </h2>
        <h2 class="top__text top__text-right">
            <br>
            <br>
            <span class="top__text-right-color page-title">
                GALLERY
            </span>
        </h2>
    </div>
</section> <!-- top-sec -->
<main>
    <article class="main-area">
        <div class="wrap">
            <div class="container">
                <section class="photos-sec">
                    <div class="photos">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) :
                                the_post();
                        ?>
                                <div class="photos-img-flex">
                                    <?php the_content(); ?>
                                </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div> <!-- photos -->
                    <?php get_template_part('pagination'); ?>
                </section> <!-- photos-sec -->
                <?php get_template_part('sidebar-gallery'); ?>
            </div> <!-- container -->
        </div> <!-- wrap -->
    </article>
</main>
<?php get_template_part('footer'); ?>