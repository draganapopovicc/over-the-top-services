<?php
$post_id = get_the_ID();
$title = get_the_title();
$image = get_the_post_thumbnail($post_id , 'large');
$excerpt = get_the_excerpt();
?>

<div class="grid_item">
    <figure class="gi_image">
        <?php if ($image) : ?>
            <a href="<?php the_permalink(); ?>"> <?php echo $image; ?>
            </a>
        <?php endif; ?>
	</figure>

    <div class="grid_item__text">
        <?php if ($title) : ?>
            <div class="heading-secondary">
                <a href="<?php the_permalink(); ?>"><?php echo $title; ?></a>
            </div>
        <?php endif; ?>

        <?php if ($excerpt) :
            if (strlen($excerpt) <= 400){
            $trimmed_excerpt = $excerpt;
            }else{
                $trimmed_excerpt = substr($excerpt, 0, strpos($excerpt, ' ', 100));
                $trimmed_excerpt.="...";
            }

            $single_url = "<a class='btn btn-5' href='".get_the_permalink()."'><small class='hidden'>Visit Our Blog</small>".__('See More')."<span> </span></a>";

            $excerpt = sprintf("%s %s", $trimmed_excerpt, $single_url );
            ?>
            <div class="entry-content"> <?php echo $excerpt;  ?> </div>
        <?php endif; ?>
    </div>
</div>
