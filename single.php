<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ghps
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
			<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'single' );

				// the_post_navigation();

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		
	</div><!-- #primary -->

	<?php get_template_part( 'template-parts/footer', 'contact'); ?>

<?php
get_footer();
