<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Embroidery
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'embroidery' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
            
            <?php // Display site icon or first letter as logo ?>	
  		<div class="site-logo">
                    <div class="icon">
 			<?php $site_title = get_bloginfo( 'name' ); ?>
  			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
 				<div class="screen-reader-text">Go to the home page of <?php bloginfo( 'name' ); ?></div>
 				<div class="screen-reader-text">
 					<?php printf( esc_html__('Go to the home page of %1$s', 'popperscores'), $site_title ); ?>	
 				</div>
                                <?php 
                                if ( has_site_icon()){
                                    $site_icon = esc_url( get_site_icon_url(270) ); ?>
                                    <img class="site-icon" src="<?php echo $site_icon; ?>">
                                <?php } else {?>
                                
  				<div class="site-firstletter" aria-hidden="true">
 					<?php echo substr($site_title, 0, 1); ?>
  				</div>
                                <?php } ?>        
  			</a>
                    </div>
                    <div class="site-menu">
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <button class="menu-toggle" aria-controls="primary-menu"></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu','menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
  		</div>
                </div>
            <div class="header-image"> 
            <?php if (  is_front_page()) : ?>
	     <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>"  alt="">
	       </a>
                 <div class="site-branding<?php if ( is_front_page() && is_home() ) { echo ' screen-reader-text'; } ?>">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<?php else : ?>
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
	      <?php endif; // End header image check. ?>
            </div>
           
                
	</header><!-- #masthead -->

	<div id="content" class="site-content">
