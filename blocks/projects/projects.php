<?php
$class = 'st-projects';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

$padding = get_field_object('padding');
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$bg_color = get_field('background_color_projects');
$style = "background-color: $bg_color";
?>

<section class="<?php echo $class ?>" style="<?php echo $style ?>">
    <div class="st-projects__layer"></div>

    <div class="container">
        <?php get_template_part('components/intro'); ?>

		<?php	
            $args = array(
					'post_type' => 'project',
					'posts_per_page' => -1, 
					'orderby' => 'date',
				);
				$query = new WP_Query($args);
			?>

        <div class="st-projects__all-wrap">
            <div class="st-projects__all">
                <?php if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        get_template_part( 'template-parts/content', get_post_type() );
                    }} ?>
            </div>
        </div>
    </div>
</section>

