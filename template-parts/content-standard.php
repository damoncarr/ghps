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
	<header class="entry-header">
		<div class="inner">
		
			<div class="hero-image-page hero-image-page-mobile">
				<?php if ( has_post_thumbnail() ) { 
			    the_post_thumbnail( 'post_masthead_pic' ); 
				} ?>
			</div>
			<?php the_title( '<h1 class="entry-title page-title">', '</h1>' ); ?>
			
		</div>
	</header><!-- .entry-header -->
	<div class="inner">
		<?php get_template_part( 'template-parts/content', 'breadcrumbs' ); ?>
	</div>
	<div class="entry-content">
		<div class="inner">
			<div class="hero-image-page-large">
				<?php if ( has_post_thumbnail() ) { 
			    the_post_thumbnail( 'post_masthead_pic' ); 
				} ?>

			</div>

			<?php

				$post_objects = get_field('useful_links');

				if( $post_objects ): ?>
					<div class="useful-links-container">
						<h3>Useful Links</h3>
					    <ul>
					    <?php foreach( $post_objects as $post_object): ?>
					        <li>
					            <a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a>
					        </li>
					    <?php endforeach; ?>
					    </ul>
			    </div>
				<?php endif; ?>

			
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
