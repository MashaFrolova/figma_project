<?php
    get_header ();
?>
   
    <div class="features__video">
        <video poster="<?php echo bloginfo ('template_url');?>/assets/img/screen.jpg" preload="none">
            <source src="#" type="video/mp4">
        </video>
        <button class="features__video_play"><img class="features__video_play_vector" src="<?php echo bloginfo ('template_url');?>/assets/img/icons/Vector.png" alt="vector"></button>
    </div>    
   
    
<?php
    get_footer();
?>