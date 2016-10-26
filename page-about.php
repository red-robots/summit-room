<?php
/**
 * Template Name: About
 */

get_header(); ?>
<div class="page-contents">
	<div class="wrapper">
		<div id="primary" class="content-area-full">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
				

				<?php 

					$images = get_field('gallery');
					$i=0;
					if( $images ): ?>
					
					        <?php foreach( $images as $image ): $i++;

					        if($i == 2) {
					        	$class = 'last';
					        	$i=0;
					        } else {
					        	$class = 'first';
					        }

					        	?>
					         <div class="gal <?php echo $class; ?>">
					             
					                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
					            
					                <div class="caption"><?php echo $image['caption']; ?></div>
					           </div>
					        <?php endforeach; ?>
					 
					<?php endif; ?>

					</article><!-- #post-## -->

					
				<?php endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php
get_footer();
