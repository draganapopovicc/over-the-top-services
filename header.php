<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package s-tier
 */

?>
<?php
$phone = get_field('phone', 'option');

$header__link = get_field('header_link', 'option');
if($header__link) {
	$header_link_url = $header__link['url'];
	$header_link_title = $header__link['title'];
	$header_link_target = $header__link['target'] ? $header__link['target'] : '_self';
};

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<meta name="theme-color" content="#187abd" />
	
	<?php echo get_field('head_script', 'option'); ?> <!-- Head External Code -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php echo get_field('body_top_script', 'option'); ?> <!-- Body Top External Code -->
<header id="masthead" class="header-main">
	<div class="container header-container">
		<figure class="site-logo site-logo--desktop">
				<?php the_custom_logo(); ?>
		</figure>

		<div class="header__right">
			<div class="header__top">
				<?php if($phone): ?>
					<a class="header__phone" aria-label="Call us" href="tel:<?php echo $phone ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">
							<path d="M2.00589 4.54166C1.905 3.11236 3.11531 2 4.54522 2H7.60606C8.34006 2 9.00207 2.44226 9.28438 3.1212L10.5643 6.19946C10.8761 6.94932 10.6548 7.81544 10.0218 8.32292L9.22394 8.96254C8.86788 9.24798 8.74683 9.74018 8.95794 10.1448C10.0429 12.2241 11.6464 13.9888 13.5964 15.2667C14.008 15.5364 14.5517 15.4291 14.8588 15.0445L15.6902 14.003C16.1966 13.3687 17.0609 13.147 17.8092 13.4594L20.8811 14.742C21.5587 15.0249 22 15.6883 22 16.4238V19.5C22 20.9329 20.8489 22.0955 19.4226 21.9941C10.3021 21.3452 2.65247 13.7017 2.00589 4.54166Z" fill="currentColor"/>
						</svg>
						<span><?php echo $phone ?></span>
					</a>
				<?php endif ?>
				<?php get_template_part('template-parts/socials'); ?>

				<?php if($header__link): ?>
					<div class="header__button button-desktop">
						<a class="btn btn-5" href="<?php echo esc_url($header_link_url) ?>"  target="<?php echo esc_attr( $header_link_target ); ?>">
							<?php echo $header_link_title ?>
							<span></span>
						</a>
					</div>
				<?php endif ?>
			</div>

			<div class="header__bottom">
				<div class="header__bottom-wrap">
					<figure class="site-logo site-logo--mobile">
							<?php the_custom_logo(); ?>
					</figure>

					<nav id="site-navigation" class="main-navigation">
						<!-- Mobile Nav Button -->
						<div class="hamburger">
							<label for="nav-toggle">Navigation Menu</label>
							<input type="checkbox" class="menu-toggle" id="nav-toggle">
							<div></div>
						</div>
						
						<!-- Mobile Nav Button -->
						<div class="main-navigation_wrap">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main',
									'menu_id'        => 'primary-menu',
									'walker'		 => new CustomMenuWalker
								)
							);
							?>

							<div class="mobile-header__info">
								<?php get_template_part('template-parts/socials'); ?>

								<?php if($header__link): ?>
									<div class="header__button button-mobile">
										<a class="btn btn-2" href="<?php echo esc_url($header_link_url) ?>"  target="<?php echo esc_attr( $header_link_target ); ?>">
											<?php echo $header_link_title ?>
										</a>
									</div>
								<?php endif ?>
							</div>
						</div>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</div>
</header><!-- #masthead -->

<div id="page" class="site">

