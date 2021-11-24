<?php 
/*
Template Name: About
*/
?>

<?php 
    get_header();
?>
    <section class="subscribe">
        <div class="container">
            <div class="subscribe__wrapper">
                <div class="subscribe__wrapper_picture">
                    <img src="<?php echo bloginfo ('template_url');?>/assets/img/newsletter.png" alt="newsletter">
                </div>
                <div class="subscribe__wrapper_content">
                    <div class="subscribe__wrapper_content_text">
                        <div>
                            <h3>At your fingertips </h3>
                        </div>
                        <div class="desktop">
                            <h2>Lightning fast <br>prototyping</h2>
                        </div> 
                        <div class="mobile">
                            <h2>Newsletter</h2>
                        </div>
                        <div>
                            <h4>Most calendars are designed for teams.<br> 
                            Slate is designed for freelancers</h4>
                        </div>     
                    </div>
                            
                    <div class="subscribe__wrapper_content_form">
                        <h3 class="subtitle_form">
                            Subscribe to our Newsletter
                        </h3>
                        <p>
                            Available exclusivery on Figmaland
                        </p>
                        <div>
                            <!-- <?php echo do_shortcode( '[contact-form-7 id="294" title="Subscribe_form"]' ); ?> -->
                             <form action="#">
                                <input name="email" required placeholder="Your Email" type="email"> 
                                <button class="button button_subscribe">Subscribe</button>
                            </form> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partners">
        <div class="container">
            <div class="partners__text">
                <h2 class="header" style="<?php
                                $field = get_field('color_title');
                                if ($field == 'white') {
                                ?>
                                    color: #fff
                                <?php
                                }
                            ?>
                            "><?php the_field('partners_title'); ?></h2>
                <h4 class="subheader"><?php the_field('partners_descr'); ?></h4>
            </div>
            <div class="partners__items">
                <div class="partners__items__row">
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
                                    <div class="partners__items__row_item">
                                        <h6><?php the_field('partners_title'); ?></h6>
                                        <img src="<?php the_field('partners_icon'); ?>">
                                    </div>
                                <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                </div>    
                <div class="partners__items__row_2">
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
                                <div class="partners__items__row_2_item">
                                    <h6><?php the_field('partners_title'); ?></h6>
                                    <img src="<?php the_field('partners_icon'); ?>">
                                </div>
                            <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                </div>
            </div>
            <div class="partners__button">
                <button class="button button_partners">Try For Free</button>
            </div>
        </div>
    </section>               
    <section class="testimonials">
        <div class="container">
            <div class="testimonials__title">
                <h2 class="header" style="<?php
                                $field = get_field('color_title');
                                if ($field == 'white') {
                                ?>
                                    color: #fff
                                <?php
                                }
                            ?>"><?php the_field('testimonials_title'); ?></h2>
            </div>
            <div class="testimonials__row">
                <div class="testimonials__row_logo">
                    <img src="<?php the_field('testimonials_icon'); ?>">
                </div>
                <div class="testimonials__row_text">
                    <h4><?php the_field('testimonials_descr'); ?></h4>
                </div>                
                <div class="testimonials__row_client">

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
                                    <div class="testimonials__row_client_avatar">
                                        <img src="<?php echo bloginfo ('template_url');?>/assets/img/avatar.jpg" alt="client">
                                    </div>
                                    <div class="testimonials__row_client_text">
                                        <h6><?php the_field('testimonials_text'); ?></h6>
                                        <p><?php the_field('testimonials_title'); ?></p>
                                    </div>
                                
                                <?php
                            }
                                wp_reset_postdata(); // сброс
                    ?>
                </div>
            </div>          
            <div class="testimonials__button">
                <button class="button button_testimonials">More Testimonials</button>
            </div>           
        </div>
    </section>

<?php
    get_footer();
?>