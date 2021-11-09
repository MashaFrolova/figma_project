<?php 
/*
Template Name: Product
*/
?>

<?php 
    get_header();
?>
    <section class="macbook">
        <div class="container">
            <div class="macbook__wrapper">
                <div class="macbook__wrapper_content">
                    <h2><?php the_field('macbook_title'); ?></h2>
                    <h4><?php the_field('macbook_descr'); ?></h4>
                    <div>
                        <button class="button button_macbook">Try For Free</button>
                    </div>
                </div>                
                <div class="macbook__wrapper_screen">
                    <img src="<?php the_field(macbook_img); ?>">
                </div>
            </div>            
        </div>
    </section>

<?php
    get_footer();
?>