<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="container column-view">

	<div id="primary" class="content-area blog-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<hr class="classy fa fa-circle">

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

				<!-- <button type="button" id="close-comments">Close Comments</button> -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="secondary" class="sidebar-area">
		<?php get_sidebar(); ?>-
	</div><!-- #secondary -->

	</div><!-- .container -->

<?php get_footer(); ?>
