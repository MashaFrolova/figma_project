<?php 
/*
Template Name: About
*/
?>

<?php 
    get_header();
?>
    <div class="subscribe">
        <div class="container">
            <div class="subscribe__picture">
                <img src="<?php echo bloginfo ('template_url');?>/assets/img/newsletter.png" alt="newsletter">
            </div>
            <div class="subscribe__wrapper">
                <div class="subscribe__wrapper_text">
                    <h3>At your fingertips</h3>
                    <h2>Lightning fast <br>prototyping </h2>
                </div>
                
            </div>
        </div>
    </div>
    <div class="partners">
        <div class="container">
            <div class="partners__text">
                <h2 style="<?php
                                $field = get_field('color_title');
                                if ($field == 'white') {
                                ?>
                                    color: #fff
                                <?php
                                }
                            ?>
                            "><?php the_field('partners_title'); ?></h2>
                <h4><?php the_field('partners_descr'); ?></h4>
            </div>
            <div class="partners__items">
                <div class="partners__row">
                    <?php 
                        $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'partners_items',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                                ?>
                                    <div class="partners__row_item">
                                        <h6><?php the_field('partners_title'); ?></h6>
                                        <img src="<?php the_field('partners_icon'); ?>">
                                    </div>
                                <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                </div>    
                <div class="partners__row_2">
                    <?php 
                        $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'partners_items_2',
                        'orderby'     => 'data',
                        'order'       => 'DESC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                                ?>
                                <div class="partners__row_2_item">
                                    <h6><?php the_field('partners_title '); ?></h6>
                                    <img src="<?php the_field('partners_icon'); ?>">
                                </div>
                            <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                </div>
            </div>
            <button class="button button_partners">Try For Free</button>
        </div>
    </div>               
    <div class="testimonials">
        <div class="container">
            <div class="testimonials__text">
                <h2 style="<?php
                                $field = get_field('color_title');
                                if ($field == 'white') {
                                ?>
                                    color: #fff
                                <?php
                                }
                            ?>"><?php the_field('testimonials_title'); ?></h2>
            </div>
            <div class="testimonials__row">
                <img src="<?php the_field('testimonials_icon'); ?>">
                <h4><?php the_field('testimonials_descr'); ?></h4>
                <div class="testimonials__client">

                    <?php 
                        $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'testimonials_clients',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                            ?>
                                <div class="testimonials__client_avatar">
                                    <img src="<?php echo bloginfo ('template_url');?>/assets/img/avatar.jpg" alt="client">
                                </div>
                                <div class="testimonials__client_text">
                                    <h6><?php the_field('testimonials_text'); ?></h6>
                                    <p><?php the_field('testimonials_title'); ?></p>
                                </div>
                               
                            <?php
                        }
                            wp_reset_postdata(); // сброс
                    ?>
                </div>
            </div>
            <button class="button button_testimonials">More Testimonials</button>
        </div>
    </div>

<?php
    get_footer();
?>