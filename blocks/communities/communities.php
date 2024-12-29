<?php
$class = 'st-communities';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}

$image = get_field('communities_image');
$iframe_map = get_field('communities_map_iframe');

$padding = get_field_object('padding');
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}
?>

<div class="<?php echo $class ?>" >
    <div class="st-communities__wrap container">
        <div class="st-communities__content">
            <?php get_template_part('components/intro'); ?>

            <?php if( have_rows('communities') ): ?>
                <div class="st-communities__all">
                    
                    <?php while( have_rows('communities') ) : the_row();
                        $link = get_sub_field('community_link');
                        if($link) {
                            $link_url = $link['url'];
							$link_title = $link['title'] ; 
							$link_target = $link['target'] ? $link['target'] : '_self'; 
						}
                    ?>
                  		<?php if($link): ?>
							<a class="st-community__link" aria-label="We provide <?php echo $link_title ?>" href="<?php echo esc_url(  $link['url'] ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 32 32" version="1.1">
                                    <path d="M16 3c-7.18 0-13 5.82-13 13s5.82 13 13 13 13-5.82 13-13-5.82-13-13-13zM23.258 12.307l-9.486 9.485c-0.238 0.237-0.623 0.237-0.861 0l-0.191-0.191-0.001 0.001-5.219-5.256c-0.238-0.238-0.238-0.624 0-0.862l1.294-1.293c0.238-0.238 0.624-0.238 0.862 0l3.689 3.716 7.756-7.756c0.238-0.238 0.624-0.238 0.862 0l1.294 1.294c0.239 0.237 0.239 0.623 0.001 0.862z"/>
                                </svg>
                                <span> <?php echo $link_title ?></span> 
                            </a>
						<?php endif ?>
                    <?php endwhile ?>
                </div>
            <?php endif ?>

            <?php get_template_part('components/buttons'); ?>
        </div>

        <?php if( $image):  ?>
            <figure class="st-communities__image">
                <?php
                    echo wp_get_attachment_image( $image, 'full', "");
                ?>
            </figure>
        <?php endif ?>
    </div>

    <?php if( $iframe_map):  ?>
        <div class="st-communities__map">
            <div class="container">
                <?php echo $iframe_map ?>
            </div>
        </div>
    <?php endif ?>
</div>


