<?php
/*
Template Name: Contact Page Template
*/
get_header(); ?>

	<div id="primary" class="content-area page-content">
		<!-- <div class="inner"> -->
			<main id="main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'contact' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		<!-- </div> -->
	</div><!-- #primary -->
	
<?php

get_footer();
