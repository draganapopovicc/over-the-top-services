<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package s-tier
 */

?>
<?php
//CTA
$cta_text = get_field('cta_text', 'option'); 

// FOOTER
$footer_logo = get_field('footer_logo', 'option');
$footer_description = get_field('footer_description', 'option');

$reviews_img = get_field('footer_review_img', 'option');
$review__link = get_field('footer_reviews_btn', 'option');
if($review__link) {
	$review_link_url = $review__link['url'];
	$review_link_title = $review__link['title'];
	$review_link_target = $review__link['target'] ? $review__link['target'] : '_self';
};
$copyright = get_field('footer_copyright_text', 'option');
?>

<!-- CTA -->
<?php if($cta_text ): ?>
	<div class="st-cta">
	<div class="st-cta__layer"></div>
		<div class="container">
			<div class="st-sta__wrap space_1">
				<?php if($cta_text): ?>
					<div class="st-cta__text"><?php echo $cta_text ?></div>
				<?php endif ?>
				<?php get_template_part('components/inner-buttons'); ?>
			</div>
		</div>
	</div>
<?php endif ?>

<!-- Footer -->
<footer id="colophon" class="site-footer footer">
	<svg  class="footer__wave-svg" fill="currentColor"  viewBox="0 0 1440 125" xmlns="http://www.w3.org/2000/svg">
		<g><path  d="M1256 11.76C1237.2 17.26 1209.4 27.56 1170 25.76C1127.2 23.86 1125.3 10.16 1087 7.75998C1026.9 3.95998 1015 36.56 959 29.76C920.1 25.06 921.3 8.85998 884 7.75998C841.3 6.55998 834.4 27.66 790 27.76C749.8 27.86 748.5 10.66 707 9.75998C662.5 8.75998 658.2 28.46 611 31.76C563.1 35.06 560 15.26 504 13.76C452.5 12.36 450 28.96 396 29.76C336.7 30.56 332.6 9.35998 279.1 10.76C216.3 12.36 202.3 40.36 146 43.76C112.8 45.76 63 41.96 0 10.76V124.6H1440V10.76C1353.8 -7.34002 1294.8 0.459979 1256 11.76Z"></path></g>
	</svg>
	<div class="footer__top">
		<div class="footer__top-layer"></div>
		
		<div class="container footer__wrapper">
			<!-- Logo and Desc -->
			<?php if($footer_logo || $footer_description || $review__link): ?>
				<div class="footer__box footer__box--about">
					<?php if($footer_logo): ?>
						<figure class="footer__logo">
							<?php echo wp_get_attachment_image( $footer_logo, 'full'); ?>
						</figure>
					<?php endif ?>

					<?php if($footer_description) :?>
						<div class="footer__description"> <?php echo wp_kses_post($footer_description); ?> </div>
					<?php endif ?>

					<?php if($review__link): ?>
						<div class="footer__reviews">
							<a class="btn btn-5" href="<?php echo esc_url($review_link_url) ?>"  target="<?php echo esc_attr( $review_link_target ); ?>">
							<?php if( $reviews_img):  ?>
									<figure class="st-contact-section__image">
										<?php
											echo wp_get_attachment_image( $reviews_img, 'full', "");
										?>
									</figure>
								<?php endif ?>
								<span><?php echo $review_link_title ?></span>
							</a>
						</div>
					<?php endif ?>
				</div>
			<?php endif ?>

			<!-- Contact -->
			<div class="footer__box footer__box--contact">
				<p class="footer__box-title">Contact</p>

				<?php get_template_part('template-parts/contact-info'); ?>

				<div class="footer__box--contact-socials">
					<p class="footer__box-title">Socials</p>
					<?php get_template_part('template-parts/socials'); ?>
				</div>
			</div>
	
			<!-- Quick Links -->
			<div class="footer__box footer__box--services">
				<p class="footer__box-title">Quick Links</p>

				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'quick',
							'menu_id'        => 'footer-menu',
						)
					);
				?>
			</div>
			
			<!-- Services Areas -->
			<div class="footer__box footer__box--areas">
				<p class="footer__box-title">Service Areas</p>

				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_id'        => 'footer-menu',
						)
					);
				?>
			</div>
		</div>
	</div>

	<div class="footer__bottom">
		<div class="container">
			<?php if($copyright): ?>
				<?php echo $copyright ?>
			<?php endif ?>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<!--
	         (__)
     `\------(oo)
       ||    (__) <(What are you looking for?)
       ||w--||
-->
<?php echo get_field('body_bottom_script', 'option'); ?> <!-- Body Bottom External Code -->
</body>
</html>
