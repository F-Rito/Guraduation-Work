<?php
/*
Template Name: contact
*/
?>

<?php get_template_part('header'); ?>
<section class="top-sec">
    <div class="top">
        <p class="top__img"><img src="<?php echo get_template_directory_uri(); ?>/image/contact.jpg" alt="top.img"></p>
        <h2 class="top__text top__text-left">
            <span class="top__text-left-color contact-page-title">
                <br>
                <br>
                CONTACT
            </span>
        </h2>
        <h2 class="top__text top__text-right">
            <span class="top__text-right-color contact-page-title">
                <br>
                <br>
                CONTACT
            </span>
        </h2>
    </div>
</section> <!-- top-sec -->
<main>
    <article class="main-area">
        <div class="wrap">
            <section class="contact-sec">
                <div class="contact">
                    <div class="contact-text-area">
                        <p class="contact-text-area__lead">
                            お問い合わせは下記フォームから承ります
                            <br>
                            サンプルのためメールは送られません
                        </p>
                        <p class="contact-text-area__lead-caution">
                            <span class="caution-mark">※</span>
                            は必須項目
                        </p>
                    </div> <!-- contact-text-area -->
                    <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="19" title="contact"]'); ?>
                    </div> <!-- contact-form -->
                    <div class="contact-tel">
                        <p class="contact-tel__text">お電話でのお問い合わせ</p>
                        <div class="contact-tel-box">
                            <p class="contact-tel-box__number">000-000-000</p>
                            <p class="contact-tel-box__day">9:00 ~ 21:00　定休日-水曜日</p>
                        </div>
                    </div> <!-- contact-tel -->
                </div> <!-- contact -->
            </section> <!-- contact-sec -->
        </div> <!-- wrap -->
    </article> <!-- main-area -->
</main>
<?php get_template_part('footer'); ?>