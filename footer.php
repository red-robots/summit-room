<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */


$phone = get_field('phone', 'option');
$address = get_field('address', 'option');
$email = get_field('email', 'option');
$spam = antispambot($email);
$hours = get_field('hours', 'option');
$instagram = get_field('instagram_link', 'option');
$twitter = get_field('twitter_link', 'option');
$facebook = get_field('facebook_link', 'option');
$google_analytics = get_field('google_analytics', 'option');
$sitemap = get_field('sitemap_link', 'option');

?>

	</div><!-- #content -->


	


	<footer id="colophon" class="site-footer" role="contentinfo">

	<?php if( is_home() ) { ?>
		<div class="big-button">
			<div class="small-button">
				<a href="<?php bloginfo('url'); ?>/request-a-reservation">REQUEST A RESERVATION</a>
			</div>
		</div>
	<?php } ?>	
		<div class="wrapper">
			
			<section class='footer-col-1 foot-col'>
				<div class="item">
					<h3>HOURS</h3>
					<?php echo $hours; ?>
				</div>
				<div class="item">
					<div class="social social-footer">
						<li class="facebook">
							<i class="fa fa-facebook-square" aria-hidden="true"><a href="<?php echo $facebook; ?>"></a></i>
						</li>
						<li class="facebook">
							<i class="fa fa-instagram" aria-hidden="true"><a href="<?php echo $instgram; ?>"></a></i>
						</li>
						<li class="facebook">
							<i class="fa fa-twitter-square" aria-hidden="true"><a href="<?php echo $twitter; ?>"></a></i>
						</li>
					</div>
					
				</div>
			</section>

			<section class='footer-col-2 foot-col'>
				<div class="item">
					<h3>COME SEE US</h3>
					<?php echo $address; ?>
				</div>
				<div class="item">
					<h3>WE CATER! GIVE US A CALL</h3>
					<?php echo '(p) ' . $phone; ?>
					<br>
					<?php echo '(e) <a href="'. $spam . '">' . $spam . '</a>'; ?>
				</div>
				
			</section>

			<section class='footer-col-3 foot-col'>
				<h3 class="center">WE PROUDLY SUPPORT</h3>
				<div class="behailu">
					<a target="_blank" href="http://www.behailuacademy.org/">
						<img src="<?php bloginfo('template_url'); ?>/images/behailu.png">
					</a>
				</div>
			</section>

			<div class="swoosh bottom-swoosh">
				<img src="<?php bloginfo('template_url');?>/images/swoosh.png">
			</div>

			<section class="foot-col group-start">
				
				<div class="img-center">
					<h3 class="center">A PART OF</h3>
					<div class="rollover">
						<a href="#">
							<img alt="Tree House Kitchen" title="Tree House Kitchen" src="<?php bloginfo('template_url'); ?>/images/tree-house-kitchen.png">
						</a>
					</div><!-- roll over -->
				</div>
			</section>
			<div class="group-item ">
				<div class="img-joe rollover">
					<a href="#">
						<img alt="Joe and Nosh" title="Joe and Nosh" src="<?php bloginfo('template_url'); ?>/images/joe-and-nosh.png">
					</a>
				</div>
			</div>
			<div class="group-item ">
				<div class="img-packhouse rollover">
					<a href="#">
						<img alt="Packhouse" title="Packhouse" src="<?php bloginfo('template_url'); ?>/images/packhouse.png">
					</a>
				</div>
			</div>
			<div class="group-item ">
				<div class="img-mayo rollover">
					<a href="#">
						<img alt="Mayobird" title="Mayobird" src="<?php bloginfo('template_url'); ?>/images/mayobird.png">
					</a>
				</div>
			</div>
			
		</div><!-- wrapper -->
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php 

wp_footer(); 

the_field('google_analytics', 'opiton');

?>

</body>
</html>
