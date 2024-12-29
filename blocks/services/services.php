<?php
$col_class = 'st-services__all';

$cols = get_field_object('desktop_columns');
$tab_cols = get_field_object('tab_columns');
$mob_cols = get_field_object('mob_columns');
if ( ! empty( $cols ) ) {
	$col_class .=  ' ' . $cols['value'];
}
if ( ! empty( $tab_cols ) ) {
    $col_class .=  ' ' . $tab_cols['value'];
}
if ( ! empty( $mob_cols ) ) {
    $col_class .=  ' ' . $mob_cols['value'];
}

$class = 'st-services';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

$padding = get_field_object('padding');
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$use_bg = get_field('use_dark_background');
if ( $use_bg  ) {
    $class .=  ' ' . 'dark-background';
}

$bg_color = get_field('background_color_services');
$style = "background-color: $bg_color";
?>

<section class="<?php echo $class ?>" style="<?php echo $style ?>">
		<div class="container"> 
			<?php get_template_part('components/intro'); ?>

			<?php if( have_rows('services') ): ?>
				<div class="<?php echo $col_class ?>">
					<?php while( have_rows('services') ) : the_row();
						$image = get_sub_field('service_image'); 
						$title = get_sub_field('service_title'); 
						$description = get_sub_field('service_description');  
						$link =  get_sub_field('service_link');
						if($link) {
							$link_title = $link['title'] ; 
							$link_target = $link['target'] ? $link['target'] : '_self'; 
						}?>
					
						<div class="st-service <?php echo $link ? 'st-service__hover' : '' ?>">
							<?php if($link): ?>
								<a class="st-service__link" aria-label="We provide <?php echo $title ?>" href="<?php echo esc_url(  $link['url'] ); ?>" target="<?php echo esc_attr( $link_target ); ?>"></a>
							<?php endif ?>

							<?php if( $image ) : ?>
								<figure class="st-service__image">
									<span></span>
									<?php
										echo wp_get_attachment_image( $image, 'full', "");
									?>
								</figure>
							<?php endif ?>

							<div class="st-service__text">
								<?php if($title): ?>
									<p class="st-service__title"> <?php echo $title ?> </p>
								<?php endif ?>
							
								<?php if($description): ?>
								<div class="st-service__desc">
									<?php echo $description ?> 
								</div>
								<?php endif ?>

								<?php if($link): ?>
									<div class="btn btn-2">Read More</div>
								<?php endif ?>
							</div>
						</div>
					<?php endwhile ?>
				</div>
			<?php endif ?>

			<?php get_template_part('components/buttons'); ?>
		</div>
	</div>
</section>

