<?php
/**
* Homepage Recent Posts Template file.
*
* @package RED_Starter_Theme
**/
 ?>

 <div>
   <h2>Our Latest News</h2>
 </div>

 <div class="latest-news-list">

 <?php
    $args = array( 'post_type' => 'post', 'numberposts' => 4, 'order' => 'ASC' );
    $latest_posts = get_posts( $args ); // returns an array of posts
 ?>

 <?php foreach ( $latest_posts as $post ) : setup_postdata( $post ); ?>

    <?php /* Content from your array of post results goes here */ ?>
   <div class="latest-news-single">
     <div class="latest-thumb-wrapper">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'medium' ); ?>
        <?php endif; ?>
     </div>

     <a href="<?php the_permalink();?>"><h3><?php the_title(); ?> </a></h3>

     <div class="entry-meta">
     <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
     </div><!-- .entry-meta -->

   </div><!-- .latest-news-single -->

 <?php endforeach; wp_reset_postdata(); ?>

 </div><!-- .latest-news-list -->
