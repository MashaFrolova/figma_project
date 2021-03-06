<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <link rel="shortcut icon" href="<?php echo bloginfo ('template_url');?>/assets/img/icons/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/sass/libs/_fonts.scss">
    <link rel="stylesheet" href="/css/style.min.css"> -->

    
    <?php
        wp_head();
    ?>
</head>
<body>
    <section class="promo">
        <header>                
            <nav>
                <?php 
                     wp_nav_menu( [
                                'menu'            => 'Main', 
                                'container'       => false, 
                                'menu_class'      => 'header__menu',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'items_wrap'      => '<ul class="header__menu_link">%3$s</ul>',
                                'depth'           => 1
                    ] );
                ?>         
            </nav>  
            <div class="hamburger">
                    <div class="hamburger__span">
                        <span class="long"></span>
                        <span class="middle"></span>
                        <span class="short"></span>
                    </div> 
                </div>
            <div class="header__logo">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="
                    <?php
                        $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
                        echo $custom_logo__url[0]; 
                    ?>" alt="logo">
                </a>                            
            </div>
            <div class="header__social">
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
        </header>   
            <div class="container">        
            
                <div class="promo__wrapper">
                    <div class="promo__wrapper__text">
                        <h1 class="promo__wrapper__text_header"><?php the_field('home_title',2); ?></h1>
                        <h4 class="promo__wrapper__text_subheader"><?php the_field('home_descr',2); ?></h4>
                    </div>
                    <button class="button button_promo">Try For Free</button>
                </div>     
                
            </div>
    </section>
    
        