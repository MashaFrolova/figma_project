<?php
    get_header ();
?>
    <section class="video">
        <div class="container">
            <div class="video__wrapper">
                <video poster="<?php echo bloginfo ('template_url');?>/assets/img/screen.jpg" preload="none">
                    <source src="#" type="video/mp4">
                </video>
                <span>
                    <video class="video__full_mobile" poster="<?php echo bloginfo ('template_url');?>/assets/img/screen_mobile.jpg" preload="none">
                        <source src="#" type="video/mp4">
                    </video>
                </span>
                <div class="playpause">
                    <button class="button button_play"><img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/Vector.png" alt="vector"></button>
                </div>     
            </div>   
        </div>  
    </section>
     
    
<?php
    get_footer();
?>