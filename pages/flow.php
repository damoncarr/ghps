<?php
/*
Template Name: Flow Template
*/
get_header(); ?>

	<div id="primary" class="content-area page-content">
		<!-- <div class="inner"> -->
			<main id="main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'flow' );

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		<!-- </div> -->
	</div><!-- #primary -->

	<?php get_template_part( 'template-parts/footer', 'contact'); ?>
	
<?php

get_footer();
