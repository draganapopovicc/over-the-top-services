<?php
$project_id = get_the_ID();
$title = get_the_title();
$image = get_the_post_thumbnail($project_id , 'large');
?>

<div class="st-project">
    <a class="st-project__link" aria-label="Look our project - <?php echo $title ?>" href="<?php the_permalink(); ?>" ></a>

    <figure class="st-project__image">
        <?php if ($image) : ?>
            <?php echo $image; ?>
        <?php endif; ?>
    </figure>

    <?php if ($title) : ?>
        <a class="st-project__name" aria-label="Look our project - <?php echo $title ?>" href="<?php the_permalink(); ?>">
            <span> <?php echo $title; ?></span> 
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"><g id="Arrow / Arrow_Right_LG">
                <path id="Vector" d="M21 12L16 7M21 12L16 17M21 12H3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g>
            </svg>
        </a>
    <?php endif; ?>
</div> 
