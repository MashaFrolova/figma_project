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
                    <h2 class="header" ><?php the_field('macbook_title'); ?></h2>
                    <h4 class="subheader" ><?php the_field('macbook_descr'); ?></h4>
                    <button class="button button_macbook">Try For Free</button>
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