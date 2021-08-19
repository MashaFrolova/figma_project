<?php 
/*
Template Name: Pricing
*/
?>

<?php 
    get_header();
?>

    <div class="pricing">
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
                <div class="pricing__white">
                    <?php 
                        $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'pricings_items_white',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                                ?>
                                <div class="pricing__white_text">
                                    <h3><?php the_field('item_title'); ?></h3>
                                    <h6><?php the_field('item_descr'); ?></h6>
                                </div>
                                <div class="pricing__white_price">
                                    <div class="title">
                                        <h1><?php the_field('item_price'); ?></h1>
                                    </div>                        
                                    <div class="block">
                                        <h3>$</h3>
                                        <h6>Per Month</h6>
                                    </div>
                                    <div>
                                        <ul class="pricing__white_list">
                                            <?php the_field('item_list'); ?>
                                        </ul>
                                    </div>
                                <?php
                            }

                            wp_reset_postdata(); // сброс
                     ?>
                </div>    
                <div>
                    <button class="button button_pricing">Order Now</button>
                </div>
            </div>
                            <!-- <div class="pricing__blue">
                                <div class="pricing__blue_text">
                                    <h3>STANDARD</h3>
                                    <h6>Organize across all <br>
                                        apps by hand</h6>
                                </div>
                                <div class="pricing__blue_price">
                                    <div class="title">
                                        <h1>10</h1>
                                    </div> 
                                    <div class="block">
                                        <h3>$</h3>
                                        <h6>Per Month</h6>
                                    </div>
                                </div>
                                <ul class="pricing__blue_list">
                                    <li>Pricing Feature</li>
                                    <li>Pricing Feature</li>
                                    <li>Pricing Feature</li>
                                    <li>Pricing Feature</li>
                                    <li>Pricing Feature</li>
                                </ul>
                                <button class="button button_pricing_blue">Order Now</button>
                            </div>
                            <div class="pricing__white_2">
                                <div class="pricing__white_2_text_2">
                                    <h3>BUSINESS</h3>
                                    <h6>Organize across all <br>
                                        apps by hand</h6>
                                </div>
                                <div class="pricing__white_2_price_2">
                                    <div class="title">
                                        <h1>99</h1>
                                    </div> 
                                    <div class="block">
                                        <h3>$</h3>
                                        <h6>Per Month</h6>
                                    </div>
                                </div>
                                <ul class="pricing__white_2_list_2">
                                    <li>Pricing Feature</li>
                                    <li>Pricing Feature</li>
                                    <li>Pricing Feature</li>
                                    <li>Pricing Feature</li>
                                    <li>Pricing Feature</li>
                                </ul>
                                <button class="button button_pricing_2">Order Now</button>
                            </div> -->
                            <!--
        
            <!-- </div> -->
        </div>
    </div>

<?php
    get_footer();
?>