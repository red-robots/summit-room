<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href="https://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet">
<script src="https://use.fontawesome.com/762c66dd2b.js"></script>

<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/favicons/manifest.json">
<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

<?php wp_head(); 

$phone = get_field('phone', 'option');
$address = get_field('address', 'option');
$email = get_field('email', 'option');
$spam = antispambot($email);
$hours = get_field('hours', 'option');
$instagram = get_field('instagram_link', 'option');
$twitter = get_field('twitter_link', 'option');
$facebook = get_field('facebook_link', 'option');

?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<section class="top-header">
		<div class="wrapper">
			
			<div class="social social-head">
				<ul>
					<li class="facebook">
						<i class="fa fa-facebook" aria-hidden="true"><a target="_blank" href="<?php echo $facebook; ?>"></a></i>
					</li>
					<li class="facebook">
						<i class="fa fa-instagram" aria-hidden="true"><a target="_blank" href="<?php echo $instagram; ?>"></a></i>
					</li>
					<li class="facebook">
						<i class="fa fa-twitter" aria-hidden="true"><a target="_blank" href="<?php echo $twitter; ?>"></a></i>
					</li>
				</ul>
			</div>

			<div class="srphone"><?php echo $phone; ?></div>

		</div>
	</section>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">

			<?php if(is_home()) { ?>
	            <h1 class="logo">
	            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	            </h1>
	        <?php } else { ?>
	            <div class="logo">
	            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	            </div>
	        <?php } ?>


			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content ">
