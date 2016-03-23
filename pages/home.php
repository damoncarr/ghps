<?php
/*
Template Name: Home Template
*/
get_header(); ?>

	<div id="primary" class="content-area page-content">
		<main id="main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'frontpage' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
