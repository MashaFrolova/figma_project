<?php 
/*
Template Name: About
*/
?>

<?php 
    get_header();
?>
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
                            "><?php the_field('parners_title'); ?></h2>
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
                <div class="partners__row2">
                    <?php 
                        $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'partners_items_2',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                                ?>
                                    <div class="partners__row2_item">
                                        <h6><?php the_field('partners_title'); ?></h6>
                                        <img src="<?php the_field('partners_icon'); ?>">
                                    </div>
                                <?php
                            }

                        wp_reset_postdata(); // сброс
                    ?>
                </div>
                <div>
                    <button class="button button_partners">Try For Free</button>
                </div>
            </div>
                    <!-- <div class="partners__row_item">
                        <h6>Client Name</h6>
                        <img src="<?php echo bloginfo ('template_url');?>/assets/img/partners/google.png" alt="google">
                    </div>
                    <div class="partners__row_item">
                        <h6>Client Name</h6>
                        <img src="<?php echo bloginfo ('template_url');?>/assets/img/partners/amazon.png" alt="amazon">
                    </div>
                    <div class="partners__row_item">
                        <h6>Client Name</h6>
                        <img src="<?php echo bloginfo ('template_url');?>/assets/img/partners/microsoft.png" alt="microsoft">
                    </div>
                    <div class="partners__row_item">
                        <h6>Client Name</h6>
                        <img src="<?php echo bloginfo ('template_url');?>/assets/img/partners/uber.png" alt="uber">
                    </div>
                </div>
                <div class="partners__row2">
                    <div class="partners__row2_item_dropbox">
                        <h6>Client Name</h6>
                        <img src="<?php echo bloginfo ('template_url');?>/assets/img/partners/dropbox.png" alt="dropbox">
                    </div>
                    <div class="partners__row2_item">
                        <h6>Client Name</h6>
                        <img src="<?php echo bloginfo ('template_url');?>/assets/img/partners/google.png" alt="google">
                    </div>
                    <div class="partners__row2_item">
                        <h6>Client Name</h6>
                        <img src="<?php echo bloginfo ('template_url');?>/assets/img/partners/uber.png" alt="uber">
                    </div>
                    <div class="partners__row2_item">
                        <h6>Client Name</h6>
                        <img src="<?php echo bloginfo ('template_url');?>/assets/img/partners/amazon.png" alt="amazon">
                    </div>
                </div>
            </div>
            <button class="button button_partners">Try For Free</button>
        </div>
    </div> -->
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
                <h4><?php the_field('testimonials_descr'); ?>
                </h4>
                <div class="testimonials__client">
                    <img src="<?php echo bloginfo ('template_url');?>/assets/img/avatar.jpg" alt="client" class="testimonials__client_avatar">
                    <div class="testimonials__client_text">
                        <h6><?php the_field('testimonials_text'); ?></h6>
                        <p><?php the_field('testimonials_title'); ?></p>
                    </div>
                </div>
            </div>
            <button class="button button_testimonials">More Testimonials</button>
        </div>
    </div>

<?php
    get_footer();
?>