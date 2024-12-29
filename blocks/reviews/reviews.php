<?php
$reviews_short_code = get_field('reviews_short_code');
$class = 'st-reviews space_1';

if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}
?>

<section class="<?php echo $class ?>">
	<div class="st-reviews__wrap container">
		<?php get_template_part('components/intro'); ?>

		<div class="st-reviews__reviews">
			<?php echo do_shortcode($reviews_short_code);?>
		</div>
	</div>
</section>

