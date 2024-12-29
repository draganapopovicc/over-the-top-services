<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stier
 */

get_header();
$post_id = get_the_ID();
$image = get_the_post_thumbnail($post_id , 'large');
?>

<?php
while ( have_posts() ) :
the_post(); ?>
<main id="primary" class="site-main container st_single-post">
	<article class="post_main">
		<?php
			the_title( '<h1 class="title-3">', '</h1>' );
		?>
		<?php the_content(); ?>
	</article>

</main><!-- #main -->

 <div class="container">
	<?php the_post_navigation(
		array(
			'prev_text' => '<span class="prev nav-subtitle btn btn-5">' . esc_html__( 'Previous Blog', 'stier' ) . '</span> ',
			'next_text' => '<span class="nav-subtitle btn btn-1">' . esc_html__( 'Next Blog', 'stier' ) .'</span>',
		)
	);
	endwhile; // End of the loop.
	?>
</div> 

<?php
get_footer();
