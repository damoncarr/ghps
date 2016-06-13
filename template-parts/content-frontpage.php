<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ghps
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="frontpage-header">
		<div class="inner">
			<div class="frontpage-hero">
				<div class="frontpage-hero-image">
					<?php if ( has_post_thumbnail() ) { 
				    the_post_thumbnail( 'post_hero' ); 
					} ?>
				</div>
				<div class="site-headline">
					<h2><?php the_field('homepage_headline'); ?></h2>
					<h3><?php the_field('homepage_tagline'); ?></h3>
				</div>
			</div>
		</div>
	</header><!-- .entry-header -->
	<div class="love-school">
		<div class="inner">
			<h4><?php the_field('love_school_headline'); ?></h4>
			<h5><?php the_field('love_school_secondary_headline'); ?></h5>
			<div class="love-school-tiles">
				<div class="tile1">
					<a href="<?php the_field('tile_1_link'); ?>">
						<?php 

							$image = get_field('tile_1_image');
							$size = 'homepage_highlight'; 
							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>
					</a>
					<a href="<?php the_field('tile_1_link'); ?>" class="text-link"><?php the_field('tile_1_label'); ?></a>
				</div>
				<div class="tile2">
					<a href="<?php the_field('tile_2_link'); ?>">
						<?php 

							$image = get_field('tile_2_image');
							$size = 'homepage_highlight'; 
							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>
					</a>
					<a href="<?php the_field('tile_2_link'); ?>" class="text-link"><?php the_field('tile_2_label'); ?></a>
				</div>


			</div>
		</div>
	</div><!-- /love school -->
	</div><!-- .front-page-section1 -->
	<div class="entry-content">
		<div class="inner">
			<div class="whats-new">
				<h4><?php the_field('whats_new_headline'); ?></h4>
				<h5><?php the_field('whats_new_secondary_headline'); ?></h5>
			</div>
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ghps' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
