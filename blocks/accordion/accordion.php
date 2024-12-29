<?php
if ( have_rows('accordion') ) :
	$class = 'st_accordion';
	if ( ! empty( $block['className'] ) ) {
		$class .= ' ' . $block['className'];
	}

	$padding = get_field_object('padding');
	if ( ! empty( $padding) ) {
		$class .=  ' ' . $padding['value'];
	}

	$bg_color = get_field('background_color_accordion');
	$style = "background-color: $bg_color";
?>

<section class="<?php echo $class ?>" style="<?php echo $style ?>">
	<div class="container">
		<?php get_template_part('components/intro');
		$item=1;?>

		<div class="st_accordion__wrap">
			<?php while( have_rows('accordion') ) : the_row();
				$accordion_title = get_sub_field('title');
				$accordion_content = get_sub_field('content');

				if($item == 1 && get_field('first_open') ){
					$open = 'open';
					$display = 'display: block';

					}else{
						$open = '';
						$display = 'display: none';
					}
				?>
				<div class="st_accordion-item <?php echo $open ?>">
					<div class="st_accordion-header">
						<span><?php echo $item ?>.</span>

						<?php echo $accordion_title; ?>

						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
					</div>

					<div class="st_accordion-body" style="<?php echo $display ?>">
						<?php echo $accordion_content; ?>
					</div>
				</div>
				<?php $item++;?>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>
