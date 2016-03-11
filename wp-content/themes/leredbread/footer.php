<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="business-details container">

						<div class="contact business-block">
							<h3>Contact</h3>
							<p><i class="fa fa-envelope"></i>info@leredbread.com</p>
							<p><i class="fa fa-phone"></i>(555) 343 456 7891</p>

								<div>
									<p>
									<i class="fa fa-facebook-square"></i>
									<i class="fa fa-twitter-square"></i>
									<i class="fa fa-google-plus-square"></i>
								</p>
								</div>
						</div>

						<div class="alternate-logo business-block">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							   <img src="<?php echo get_template_directory_uri(); ?>/images/lrb-logo-white.svg" alt="Logo" width="250px" height="" />
							</a>
						</div>

						<div class="hours business-block">
							<h3>Business Hours</h3>
							<p><strong>Monday-Friday:</strong> 9am to 5pm</p>
							<p><strong>Saturday:</strong> 10am to 2pm</p>
							<p><strong>Sunday:</strong> Closed</p>
						</div>
				</div><!-- .business-details -->


				<div class="site-info">
					<div class="copyright container">
						<p>
								<?php printf( esc_html( 'Copyright &copy;'), ''); ?>
								<?php echo date('Y'); ?>
								<?php printf( esc_html( 'Le Red Bread'), ''); ?>
						</p>
					<div>
				</div><!-- .site-info -->

			</footer><!-- #colophon -->

		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
