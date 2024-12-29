<?php
$class = 'st-choose-us';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}

$padding = get_field_object('padding');
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$bg_color = get_field('background_color_choose-us');
$style = "background-color: $bg_color";
?>

<div class="<?php echo $class ?>" style="<?php echo $style ?>">
    <div class="st-choose-us__layer"></div>
    <div class="container">
        <div class="st-choose-us__content">

            <div class="left">
                <?php get_template_part('components/intro'); ?>
                <?php get_template_part('components/buttons'); ?>
            </div>

            <?php if( have_rows('choose_us_reasons') ): ?>
                <div class="st-choose-us__all">
                    <?php while( have_rows('choose_us_reasons') ) : the_row();
                        $image = get_sub_field('choose_us_image'); 
                        $description = get_sub_field('choose_us_desc'); 
                    ?>
                    <div class="st-choose-us_item">
                        <?php if( $image ) : ?>
                            <figure class="st-choose-us__image">
                                <?php
                                    echo wp_get_attachment_image( $image, 'full', "");
                                ?>
                            </figure>
                        <?php endif ?>
                        <?php if($description): ?>
                            <div class="st-choose-us__desc"><?php echo $description ?></div>
                        <?php endif ?>
                    </div>
                    <?php endwhile ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>


