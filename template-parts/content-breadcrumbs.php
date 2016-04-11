<?php
/**
 * Template part for displaying breadcrumbs.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ghps
 */

?>

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
  <?php if(function_exists('bcn_display'))
  {
      bcn_display();
  }?>
</div>
