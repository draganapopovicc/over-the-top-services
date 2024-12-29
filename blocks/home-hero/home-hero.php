<?php
$class = 'st_home-hero';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}
?>

<div  class="<?php echo $class; ?>">
    <?php get_template_part('components/background'); ?>

    <div class="container st_home-hero__wrap">
        <div class="st_home-hero__content">
            <?php get_template_part('components/intro-h1'); ?>
            <?php get_template_part('components/buttons'); ?>
        </div>
    </div>
</div>
