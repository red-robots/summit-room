<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

// Homepage
$post = get_post(7); 
setup_postdata( $post );
 
	$heroText = get_field('hero_text');
 
wp_reset_postdata();

?>

	<div id="primary" class="content-area-full homepage">
		<main id="main" class="site-main" role="main">

			<section class="hero">
				<div class="hero-text"><?php echo $heroText; ?></div>
				
			</section>
		

		</main><!-- #main -->
	</div><!-- #primary -->

	

<?php
get_footer();
