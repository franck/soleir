<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
?>

</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<?php	wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="container">
    <div id="header">
      <div id="header-title">
        <h2><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
      	<div id="site-description"><?php bloginfo( 'description' ); ?></div>
      </div><!-- #header-title -->
      
      <div id="menu">
        <ul>
          <li><a href='<?php home_url( '/' ); ?>'>Accueil</a></li>

          <?php query_posts('pagename=presentation'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li><a href='<?php the_permalink(); ?>'>Présentation</a></li>
          <?php endwhile; endif; ?>
          

        </ul>
      </div><!-- #menu -->
      
    </div><!-- #header -->

    <div id="main">
