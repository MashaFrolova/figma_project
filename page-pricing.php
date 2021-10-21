<?php 
    /*
    Template Name: Pricing
    */
?>

<?php 
    get_header();
?>

    <section class="pricing">
        <div class="container">
            <div class="pricing__text">
                <h2 style="<?php
                                $field = get_field('color_title');
                                if ($field == 'white') {
                                ?>
                                    color: #fff
                                <?php
                                }
                            ?>"><?php the_field('pricing_title'); ?></h2>
                <h4><?php the_field('pricing_descr'); ?></h4>
            </div>
            <div class="pricing__items">
                <?php 
                    $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'pricing_items_white',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>      
                                
                                <div class="pricing__white"> 
                                    <div class="pricing__white_text">
                                        <h3><?php the_field ('item_title'); ?></h3>
                                        <h6><?php the_field ('item_descr'); ?></h6>
                                    </div>
                                    <div class="pricing__white_price">
                                        <div class="title">
                                            <h1><?php the_field ('item_price'); ?></h1>
                                        </div> 
                                        <div class="block">
                                            <h3>$</h3>
                                            <h6>Per Month</h6>
                                        </div>
                                    </div>
                                    <ul class="pricing__white_list">
                                        <?php the_field ('item_list'); ?>
                                    </ul>
                                    <button class="button button_pricing">Order Now</button>
                                </div>

                            <?php
                    }

                        wp_reset_postdata(); // сброс
                ?>                        
                
                <?php 
                    $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'pricing_items_blue',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                                <div class="pricing__blue">
                                    <div class="pricing__blue_text">
                                        <h3><?php the_field ('item_title'); ?></h3>
                                        <h6><?php the_field ('item_descr'); ?></h6>
                                    </div>
                                    <div class="pricing__blue_price">
                                        <div class="title">
                                            <h1><?php the_field ('item_price'); ?></h1>
                                        </div> 
                                        <div class="block">
                                            <h3>$</h3>
                                            <h6>Per Month</h6>
                                        </div>
                                    </div>
                                    <ul class="pricing__blue_list">
                                        <?php the_field ('item_list'); ?>
                                    </ul>
                                    <button class="button button_pricing_blue">Order Now</button>
                                </div>
                            <?php
                        }    
                            wp_reset_postdata(); // сброс
                ?>
                
                <?php 
                    $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'pricing_items_white_2',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>   
                                <div class="pricing__white_2">                       
                                    <div class="pricing__white_2_text_2">
                                        <h3><?php the_field ('item_title'); ?></h3>
                                        <h6><?php the_field ('item_descr'); ?></h6>
                                    </div>
                                    <div class="pricing__white_2_price_2">
                                        <div class="title">
                                            <h1><?php the_field ('item_price'); ?></h1>
                                        </div> 
                                        <div class="block">
                                            <h3>$</h3>
                                            <h6>Per Month</h6>
                                        </div>
                                    </div>
                                    <ul class="pricing__white_2_list_2">
                                        <?php the_field ('item_list'); ?>
                                    </ul>
                                    <button class="button button_pricing">Order Now</button>
                                </div>
                            <?php
                        }

                            wp_reset_postdata(); // сброс
                ?>
            </div> 
        </div>   
    </section>              

<?php
    get_footer();
?>