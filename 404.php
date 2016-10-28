<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ACStarter
 */

get_header(); ?>
<div class="page-contents">
	<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

			<article id="post-<?php the_ID(); ?>" class="hentry">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'acstarter' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'acstarter' ); ?></p>

					<?php wp_nav_menu( array( 'theme_location' => 'sitemap' ) ); ?>

				</div><!-- .page-content -->

				</article>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div></div>
<?php
get_footer();
