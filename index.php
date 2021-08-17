<?php
    get_header ();
?>
   
            <!-- <video class="video_screen_img" 
            poster="<?php the_field('video_img'); ?>" preload="none" >
                    <source src="#" type="video/mp4">
            </video> 
            <-- <?php wp_video_shortcode([video]); ?>  -->

            <!-- <video class="video_screen_img" 
            poster="<?php the_field('video_img'); ?>/assets/img/screen.jpg" preload="none" >
                    <source src="#" type="video/mp4">
            </video> -->
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
    </div>
    
    
   
   
    
<?php
    get_footer();
?>