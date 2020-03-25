<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <h1 class="header__logo">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/image/logo-header.svg" alt="<?php bloginfo('name'); ?>">
            </a>
        </h1>
        <?php
            wp_nav_menu(array(
                'container' => 'nav',
                'container_class' => 'header__global-nav',
                'theme_location' => 'place-global',
            ));
        ?>
    </header>
