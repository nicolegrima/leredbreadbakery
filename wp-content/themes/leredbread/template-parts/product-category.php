<?php
/**
* Homepage Product Category Template file.
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
       <h3><?php echo $term->name; ?></h3>
       <?php echo $term->description; ?>
       <a href="<?php echo get_term_link( $term ); ?>">See More... </a>

     </div><!-- .product-category-single -->

   <?php endforeach; ?>

 <?php endif; ?>

</div><!-- .product-category-list -->
