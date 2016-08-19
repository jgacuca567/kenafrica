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

?>
<!DOCTYPE html>
	<html <?php language_attributes();?>>
	<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon@2x.png" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon@3x.png" />

<?php wp_head();?>
</head>

<body <?php body_class();?>>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsenavbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?php bloginfo('name');?>
            </a>
    </div>
<?php
wp_nav_menu(array(
	'menu' => 'primary',
	'theme_location' => 'primary',
	'depth' => 2,
	'container' => 'div',
	'container_class' => 'collapse navbar-collapse',
	'container_id' => 'collapsenavbar',
	'menu_class' => 'nav navbar-nav pull-right',
	'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
	'walker' => new wp_bootstrap_navwalker())
);
?>
    </div>
</nav>