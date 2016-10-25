<?php
/**
 * Template Name: Menu
 */

get_header(); ?>
<div class="page-contents">
	<div class="wrapper">
		<div id="primary" class="content-area-full">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post(); 

				$dinnerMenu = get_field('dinner_menu');
				$drinkMenu = get_field('drink_menu');
				$dinnerimage = get_field('dinner_menu_image');
				$drinkimage = get_field('drink_menu_image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)


				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>


						<div class="smenu-item">
							<div class="menu-top-button">
								<div class="small-button">
								<a href="<?php echo $dinnerMenu; ?>">DINNER MENU</a>
								</div>
							</div>
							<div class="menu-image"><?php echo wp_get_attachment_image( $dinnerimage, $size ); ?></div>
						</div>

						<div class="smenu-item">
							<div class="menu-top-button">
								<div class="small-button">
								<a href="<?php echo $drinkMenu; ?>">DRINK MENU</a>
								</div>
							</div>
							<div class="menu-image"><?php echo wp_get_attachment_image( $drinkimage, $size ); ?></div>
							
						</div>

					</div><!-- .entry-content -->

				</article><!-- #post-## -->


				<?php endwhile; // End of the loop.?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php
get_footer();
