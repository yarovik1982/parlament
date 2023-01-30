<?php
$product_id = get_the_ID();
$product_price = carbon_get_post_meta($product_id, 'product_price');
$product_img_src = get_the_post_thumbnail_url($product_id, 'full' );

$product_categories = get_the_terms( $product_id, 'product-categories');
$product_categories_str = '';
foreach ($product_categories as $category){
   $product_categories_str = "$category->name,";
}
$product_categories_str = substr($product_categories_str, 0, -1);
?>
<!-- <div class="container catalog__container"> -->
<div class="product">

   <div class="product__item">
      <img class="product__img" src="<?php echo $product_img_src; ?>" alt="">
      <h3 class="product__title"></h3>                                                                                
   </div>
   <p class="product__descr"><?php echo $product_categories_str;?></p>
   <!-- <p class="product__descr"><?php the_excerpt(  ); ?></p>
   <span class="product__price"><?php echo $product_price;?></span> -->
</div>
