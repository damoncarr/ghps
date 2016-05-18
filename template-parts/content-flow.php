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
	<header class="flow-header">
		<div class="inner">
			<?php the_title( '<h1 class="entry-title page-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->
	<div class="flow-tiles-container">
		<div class="inner">

		<?php if (strlen(get_field('flow_tile_1_link')) * strlen(get_field('flow_tile_1_image')) * strlen(get_field('flow_tile_1_label')) >0 ): ?>
			<div class="flow-tile">
				<a href="<?php the_field('flow_tile_1_link'); ?>">
					<?php 

						$image = get_field('flow_tile_1_image');
						$size = 'homepage_highlight'; 
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
				</a>
				<a href="<?php the_field('flow_tile_1_link'); ?>" class="text-link"><?php the_field('flow_tile_1_label'); ?></a>
			</div>
			<?php endif; ?>

			<?php if (strlen(get_field('flow_tile_2_link')) * strlen(get_field('flow_tile_2_image')) * strlen(get_field('flow_tile_2_label')) >0 ): ?>
			<div class="flow-tile">
				<a href="<?php the_field('flow_tile_2_link'); ?>">
					<?php 

						$image = get_field('flow_tile_2_image');
						$size = 'homepage_highlight'; 
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
				</a>
				<a href="<?php the_field('flow_tile_2_link'); ?>" class="text-link"><?php the_field('flow_tile_2_label'); ?></a>
			</div>
			<?php endif; ?>

			<?php if (strlen(get_field('flow_tile_3_link')) * strlen(get_field('flow_tile_3_image')) * strlen(get_field('flow_tile_3_label')) >0 ): ?>
			<div class="flow-tile">
				<a href="<?php the_field('flow_tile_3_link'); ?>">
					<?php 

						$image = get_field('flow_tile_3_image');
						$size = 'homepage_highlight'; 
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
				</a>
				<a href="<?php the_field('flow_tile_3_link'); ?>" class="text-link"><?php the_field('flow_tile_3_label'); ?></a>
			</div>
			<?php endif; ?>

			<?php if (strlen(get_field('flow_tile_4_link')) * strlen(get_field('flow_tile_4_image')) * strlen(get_field('flow_tile_4_label')) >0 ): ?>
			<div class="flow-tile">
				<a href="<?php the_field('flow_tile_4_link'); ?>">
					<?php 

						$image = get_field('flow_tile_4_image');
						$size = 'homepage_highlight'; 
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
				</a>
				<a href="<?php the_field('flow_tile_4_link'); ?>" class="text-link"><?php the_field('flow_tile_4_label'); ?></a>
			</div>
			<?php endif; ?>

			<?php if (strlen(get_field('flow_tile_5_link')) * strlen(get_field('flow_tile_5_image')) * strlen(get_field('flow_tile_5_label')) >0 ): ?>
			<div class="flow-tile">
				<a href="<?php the_field('flow_tile_5_link'); ?>">
					<?php 

						$image = get_field('flow_tile_5_image');
						$size = 'homepage_highlight'; 
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
				</a>
				<a href="<?php the_field('flow_tile_5_link'); ?>" class="text-link"><?php the_field('flow_tile_5_label'); ?></a>
			</div>
			<?php endif; ?>

			<?php if (strlen(get_field('flow_tile_6_link')) * strlen(get_field('flow_tile_6_image')) * strlen(get_field('flow_tile_6_label')) >0 ): ?>
			<div class="flow-tile">
				<a href="<?php the_field('flow_tile_6_link'); ?>">
					<?php 

						$image = get_field('flow_tile_6_image');
						$size = 'homepage_highlight'; 
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
				</a>
				<a href="<?php the_field('flow_tile_6_link'); ?>" class="text-link"><?php the_field('flow_tile_6_label'); ?></a>
			</div>
			<?php endif; ?>

		</div>
	</div>

</article><!-- #post-## -->
