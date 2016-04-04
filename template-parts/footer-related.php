<?php
/**
 * Template part for displaying related content footer.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ghps
 */

?>

<div class="related-footer">
		<div class="inner">
			
<?php

$post_objects = get_field('related_content');

if( $post_objects ): ?>
<h3>Also in this section</h3>
    <ul>
    <?php foreach( $post_objects as $post_object): ?>
        <li>
            <a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif;

?>


		</div>
</div>