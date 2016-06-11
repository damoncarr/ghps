<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ghps
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hero-image-single">
		<div class="inner">
			<?php if ( has_post_thumbnail() ) { 
		    the_post_thumbnail( 'post_hero' ); 
			} ?>
		</div>
	</div>
	<div class="inner">
	<div class="post-content">
		
			<header class="entry-header">
				<?php
					if ( is_single() ) {
						the_title( '<h1 class="entry-title">', '</h1>' );
					} else {
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					}

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php ghps_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ghps' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ghps' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		
	</div><!-- /post-content -->
	<div class="sidebar">
			<?php dynamic_sidebar( 'social_sharing' ); ?>
			<h3>Latest News</h3>
			<?php

				// WP_Query arguments
				$args = array (
					'category_name'          => 'news',
					'posts_per_page'         => '3',
					'post__not_in' => array($post->ID)
				);

				// The Query
				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) { ?>
					<ul class="list-post">
					<?php while ( $the_query->have_posts() ) {
						$the_query->the_post(); 
						// do something ?>
						<li class="latest-news-tile">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
					        <?php the_post_thumbnail( 'post_masthead_pic_qtr' ); ?>
								<?php endif; ?>
								<h4><?php the_title(); ?></h4>
							</a>
						</li>
					<?php }
				} else {
					// no posts found
				}

				// Restore original Post Data
				wp_reset_postdata();

				?>
		</div>
		</div>
</article><!-- #post-## -->
