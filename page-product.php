<?php 
/*
Template Name: Product
*/
?>

<?php 
    get_header();
?>

    <div class="features">
        <div class="container">
    
            <div class="features__text">
                <h2 style="<?php
                                $field = get_field('color_title');
                                if ($field == 'white') {
                                ?>
                                    color: #fff
                                <?php
                                }
                            ?>
                    "><?php the_field ('features_title'); ?>
                </h2>
                <h4><?php the_field('features_descr'); ?></h4>
            </div>

            <div class="video_screen">
                <video class="features__video_img" poster="<?php echo bloginfo ('template_url');?>/assets/img/screen.jpg" preload="none">
                    <source src="#" type="video/mp4">
                </video>
                <!-- <video class="video_screen_img" 
                    poster="<?php the_field('video_img'); ?>" preload="none" >
                    <source src="#" type="video/mp4"> -->
                </video>
                <button class="video_screen_btn"><img class="video_screen_vector" src="<?php echo bloginfo ('template_url');?>/assets/img/icons/Vector.png" alt="vector"></button>
            </div>      
        
            <div class="features__wrapper">
                <?php 
                    $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'features_items',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                                <div class="features__item">                
                                    <img src="<?php the_field('items_icon'); ?>" alt="figures" class="features__icon">
                                    <div class="features__subtitle">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="features__descr">
                                        <?php the_field('items_descr'); ?>
                                    </div>
                                </div>

                            <?php
                    }

                    wp_reset_postdata(); // сброс
                ?>
            </div>
            
        </div>
    </div>
    <div class="macbook">
        <div class="container">
            <div class="macbook__wrapper">
                <div class="macbook__content">
                    <h2><?php the_field('macbook_title'); ?></h2>
                    <h4><?php the_field('macbook_descr'); ?></h4>
                    <button class="button button_macbook">Try For Free</button>
                </div>
                <div class="macbook__screen">
                    <img src="<?php the_field(macbook_img); ?>">
                </div>
            </div>            
        </div>
    </div>

<?php
    get_footer();
?>