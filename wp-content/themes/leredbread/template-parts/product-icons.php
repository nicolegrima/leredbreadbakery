<?php
/**
* Homepage Product Icons Template file.
*
* @package RED_Starter_Theme
**/
 ?>

 <div class="product-category-list">

 <?php
   $terms = get_terms( 'product-type' );
 ?>

 <?php if ( ! empty( $terms ) ) : ?>

   <?php foreach( $terms as $term) : ?>

     <div class="product-category-single">

       <img src="<?php echo get_template_directory_uri() . '/images\/' . $term->slug; ?>.png" alt ="" />
       <a href="<?php echo get_term_link( $term ); ?>"><h3><?php echo $term->name; ?></h3></a>

     </div><!-- .product-category-single -->

   <?php endforeach; ?>

 <?php endif; ?>

</div><!-- .product-category-list -->
