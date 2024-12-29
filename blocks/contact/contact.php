<?php
$contact_short_code = get_field('contact_short_code');
$google_map_iframe = get_field('google_map_iframe');
$phone = get_field('phone', 'option');

$class = 'st-contact space_1';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}
?>

<section class="<?php echo $class ?>">
    <div class="st-contact__layer"></div>
    
	<div class="container">
        <?php get_template_part('components/intro'); ?> 

        <div class="st-contact__form-map-wrap">
            <div class="st-contact__form-shortcode">
                <?php echo do_shortcode($contact_short_code);?>
            </div>
       
            <div class="st-contact__map-wrap">
                <div class="st-contact__info">
                    <?php if($phone): ?>
                        <a class="st-contact__phone" aria-label="Call us" href="tel:<?php echo $phone ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path d="M2.00589 4.54166C1.905 3.11236 3.11531 2 4.54522 2H7.60606C8.34006 2 9.00207 2.44226 9.28438 3.1212L10.5643 6.19946C10.8761 6.94932 10.6548 7.81544 10.0218 8.32292L9.22394 8.96254C8.86788 9.24798 8.74683 9.74018 8.95794 10.1448C10.0429 12.2241 11.6464 13.9888 13.5964 15.2667C14.008 15.5364 14.5517 15.4291 14.8588 15.0445L15.6902 14.003C16.1966 13.3687 17.0609 13.147 17.8092 13.4594L20.8811 14.742C21.5587 15.0249 22 15.6883 22 16.4238V19.5C22 20.9329 20.8489 22.0955 19.4226 21.9941C10.3021 21.3452 2.65247 13.7017 2.00589 4.54166Z" fill="currentColor"/>
                            </svg>
                            <span><?php echo $phone ?></span>
                        </a>
                    <?php endif ?>
            
                    <?php get_template_part('template-parts/socials'); ?>
                </div>

                <div class="st-contact__map">
                    <?php echo $google_map_iframe?>
                </div>
            </div>
        </div>
	</div>
</section>

