<?php
$class = 'st-testimonials';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

$padding = get_field_object('padding');
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$bg_color = get_field('background_color_testimonials');

$style = "background-color: $bg_color";
?>

<section class="<?php echo $class ?>" style="<?php echo $style ?>">
	<div class="container">
		<div class="st-testimonials__title">
			<?php get_template_part('components/intro'); ?>
		</div>

        <?php if( have_rows('testimonials') ): ?>
            <div  class="st-testimonials__all">
                <?php while( have_rows('testimonials') ) : the_row();
                    $name = get_sub_field('testimonial_name'); 
                    $title = get_sub_field('testimonial_title'); 
                    $description = get_sub_field('testimonial_description'); 
                    $position = get_sub_field('testimonial_position'); 
                    
                        ?>
                    <div class="st-testimonial">
                        <?php if($title): ?>
                            <p class="st-testimonial__title">-  <?php echo $title ?> </p>
                        <?php endif ?>

                        <?php if($description): ?>
                            <div class="st-testimonial__desc">
                               <?php echo $description ?> 
                            </div>
                        <?php endif ?>
                            
                        <?php if($name || $position): ?>
                            <p class="st-testimonial__name"> 
                                <?php if($name): ?><span><?php echo $name ?></span><?php endif?><?php if($position):?><span>, <?php echo $position ?></span><?php endif ?> 
                            </p>
                        <?php endif ?>
                    </div>
                <?php endwhile ?>
            </div>
        <?php endif ?>

        <?php get_template_part('components/buttons'); ?>
	</div>
</section>

