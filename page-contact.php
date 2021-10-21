<?php 
/*
Template Name: Contact
*/
?>

<?php 
    get_header();
?>

    <section class="contacts">
        <div class="container">
            <div class="contacts__content">
                <div class="contacts__content__text">
                    <h2>Contact Us</h2>
                    <h4>Most calendars are designed for teams. 
                        <br> 
                    Slate is designed for freelancers</h4>
                </div>
                <div class="contacts__content__wrapper">
                    <div class="contacts__content__wrapper_left">
                        <h3>Contact Us</h3>
                        <div class="form">
                            <?php echo do_shortcode( '[contact-form-7 id="117" title="Contact_form"]' ); ?>
                        </div>
                    </div>
                    <div class="contacts__content__wrapper_right">
                        <div class="contacts__content__wrapper_right_items">
                            <div class="adress">
                                <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/contacts/map.svg" alt="adress" class="contacts__icon">
                                <h6><?php the_field('adress_2'); ?></h6>
                            </div>
                            <div class="phone">
                                <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/contacts/phone.svg" alt="adress" class="contacts__icon">
                                <h6><?php the_field('phone_2'); ?></h6>
                            </div>
                            <div class="mail">
                                <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/contacts/mail.svg" alt="adress" class="contacts__icon">
                                <h6><?php the_field('mail'); ?></h6>
                            </div>
                        </div>
                        <div class="contacts__content__wrapper_right_map acf-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d23338784.381443705!2d-133.05170019499104!3d44.43372215711783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s6386%20Spring%20St%20Anchorage%2C%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20Georgia%2012473%20United%20States!5e0!3m2!1sru!2sru!4v1628982121966!5m2!1sru!2sru" width="516" height="343.19" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="contacts__content__wrapper_right_social">
                            <a href="<?php the_field ('twitter'); ?>" class="contacts__social_link">
                                <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/social/contacts_twitter.svg" alt="twitter">
                            </a>
                            <a href="<?php the_field ('facebook'); ?>" class="contacts__social_link">
                                <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/social/contacts_fb.svg" alt="facebook">
                            </a>
                            <a href="<?php the_field ('linkedin'); ?>" class="contacts__social_link">
                                <img src="<?php echo bloginfo ('template_url');?>/assets/img/icons/social/contacts_link.svg" alt="linkedin">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    get_footer();
?>