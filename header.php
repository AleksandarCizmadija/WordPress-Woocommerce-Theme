<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>


    <div class="header-nav">
        <div class="container">
            <p>
                <i class="fas fa-phone-alt"></i>
                <a href="tel:+123456789">+123 456 789</a>
            </p>
            <p>
                <i class="fas fa-paper-plane"></i>
                <a href="mailto:youremail@email.com">youremail@email.com</a>
            </p>
            <p>
                3-5 Business days delivery & free returns
            </p>
        </div> <!-- container -->
    </div> <!-- header-nav -->

    <div class="main-nav">
        <div class="container menu-items">
            <a href="<?php echo get_home_url();?>" class="logo">Vegefoods</a>
            <a href="#" class="menu-bar"><i class="fas fa-bars"></i> MENU</a>
            <?php
                    wp_nav_menu( array(
                        'theme_location' => 'top-menu', // Defined when registering the menu
                        'menu_id'        => 'menu',
                        'container'      => false,
                        'depth'          => 2,
                        'menu_class'     => 'links',
                    ) );
                ?>
        </div> <!-- container -->
    </div> <!-- main-nav -->