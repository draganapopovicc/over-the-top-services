<?php
$col_class = 'st-featured-projects__all';

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

$class = 'st-featured-projects';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

$use_bg = get_field('use_dark_background_featured');
if ( $use_bg  ) {
    $class .=  ' ' . 'dark-background';
}

$padding = get_field_object('padding');
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$bg_color = get_field('background_color_featured');
$style = "background-color: $bg_color";

$featured_projects = get_field('select_featured_projects');

 if( $featured_projects ) {
	$project_ids = [];

	foreach ($featured_projects as $project) {
        $project_ids[] = $project->ID;
    }

	$args = [
        'post_type' => 'project', 
        'post__in' => $project_ids, 
        'orderby' => 'post__in',
		'orderby' => 'date',
    ];

    $query = new WP_Query($args);
}
?>

<section class="<?php echo $class ?>" style="<?php echo $style ?>">
    <div class="container">
        <?php get_template_part('components/intro'); ?>

        <?php if( $featured_projects ): ?>
            <div class="<?php echo $col_class ?>">
                <?php if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        get_template_part( 'template-parts/content', get_post_type() );
                }} ?>
            </div>
        <?php endif; ?>

        <?php get_template_part('components/buttons'); ?>
    </div>
</section>

