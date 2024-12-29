<?php
$gallery = get_field('section_gallery');
$gallery_num = '';

if($gallery) {
	$gallery_num = count($gallery);
}

$text_align = get_field('text_align');
$choose_style = get_field('choose_style');
$short_desc = get_field('short_description_bs');

$media = get_field('media');
$size = 'full';
$layout = get_field_object('layout');
$stack = get_field_object('stack');
$padding = get_field_object('padding');

$use_video = get_field('insert_video_instead_of_images');
$youtube_video = get_field('section_video');

$class = "st_section";
$class .= ' ' . $choose_style;
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}
if ( ! empty( $margin ) ) {
    $class .=  ' ' . $margin['value'];
}
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$sec_in_class = "st_section_inner container";
if ( ! empty( $layout ) ) {
    $sec_in_class .=  ' ' . $layout['value'];
}
if ( ! empty( $stack ) ) {
    $sec_in_class .=  ' ' . $stack['value'];
}

$use_bg = get_field('use_dark_background_basic');
if ( $use_bg  ) {
    $class .=  ' ' . 'dark-background';
}

$justify_content = get_field('justify_content');
$sec_in_class .= ' ' . 'justify-' . $justify_content;

$bg_color = get_field('background_color_basic');
$style = "background-color: $bg_color";
?>

<section class="<?php echo $class; ?>" style="<?php echo $style ?>">
	<div class="<?php echo $sec_in_class ?>">
		<div class="left text-<?php echo $text_align ?>">
			<?php get_template_part('components/intro'); ?>
			<?php get_template_part('components/buttons'); ?>
		</div>

		<?php if($use_video && $youtube_video ): ?>
			<div class="right">
				<div class="youtube-video">
					<?php echo $youtube_video ?> 
				</div>
			</div>
		<?php endif ?>

		<?php if( $gallery ): ?>
			<div class="right images-num-<?php echo $gallery_num ?>">
				<?php if($short_desc): ?>
					<div class="st_section__short-desc"> <?php echo $short_desc ?> </div>
				<?php endif ?>
	
				<?php foreach( $gallery as $image_id ):
					?>
					<figure>
						<?php echo wp_get_attachment_image( $image_id, 'large' ); ?>
					</figure>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
