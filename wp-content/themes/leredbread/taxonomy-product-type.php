<?php
/**
 * The template for displaying taxonomy-product-type pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="container column-view">

	<div id="primary" class="content-area product-type-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header product-type-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', 'type' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="secondary" class="sidebar-area">
		<?php get_sidebar(); ?>-
	</div><!-- #secondary -->

	</div><!-- .container -->
<?php get_footer(); ?>
