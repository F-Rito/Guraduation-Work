<?php
/*
Template Name: home
*/
?>

<?php get_template_part('header'); ?>
<section class="top-sec">
    <div class="top">
        <p class="top__img"><img src="<?php echo get_template_directory_uri(); ?>/image/top.jpg" alt=""></p>
        <h2 class="top__text top__text-left">
            <span class="top__text-left-color">
                わたしが<br>ここで学<br>んだこと
            </span>
        </h2>
        <h2 class="top__text top__text-right">
            <span class="top__text-right-color">
                わたしが<br>ここで学<br>んだこと
            </span>
        </h2>
    </div>
</section> <!-- top-sec -->
<main>
    <article class="main-area">
        <div class="wrap">
            <section class="mind-sec">
                <div class="mind">
                    <h3 class="mind__heading">
                        photo studio向けの
                        <br>
                        WordPressサイトです
                    </h3>
                    <p class="mind__lead">
                        このサイトは私のスクール卒業制作のフォトスタジオ向けのwordpressテーマです。デザインから行いサイト内テキストではスクールで学んだことやプログラミングを始めたきっかけをまとめました。
                    </p>
                </div>
            </section><!-- mind-sec -->
            <section class="service-sec">
                <div class="service">
                    <h3 class="service__title title">SERVICE</h3>
                    <div class="service-group">
                        <div class="service-group-texts">
                            <p class="service-group-texts__lead">
                                <strong>CodeShipで身につけたこととは</strong>
                            </p>
                            <p class="service-group-texts__lead">
                                HTML,CSS,JavaScript,PHP,jQuery,Wordpressをテキストにそって勉強をしました。
                            </p>
                            <p class="service-group-texts__lead">
                                テキストを終了した後、WordPressの学びをふかめJavaScriptのフレームワークであるVue.jsを学んだり、チーム開発では１つの制作物を時間内にみんなで完成させました。
                            </p>
                            <p class="service-group-texts__lead">
                                最終制作は今までにみなかった実装などがあり行き詰ることがありましたが、メンターの方の協力の元、完成させる事ができました。
                            </p>
                        </div> <!-- service-group-left -->
                        <div class="service-group-catch">
                            <p>
                                <img class="service-group-catch__img" src="<?php echo get_template_directory_uri(); ?>/image/top-service.jpg" alt="service-img">
                            </p>
                        </div> <!-- service-group-right -->
                    </div> <!-- service-group -->
                    <a href="<?php echo home_url('/service'); ?>" class="service__link">
                        サービスを見る<i class="fas fa-angle-right"></i>
                    </a>
                </div> <!-- service -->
            </section> <!-- service-sec -->
            <section class="gallery-sec">
                <div class="gallery">
                    <h3 class="gallery__title title">GALLERY</h3>
                    <div class="gallery-grid-container">
                        <div class="gallery-grid-item gallery-grid-item__large-left photo-large">
                            <p class="gallery-grid-item__photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/gallery/baby/test2.jpg" alt="">
                            </p>
                        </div>
                        <div class="gallery-grid-item gallery-grid-item__small-center photo-small">
                            <p class="gallery-grid-item__photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/gallery/shichigosan/test4.jpg" alt="">
                            </p>
                        </div>
                        <div class="gallery-grid-item gallery-grid-item__large-right photo-large">
                            <p class="gallery-grid-item__photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/gallery/bridal/test1.jpg" alt="">
                            </p>
                        </div>
                        <div class="gallery-grid-item gallery-grid-item__large-center photo-large">
                            <p class="gallery-grid-item__photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/gallery/new-adult/test2.jpg" alt="">
                            </p>
                        </div>
                        <div class="gallery-grid-item gallery-grid-item__small-left photo-small">
                            <p class="gallery-grid-item__photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/gallery/admission/test3.jpg" alt="">
                            </p>
                        </div>
                        <div class="gallery-grid-item gallery-grid-item__small-right photo-small">
                            <p class="gallery-grid-item__photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/gallery/fam/test1.jpg" alt="">
                            </p>
                        </div>
                    </div> <!-- gallery gallery-grid-container -->
                    <a href="<?php echo home_url('gallery'); ?>" class="gallery__link">
                        写真を見る<i class="fas fa-angle-right"></i>
                    </a>
                </div> <!-- gallery -->
            </section> <!-- gallery-sec -->
            <section class="sec-wrapper">
                <div class="blog">
                    <h3 class="blog__title title">BLOG</h3>
                    <ul class="blog__list">
                        <?php
                        $wp_query = new WP_Query();
                        $my_posts = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                        );
                        $wp_query->query($my_posts);
                        if ($wp_query->have_posts()) :
                            while ($wp_query->have_posts()) :
                                $wp_query->the_post();
                        ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>" class="blog__list-link">
                                        <span class="blog__list-date">/ <?php the_time(get_option('date_format')); ?></span>
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                    <a href="<?php echo home_url('blog'); ?>" class="blog__link-btn">
                        一覧を見る<i class="fas fa-angle-right"></i>
                    </a>
                </div> <!-- blog -->
                <div class="qa">
                    <h3 class="qa__title title">Q & A</h3>
                    <ul class="qa__list">
                        <li>
                            <a href="<?php echo home_url('/service'); ?>#qa" class="qa__list-link">
                                <span class="qa__list-mark">Q .</span>
                                よくあるお客様の質問をここに記述してください。
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/service'); ?>#qa" class="qa__list-link">
                                <span class="qa__list-mark">Q .</span>
                                よくあるお客様の質問をここに記述してください。
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/service'); ?>#qa" class="qa__list-link">
                                <span class="qa__list-mark">Q .</span>
                                よくあるお客様の質問をここに記述してください。
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/service'); ?>#qa" class="qa__list-link">
                                <span class="qa__list-mark">Q .</span>
                                よくあるお客様の質問をここに記述してください。
                            </a>
                        </li>
                    </ul>
                    <a href="<?php echo home_url('/service'); ?>#qa" class="qa__link-btn">
                        一覧を見る<i class="fas fa-angle-right"></i>
                    </a>
                </div> <!-- qa -->
            </section> <!-- sec-wrapper -->
            <section class="access-sec">
                <div class="access">
                    <h3 class="access-group-texts__title title">
                        ACCESS
                    </h3>
                    <div class="access-group">
                        <div class="access-group-texts">
                            <dl class="access-group-texts__info">
                                <dt>営業時間</dt>
                                <dd>9:00 ~ 21:00</dd>
                                <dt>定休日</dt>
                                <dd>水曜日</dd>
                                <dt>住所</dt>
                                <dd>
                                    <p>
                                        東京都渋谷区道玄坂
                                        <br>
                                        １丁目２
                                    </p>
                                </dd>
                                <dt>TEL</dt>
                                <dd class="access-group-texts__info-tel">000-000-000</dd>
                            </dl>
                        </div>
                        <div class="access-group-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103639.92741207157!2d139.669255252748!3d35.73242223697326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b57efbd57c7%3A0x217e9d9fe306fba!2z5b-g54qs44OP44OB5YWs5YOP!5e0!3m2!1sja!2sjp!4v1575450689340!5m2!1sja!2sjp" width="650" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="access-group">
                    </div>
                </div> <!-- access -->
            </section> <!-- access-sec -->
            <section class="form-access-sec">
                <div class="form-access">
                    <h3 class="qa__title title">CONTACT</h3>
                    <div class="form-access__inner">
                        <p class="form-access__inner-text">
                            ご質問、ご相談等は
                            <br>
                            お気軽にお問い合わせください
                        </p>
                        <a href="<?php echo home_url('/contact') ?>" class="form-access__inner-form-btn">CONTACT FORM</a>
                    </div>
                </div> <!-- form-access -->
            </section> <!-- form-access-sec -->
        </div> <!-- wrap -->
    </article> <!-- main-area -->
</main>
<?php get_template_part('footer'); ?>