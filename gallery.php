<?php
/*
Template Name: gallery
*/
?>

<?php get_template_part('header'); ?>
<section class="top-sec">
    <div class="top">
        <p class="top__img"><img src="<?php echo get_template_directory_uri(); ?>/image/gallery.jpg" alt="top.img"></p>
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
                        <div class="photos-container">
                            <?php
                            $paged = get_query_var("paged") ? get_query_var("paged") : 1;

                            $wp_query = new WP_Query();
                            $my_posts = array(
                                'post_type' => 'photo',
                                "post_status" => "publish",
                                "order" => "desc",
                                "orderby" => "post_date",
                                "paged" => $paged,
                            );
                            $wp_query->query($my_posts);
                            if ($wp_query->have_posts()) :
                            ?>
                                <div class="photos-container-item">
                                    <?php
                                    while ($wp_query->have_posts()) :
                                        $wp_query->the_post();
                                    ?>
                                        <?php the_content(); ?>
                                    <?php
                                    endwhile;
                                    ?>
                                </div>
                            <?php
                            endif;
                            ?>
                        </div> <!-- photos-container -->
                        <?php get_template_part('pagination') ?>
                    </div> <!-- photos -->
                </section> <!-- photos-sec -->
                <?php get_template_part('sidebar-gallery'); ?>
            </div> <!-- container -->
            <section class="form-access-sec">
                <div class="form-access">
                    <h3 class="qa__title title">CONTACT</h3>
                    <div class="form-access__inner">
                        <p class="form-access__inner-text">
                            ご質問、ご相談等は
                            <br>
                            お気軽にお問い合わせください
                        </p>
                        <a href="<?php echo home_url('contact') ?>" class="form-access__inner-form-btn">CONTACT FORM</a>
                    </div>
                </div> <!-- form-access -->
            </section> <!-- form-access-sec -->
        </div> <!-- wrap -->
    </article> <!-- main-area -->
</main>
<?php get_template_part('footer'); ?>