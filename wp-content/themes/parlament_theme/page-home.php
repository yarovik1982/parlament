<?php
/*
Template Name: Главная
*/
?>

<?php $page_id = get_the_ID(  );?>
<?php get_header(  );?>


<main class="main">
    <section class="hero" id="hero">
        <div class="hero__wrapper">
            <div class="hero__wrapper-img">
                <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta( $page_id, 'hero_img' ), 'full');?>" alt="">
            </div>
            <div class="container hero__container">
            
                 <!--Bottom content-->
        <!-- <div class="header__bottom-content">
            <a href="shop.html" class="product-category">ОСЕНЬ/ЗИМА</a>
            <a href="shop.html" class="product-category">ВЕСНА/ЛЕТО</a>
            <a href="shop.html" class="product-category">КУРТКИ</a>
            <a href="shop.html" class="product-category">ДЖИНСЫ</a>
            <a href="shop.html" class="product-category">ЧИНОСЫ</a>
            <a href="shop.html" class="product-category">ПЛАТЬЯ</a>
            <a href="shop.html" class="product-category">ШАПКИ</a>
            <p class="product-category">ЕЩЁ <img class="product-category__arrow" src="<?php echo get_template_directory_uri();?>/assets/img/icons/arrow.svg" alt=""></p>
        </div> -->
                <p class="hero__support"></p>
                <h1 class="hero__preview">
                    <span class="hero__logo"><?php echo carbon_get_post_meta($page_id,'top_info');?></span> <br> Магазин одежды</h1>
                <p class="hero__working-hours"><?php echo carbon_get_theme_option('work_hours_text');?><br>
                <?php echo carbon_get_theme_option('work_hours_1');?><br>
                <?php echo carbon_get_theme_option('work_hours_2');?></p>
            </div>
        </div>
    </section>

    <section class="about-us" id="about-us">
        <h2 class="title">О нас</h2>
        <div class="about-us__wrapper">
            <img class="about-us__img-pc" src="<?php echo get_template_directory_uri();?>/assets/img/images/aboutUsPc.svg" alt="">
            <img class="about-us__img-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/images/aboutUsMob.svg" alt="">
        </div>
    </section>
<?php echo get_the_post_thumbnail_url(  );?>
<?php
$catalog_products = carbon_get_post_meta($page_id, 'catalog_products');
$catalog_products_ids = wp_list_pluck( $catalog_products, 'id' );
$catalog_products_query_args = [
    'post_type' => 'product',
    'post__in'   => $catalog_products_ids
];
$catalog_products_query = new WP_Query( $catalog_products_query_args );
// echo '<pre>';
// print_r($catalog_products_ids);
// echo '</pre>';
// $product_id = get_the_ID(  );
// $product_img_src = get_the_post_thumbnail_url( $product_id, 'product' );
echo $product_img;
?>

<section class="catalog" id="catalog">
    
    <h2 class="title"><?php echo carbon_get_post_meta($page_id,'catalog_title');?></h2>
    
    <?php if ( $catalog_products_query->have_posts() ) : ?>
        <div class="container catalog__container">
    
            <?php while ( $catalog_products_query->have_posts() ) : $catalog_products_query->the_post(); ?>
            <?php echo get_template_part( 'catalog-content');?>
        
            <?php endwhile; ?>
        
            <?php wp_reset_postdata(); ?>
        </div>
    
    <?php endif; ?>
        
    </section>

    <section class="contacts" id="contacts" title="contacts">
        <div class="container contacts__container">
            <iframe class="contacts__map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4281.150862033062!2d34.29754461086305!3d55.20153659256962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46cbebe718a21381%3A0x9be80a4e4bd4e85b!2z0YPQuy4gMjUg0J7QutGC0Y__QsdGA0Y8sIDI4LCDQktGP0LfRjNC80LAsINCh0LzQvtC70LXQvdGB0LrQsNGPINC-0LHQuy4sINCg0L7RgdGB0LjRjywgMjE1MTEw!5e1!3m2!1sru!2s!4v1665409256364!5m2!1sru!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div class="contacts__right-content">
                <h2 class="title contacts__title">Контакты</h2>
                <p class="contacts__work-time"><?php echo carbon_get_theme_option('work_hours_text');?><br>
                <?php echo carbon_get_theme_option('work_hours_1');?><br>
                <?php echo carbon_get_theme_option('work_hours_2');?></p>
                <p class="contacts__address"><?php echo carbon_get_theme_option('sity');?><br>
                <?php echo carbon_get_theme_option('address');?></p>

                <div class="contacts__right-bottom">
                    <div class="social contacts__social">
                        <a href="" class="social social-link contacts__social-link">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/vk.svg" alt="" class="social social-link-img contacts__social-img">
                        </a>
                        <a href="" class="social social-link contacts__social-link">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/instagram.svg" alt=""
                                 class="social social-link-img contacts__social-img">
                        </a>
                    </div>

                    <a class="delivery-link" href="#">О доставке</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(  );?>