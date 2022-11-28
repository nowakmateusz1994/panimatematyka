<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="header__contact">
            <div class="header__contact-items">

            </div>
            <div class="header__contact-social">

            </div>
        </div>

        <div class='header__branding'>
            <?php

            if (get_theme_mod('your_theme_logo')) : ?>

                <img src="<?php echo get_theme_mod('your_theme_logo'); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">

            <?php else : ?>

                <h1 class="site-title"><?php bloginfo('name'); ?></h1>

            <?php endif; ?>
        </div>
        <div class="header__nav">
            <?php devmn_top_nav(); ?>
        </div>
    </header>