<?php
/*
Template Name: service
*/
$categories = get_categories(array('taxonomy' => 'gallery'));
// var_dump($categories);
$result_categories = array();
foreach ($categories as $category) {

    // $babyObj = $categories[0];
    $tax = $category->taxonomy; //gallery
    $ct = $category->category_nicename; //baby
    $name = $category->name; //赤ちゃん
    // http://graduation-work.local/archives/gallery/baby/
    $url = "https://graduationwork-samplesite.work/archives/$tax/$ct/";
    // $a =  "<a href='$url'>$name ページ</a>";
    array_push($result_categories, $url);
}

?>

<?php echo get_template_part('header') ?>
<section class="top-sec">
    <div class="top">
        <p class="top__img"><img src="<?php echo get_template_directory_uri(); ?>/image/service.jpg" alt="top.img"></p>
        <h2 class="top__text top__text-left">
            <span class="top__text-left-color">
                <br>
                <br>
                SERVICE
            </span>
        </h2>
        <h2 class="top__text top__text-right">
            <span class="top__text-right-color">
                <br>
                <br>
                SERVICE
            </span>
        </h2>
    </div> <!-- top -->
</section> <!-- top-sec -->
<main>
    <article class="main-area">
        <div class="wrap">
            <section class="work-sec">
                <div class="work">
                    <h3 class="work__heading heading">これが私たちの仕事です</h3>
                    <div class="work-container">
                        <div class="work-container-text-area">
                            <p class="work-container-text-area__text">
                                <strong>なぜ私がプログラミングの勉強をはじめたのか</strong>
                                <br>
                                <br>
                                <br>
                                元々私は建築やインテリアのデザインを学びたく大学に入りました。
                                <br>
                                しかし、大学生活を送っていくうちに本当にやりたいことはこれなのかという考えをもつようになり、同時に将来のことで焦りを感じていました。
                                <br>
                                <br>
                                大学では建築だけでなく、サービス、プロダクト、グラフィックなど幅広い分野のデザインをまなぶことができます。
                                <br>
                                その中で、webサイトのリデザインの課題がありました。この課題がプログラミングの勉強をするきっかけでした。
                                <br>
                                <br>
                                webサイトのデザインについて調べていくうちに魅力を感じ、深く調べていました。するとwebデザインナーでもプログラミングの知識がいるということを知り、progateをはじめ徐々にプログラミングの勉強を始めます。
                            </p>

                        </div> <!-- work-container-text-area -->
                        <div class="work-container-img-area">
                            <div class="work-container-largeImg-area">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/image/service/photo-studio.jpg" alt=""></p>
                            </div>
                            <div class="work-container-smallImg-area">
                                <p><img class="work-container-smallImg-area__photo work-container-smallImg-area__photo-left" src="<?php echo get_template_directory_uri(); ?>/image/service/analog-camera.jpg" alt=""></p>
                                <p><img class="work-container-smallImg-area__photo work-container-smallImg-area__photo-right" src="<?php echo get_template_directory_uri(); ?>/image/service/film.png" alt=""></p>
                            </div>
                        </div> <!-- work-container-img-area -->
                    </div> <!-- work-container -->
                </div> <!-- work -->
            </section> <!-- work-sec -->
            <section class="work-photo-sec">
                <div class="work-photo">
                    <h3 class="work-photo-heading heading">写真</h3>
                    <div class="work-photo-area work-photo-area-top">
                        <?php $terms = get_terms('gallery') ?>
                        <div class="work-photo-area-group">
                            <a href="<?= $result_categories[0] ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/gallery/baby/test.jpg" alt="baby" class="work-photo-area-group__img"></a>
                            <a href="<?= $result_categories[0] ?>" class="work-photo-area-group__caption">赤ちゃん</a>
                        </div> <!-- work-photo-area-group -->
                        <div class="work-photo-area-group">
                            <a href="<?= $result_categories[1] ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/gallery/admission/test.jpg" alt="admission" class="work-photo-area-group__img"></a>
                            <a href="<?= $result_categories[1] ?>" class="work-photo-area-group__caption">入学・入園式</a>
                        </div> <!-- work-photo-area-group -->
                        <div class="work-photo-area-group">
                            <a href="<?= $result_categories[2] ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/gallery/shichigosan/test.jpg" alt="shichigosan" class="work-photo-area-group__img"></a>
                            <a href="<?= $result_categories[2] ?>" class="work-photo-area-group__caption">七五三</a>
                        </div> <!-- work-photo-area-group -->
                    </div> <!-- work-photo-area -->
                    <div class="work-photo-area work-photo-area-bottom">
                        <div class="work-photo-area-group">
                            <a href="<?= $result_categories[3] ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/gallery/new-adult/test.jpg" alt="new-adult" class="work-photo-area-group__img"></a>
                            <a href="<?= $result_categories[3] ?>" class="work-photo-area-group__caption">成人式</a>
                        </div> <!-- work-photo-area-group -->
                        <div class="work-photo-area-group">
                            <a href="<?= $result_categories[4] ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/gallery/bridal/test.jpg" alt="bridal" class="work-photo-area-group__img"></a>
                            <a href="<?= $result_categories[4] ?>" class="work-photo-area-group__caption">ブライダル</a>
                        </div> <!-- work-photo-area-group -->
                        <div class="work-photo-area-group">
                            <a href="<?= $result_categories[5] ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/gallery/fam/test.jpg" alt="family" class="work-photo-area-group__img"></a>
                            <a href="<?= $result_categories[5] ?>" class="work-photo-area-group__caption">家族写真</a>
                        </div> <!-- work-photo-area-group -->
                    </div> <!-- work-photo-area -->
                    <a href="<?php echo home_url('/gallery'); ?>" class="gallery__link">
                        写真を見る<i class="fas fa-angle-right"></i>
                    </a>
                </div> <!-- work-photo -->
            </section> <!-- work-photo-sec -->
            <section class="staff-sec">
                <div class="staff">
                    <h3 class="staff__heading heading">スタッフ紹介</h3>
                    <div class="staff-group staff-group-top">
                        <img class="staff-group__avatar" src="<?php echo get_template_directory_uri(); ?>/image/staff/staff1.jpg" alt="staff">
                        <div class="staff-group-text staff-group-top-text">
                            <p class="staff-group-text__info">
                                カメラマン
                                <span class="staff-group-text__info-name">本間 映</span></p>
                            <p class="staff-group-text__hobby">趣味・特技</p>
                            <p class="staff-group-text__hobby-text">
                                読書、散歩
                                <br>
                                よく家の周りを散歩しています。
                            </p>
                        </div>
                    </div> <!-- staff -->
                    <div class="staff-group staff-group-bottom">
                        <div class="staff-group-text">
                            <p class="staff-group-text__info">
                                カメラマン
                                <span class="staff-group-text__info-name">良久 話</span></p>
                            <p class="staff-group-text__hobby">趣味・特技</p>
                            <p class="staff-group-text__hobby-text">
                                ギター、運動
                                <br>
                                動物も好きです。
                            </p>
                        </div>
                        <img class="staff-group__avatar" src="<?php echo get_template_directory_uri(); ?>/image/staff/staff2.jpg" alt="staff">
                    </div> <!-- staff-group -->
                </div> <!-- staff-group -->
            </section> <!-- staff-sec -->
            <section class="answer-sec">
                <div class="answer" id="qa">
                    <h3 class="answer__heading heading">よくあるお問い合わせ</h3>
                    <div class="answer-group">
                        <div class="answer-group-text">
                            <p class="answer-group-text__question">
                                <span class="answer-group-text__question-mark answer-group-text__mark">Q .</span>
                                よくあるお客様の質問をここに記述してください。
                            </p>
                            <p class="answer-group-text__answer">
                                <span class="answer-group-text__answer-mark answer-group-text__mark">A .</span>
                                質問の回答となる内容をここに記述してください。
                            </p>
                        </div>
                        <div class="answer-group-text">
                            <p class="answer-group-text__question">
                                <span class="answer-group-text__question-mark answer-group-text__mark">Q .</span>
                                よくあるお客様の質問をここに記述してください。
                            </p>
                            <p class="answer-group-text__answer">
                                <span class="answer-group-text__answer-mark answer-group-text__mark">A .</span>
                                質問の回答となる内容をここに記述してください。
                            </p>
                        </div>
                    </div>
                    <div class="answer-group">
                        <div class="answer-group-text">
                            <p class="answer-group-text__question">
                                <span class="answer-group-text__question-mark answer-group-text__mark">Q .</span>
                                よくあるお客様の質問をここに記述してください。
                            </p>
                            <p class="answer-group-text__answer">
                                <span class="answer-group-text__answer-mark answer-group-text__mark">A .</span>
                                質問の回答となる内容をここに記述してください。
                            </p>
                        </div>
                        <div class="answer-group-text">
                            <p class="answer-group-text__question">
                                <span class="answer-group-text__question-mark answer-group-text__mark">Q .</span>
                                よくあるお客様の質問をここに記述してください。
                            </p>
                            <p class="answer-group-text__answer">
                                <span class="answer-group-text__answer-mark answer-group-text__mark">A .</span>
                                質問の回答となる内容をここに記述してください。
                            </p>
                        </div>
                    </div>
                    <div class="answer-group">
                        <div class="answer-group-text">
                            <p class="answer-group-text__question">
                                <span class="answer-group-text__question-mark answer-group-text__mark">Q .</span>
                                よくあるお客様の質問をここに記述してください。
                            </p>
                            <p class="answer-group-text__answer">
                                <span class="answer-group-text__answer-mark answer-group-text__mark">A .</span>
                                質問の回答となる内容をここに記述してください。
                            </p>
                        </div>
                        <div class="answer-group-text">
                            <p class="answer-group-text__question">
                                <span class="answer-group-text__question-mark answer-group-text__mark">Q .</span>
                                よくあるお客様の質問をここに記述してください。
                            </p>
                            <p class="answer-group-text__answer">
                                <span class="answer-group-text__answer-mark answer-group-text__mark">A .</span>
                                質問の回答となる内容をここに記述してください。
                            </p>
                        </div>
                    </div>
                </div>
            </section>
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
    </article>
</main>
<?php get_template_part('footer'); ?>