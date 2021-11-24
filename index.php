<?php
    get_header ();
?>
    <section class="features">
        <div class="container">            
            <div class="features__wrapper">
                <div class="features__wrapper__text">
                    <h2 class="header" style="<?php
                                    $field = get_field('color_title');
                                    if ($field == 'white') {
                                    ?>
                                        color: #fff
                                    <?php
                                    }
                                ?>
                        "><?php the_field ('features_title', 2); ?>
                    </h2>
                    <h4 class="subheader"><?php the_field('features_descr', 2); ?></h4>
                </div>   
                <div class="features__wrapper__items">
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
                                    <div class="item">                
                                        <img src="<?php the_field('items_icon'); ?>" alt="figures" class="icon">
                                        <div> 
                                            <h3 class="subtitle">
                                            <?php the_title(); ?></h3>
                                        </div>
                                        <div class="descr">
                                            <?php the_field('items_descr'); ?>
                                        </div>
                                    </div>

                                <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                </div>
                <div class="features__wrapper__video">
                    <video class="features__wrapper__video_desktop" 
                    poster="<?php echo bloginfo ('template_url');?>/assets/img/screen.jpg"
                    preload="none">
                        <source src="#" type="video/mp4">  
                    </video>
                    <video class="features__wrapper__video_mobile" 
                    poster="<?php echo bloginfo ('template_url');?>/assets/img/mobile/screen_mobile.jpg" media="(max-width: 768px)"
                    preload="none">
                        <source src="#" type="video/mp4">  
                    </video>
                    <div class="features__wrapper__video_playpause">
                        <button>
                            <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/Vector.png" alt="vector">
                        </button>
                    </div>    
                </div>      
            </div>  
               
        </div>
    </section>
<?php
    get_footer();
?>