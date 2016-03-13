<?php
/**
 * The template for displaying all single products.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="container column-view">

	<div id="primary" class="content-area single-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_title( '<h1 class=" single-product-title entry-title">', '</h1>' ); ?>

      	<header class="entry-header">
      		<?php if ( has_post_thumbnail() ) : ?>
      			<?php the_post_thumbnail( 'large' ); ?>
      		<?php endif; ?>


      	</header><!-- .entry-header -->

      	<div class="entry-content">

					<h3 class="price">Price: <?php echo CFS()->get( 'price' ); ?></h3>
      		<?php the_content(); ?>

      	</div><!-- .entry-content -->
      </article>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->


		<div id="secondary" class="sidebar-area">
			<?php get_sidebar(); ?>-
		</div><!-- #secondary -->


		</div><!-- .container -->

<?php get_footer(); ?>
