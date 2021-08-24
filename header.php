<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <link rel="shortcut icon" href="<?php echo bloginfo ('template_url');?>/assets/img/icons/favicon/favicon.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/sass/libs/_fonts.scss">
    <link rel="stylesheet" href="/css/style.min.css"> -->
    <?php
        wp_head();
    ?>
</head>
<body>
    <div class="promo">
        <header>
            <nav>
                <div class="container">
                    <ul class="header__menu">
                        <li><a class="header__menu_link" href="#">Home</a></li>
                        <li><a class="header__menu_link" href="#">Product</a></li>
                        <li><a class="header__menu_link" href="#">Pricing</a></li>
                        <li><a class="header__menu_link" href="#">About</a></li>
                        <li><a class="header__menu_link" href="#">Contact</a></li>
                        <li><a class="header__menu_logo" href="<?php echo get_home_url(); ?>"> 
                            <!-- <?php the_custom_logo(); ?> -->
                            <img src="<?php
                                $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                                // выводим
                                echo $custom_logo__url[0]; 
                            ?>" alt="logo">
                        </a>                            
                        </li>
                        <li>
                            <div class="header__menu_social">
                                <a href="<?php the_field ('twitter',2); ?>" class="header__menu_social_link">
                                    <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/social/twitter.svg" alt="twitter">
                                </a>
                                <a href="<?php the_field ('facebook',2); ?>" class="header__menu_social_link">
                                    <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/social/fb.svg" alt="facebook">
                                </a>
                                <a href="<?php the_field ('linkedin',2); ?>" class="header__menu_social_link">
                                    <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/social/link.svg" alt="linkedin">
                                </a>
                            </div>
                        </li>                  
                    </ul>
                </div>
            </nav>
        </header>
        <div class="content">
                <div class="content__text">
                    <h1><?php the_field('home_title',2); ?></h1>
                    <h4>Most calendars are designed for teams. Slate is designed 
                        <br><br>
                        for freelancers</h4>
                </div>
                <div>
                    <button class="button button_promo">Try For Free</button>
                </div>                
            </div>
        </div>
        