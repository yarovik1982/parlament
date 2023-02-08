<?php
$product_id = get_the_ID(  );
$product_img_src = get_the_post_thumbnail_url( $product_id, 'product' );
?>


   <div class="catalog__card ID__1">
      <img class="catalog__img" src="<?php echo $product_img_src;?>" alt="">
      <h3 class="catalog__category">
          <?php the_title();?>
      </h3>
   </div>

