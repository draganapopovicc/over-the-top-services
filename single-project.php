<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stier
 */

get_header();
$project_id = get_the_ID();
$gallery = get_field('project_gallery');
$description = get_field('project_description');
$video_title = get_field('project_video_title');
$video_url = get_field('project_video_link');
$map_iframe = get_field('project_map_iframe');

$video_iframe = get_field('video_iframe');

$service_link = get_field('project_service_link');
if($service_link) {
	$service_link_url = $service_link['url'];
	$service_link_title = $service_link['title'];
	$service_link_target = $service_link['target'] ? $service_link['target'] : '_self';
};
$location_link = get_field('project_location_link');
if($location_link) {
	$location_link_url = $location_link['url'];
	$location_link_title = $location_link['title'];
	$location_link_target = $location_link['target'] ? $location_link['target'] : '_self';
};
?>
<?php
while ( have_posts() ) :
the_post(); ?>

<main id="primary" class="site-main container st_single-project">
	<article class="post_main section">
            <div class="b-title b-title-section">
                <p class="b-title__prefix"> Project </p>
                <h1 class="b-title__main title-1"> <?php echo the_title() ?> </h1>
            </div>

            <?php if( $description ): ?>
                <div class="st-projects__desc"><?php echo $description ?></div>
            <?php endif; ?>

            <?php if( $service_link || $location_link ): ?>
                <div class="st-projects__links">
                    <?php if( $service_link ): ?>
                        <div class="st-projects__link">
                            <span>Service: </span>
                            <a href="<?php echo esc_url($service_link_url) ?>"  target="<?php echo esc_attr( $service_link_target ); ?>">
							<?php echo $service_link_title ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if( $location_link ): ?>
                        <div class="st-projects__link">
                            <span>Location: </span>
                            <a href="<?php echo esc_url($location_link_url) ?>"  target="<?php echo esc_attr( $location_link_target ); ?>">
							<?php echo $location_link_title ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if( $gallery ): ?>
                <div class="st-projects__gallery">
                    <h2 class="st-projects__title"> 
                        Gallery
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM15.53 13.03L12.53 16.03C12.38 16.18 12.19 16.25 12 16.25C11.81 16.25 11.62 16.18 11.47 16.03L8.47 13.03C8.18 12.74 8.18 12.26 8.47 11.97C8.76 11.68 9.24 11.68 9.53 11.97L11.25 13.69V8.5C11.25 8.09 11.59 7.75 12 7.75C12.41 7.75 12.75 8.09 12.75 8.5V13.69L14.47 11.97C14.76 11.68 15.24 11.68 15.53 11.97C15.82 12.26 15.82 12.74 15.53 13.03Z" fill="currentColor"/>
                        </svg>
                    </h2>
                    <div class="st-projects__gallery--all">
                        <?php foreach( $gallery as $image ): ?>
                            <a href="<?php echo esc_url($image['url']); ?>" class="fancybox-figure" data-fancybox="gallery">
                                <img width="307" height="396" src="<?php echo esc_url($image['sizes']['medium_large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>


        <?php if($video_iframe) :?>
            <div class="st-projects__video_url">
                <h2 class="st-projects__title"> 
                    Project Video
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none">
                    <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM15.53 13.03L12.53 16.03C12.38 16.18 12.19 16.25 12 16.25C11.81 16.25 11.62 16.18 11.47 16.03L8.47 13.03C8.18 12.74 8.18 12.26 8.47 11.97C8.76 11.68 9.24 11.68 9.53 11.97L11.25 13.69V8.5C11.25 8.09 11.59 7.75 12 7.75C12.41 7.75 12.75 8.09 12.75 8.5V13.69L14.47 11.97C14.76 11.68 15.24 11.68 15.53 11.97C15.82 12.26 15.82 12.74 15.53 13.03Z" fill="currentColor"/>
                    </svg>
                </h2>
                <?php echo $video_iframe ?>
            </div>
        <?php endif; ?>

        <?php if($map_iframe) :?>
            <div class="st-projects__map">
                <?php echo $map_iframe?>
            </div>
        <?php endif; ?>
	</article>
</main><!-- #main -->

<div class="container">
	<?php the_post_navigation(
		array(
			'prev_text' => '<span class="nav-subtitle btn btn-2">' . esc_html__( 'Previous Project', 'stier' ) . "<small></small>" . '</span> ',
			'next_text' => '<span class="nav-subtitle btn btn-5">' . esc_html__( 'Next Project', 'stier' ) . "<small></small>" . '</span>',
		)
	);
	endwhile; // End of the loop.
	?>
</div>

<?php
get_footer();
