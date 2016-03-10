<?php
/**
 * Front Page Template file.
 *
 * @package RED_Starter_Theme
 **/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="hero">
				<h1 class="hero-text">Baked to Perfection.</h1>
			</section>

			<div class="container">

			<section class="product-category-section">
				<?php get_template_part('template-parts/product-category');?>
			</section> <!--close .product-category-section-->

			<section class="products-bait">
			  <p>
			  	<span>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</span>
			  	<a href="/products/" class="btn">See Our Products</a>
			  </p>
			</section>

			<section class="recent-posts-section">
				<?php get_template_part('template-parts/recent-posts');?>
			</section> <!--close .recent-posts-section-->

			<section class="testimonials-section">
				<?php get_template_part('template-parts/home-testimonials');?>
			</section> <!--close .testimonials-section-->

		</div><!-- .container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
