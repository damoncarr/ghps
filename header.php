<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ghps
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://use.typekit.net/ztf7aif.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<?php wp_head(); ?>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
</head>
<?php if( has_nav_menu( 'top_header' ) )
  $walker= new Custom_Walker_Nav_Menu1;
  $menu=wp_nav_menu( array(
		  'container' => false,
		  'theme_location' => 'primary',
		  'items_wrap'     => '<ul data-title="Main Menu" class="main-menu">%3$s</ul>',
		  'echo'		   => false,
		  'walker'         => $walker
		  )
  );
  $class.=" level".$walker->active_level;
?>
<body <?php body_class(); ?>>
<div class="quicklinks-bar">
	<div class="inner">
		<?php if( has_nav_menu( 'top_quicklinks' ) )
		wp_nav_menu( array(
			'container' => false,
			'theme_location' => 'top_quicklinks',
			'menu_class'     => 'top-quicklinks',
			'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
			// 'walker'         => new Custom_Walker_Nav_Menu
			)
		); ?>
	</div>
</div>
<header id="header">
			<a href="#" class="nav-opener"><span></span></a>
			<div class="top-header">
				<div class="container">
					<div class="search-holder">
						<form method="get" class="search-form" action="<?php echo home_url(); ?>" >
							<div class="btn-area">
								<button type="submit" class="btn-submit"><span class="text-hide"><?php _e("Search","ghps")?></span></button>
								<a href="#" class="btn-opener"><span class="text-hide"><?php _e("Opener","ghps")?></span></a>
							</div>
							<div class="slide"><input name="s" type="search" placeholder="<?php _e("Search","ghps")?>"></div>
						</form>
					</div>
					<div class="logo-holder">
						<div class="logo-container">
							<a href="<?php echo home_url();?>" class="home-link home-link-logo">
								<object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/images/ghps-logo.svg" class="logo-fill masthead-logo">Your browser does not support SVGs</object>
							</a>
							<a href="<?php echo home_url();?>" class="home-link home-link-text">
								<h2 class="site-name"><span class="slogan1"><?php _e("Glen Huntly","ghps")?></span><span class="slogan2"><?php _e("Primary School","ghps")?></span></h2>
							</a>
						</div>
						<?php if( has_nav_menu( 'top_header' ) )
						wp_nav_menu( array(
							'container' => false,
							'theme_location' => 'top_header',
							'menu_class'     => 'top-nav hide-mobile',
							'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
							'walker'         => new Custom_Walker_Nav_Menu
							)
						); ?>
					</div>
				</div>
			</div>
			<div class="container nav-area">
				<div class="inner">
					<div class="logo-in-nav">
						<a href="<?php echo home_url();?>" class="home-link home-link-logo">
							<object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/images/ghps-logo.svg" class="logo-fill masthead-logo-in-nav">Your browser does not support SVGs</object>
						</a>
						<div class="home-link home-link-text home-link-desktop">
							<h2 class="site-name"><span class="slogan1"><?php _e("Glen Huntly","ghps")?></span><span class="slogan2"><?php _e("Primary School","ghps")?></span></h2>
						</div>
					</div>
					<div class="wrap-nav">
						<div class="search-holder hide-desktop">
							<form method="get" class="search-form" action="<?php echo home_url(); ?>" >
								<div class="btn-area">
									<button type="submit" class="btn-submit"><span class="text-hide"><?php _e("Search","ghps")?></span></button>
									<a href="#" class="btn-opener"><span class="text-hide"><?php _e("Opener","ghps")?></span></a>
								</div>
								<div class="slide"><input type="search" name="s" placeholder="<?php _e("Search","ghps")?>"></div>
							</form>
						</div>
						<?php ?>
						<?php if( has_nav_menu( 'primary' ) ):?>
								<nav id="nav">
								<?php echo $menu;?>
								</nav>
						<?php endif;?>
						<?php ?>
						<?php if( has_nav_menu( 'mobile' ) )
								wp_nav_menu( array(
									'container' => false,
									'theme_location' => 'mobile',
									'menu_class'     => 'top-nav hide-desktop',
									'items_wrap'     => '<ul data-title="Sub menu" class="%2$s">%3$s</ul>',
									)
								);
						?>
					</div>
				</div>
			</div>
		</header>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ghps' ); ?></a>

	<div id="content" class="site-content">
