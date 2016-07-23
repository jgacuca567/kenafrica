<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kenshopping
 */

?><!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url');?>">

<?php wp_head();?>
</head>

<body <?php body_class();?>>
	<nav  class="navbar navbar-default">
		<ul class="nav navbar-nav"></ul>
		<?php
				 wp_nav_menu( array(
						 'menu'              => 'primary',
						 'theme_location'    => 'primary',
						 'depth'             => 2,
						 'container'         => 'div',
						 'container_class'   => 'collapse navbar-collapse',
		 			 	 'container_id'      => 'collapsenavbar',
						 'menu_class'        => 'nav navbar-nav',
						 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						 'walker'            => new wp_bootstrap_navwalker())
				 );
		 ?>
		</ul>
		<button type="button" name="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsenavbar" aria-expanded="false"></button>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<a href="<?php ?>">Kenafrica</a>
	</nav>
