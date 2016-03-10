<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<div class="container column-view">

	<div id="primary" class="content-area contact-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="secondary" class="sidebar-area">
		<?php get_sidebar(); ?>
	</div><!-- #secondary -->

</div><!-- .container -->


<?php get_footer(); ?>
