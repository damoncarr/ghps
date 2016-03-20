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
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
	</div>
	<div class="entry-content">
		<div class="hero-image-page-large">
			<?php if ( has_post_thumbnail() ) { 
		    the_post_thumbnail( 'post_masthead_pic' ); 
			} ?>
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
