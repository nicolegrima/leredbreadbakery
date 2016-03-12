<?php
/**
 * Template for Product Archive Page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="container">

        <header class="page-header archive-product-header">
            <h1 class="entry-title archive-product-title">Our Products are made fresh daily</h1>
            <p>We are a team of creative and talented individuals who love
              making delicious treats.</p>
        </header><!-- .page-header -->

				<div class="product-list">

		    <?php if ( have_posts() ) : ?>
			    <?php /* Start the Loop */ ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<div class="product-image">
              <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'medium' ); ?></a>
              <?php endif; ?>
							<div>
              <div class="product-details">
                  <?php the_title( '<p class="entry-title">', '</p>' ); ?>
                  <?php echo CFS()->get( 'price' ); ?>
              </div>
          </article>

          <?php endwhile; // End of the while loop. ?>

          <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>

          <?php endif; // End of the loop ?>

				</div><!-- .product-list -->

      </div><!-- .container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
