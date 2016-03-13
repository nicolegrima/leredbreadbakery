<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="indiv-product-type">
	<header class="entry-header product-type-img">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium' ); ?>
		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content product-type-content">
    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php the_excerpt(); ?>
    <p>Price: <?php echo CFS()->get( 'price' ); ?></p>
	</div><!-- .entry-content -->
</div>
</article><!-- #post-## -->
