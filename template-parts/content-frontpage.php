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
					<?php the_meta(); ?>
				</div>
			</div>
		</div>
	</header><!-- .entry-header -->
	<div class="love-school">
		<h4>Find out why we love our school</h4>
		<h5>Secondary Headline</h5>
	</div>
	</div><!-- .front-page-section1 -->
	<div class="entry-content">
		<div class="whats-new">
			<h4>What's New</h4>
			<h5>Secondary Headline</h5>
		</div>
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ghps' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
