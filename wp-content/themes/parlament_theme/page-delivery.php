<?php
/*
Template Name: Доставка
*/
?>

<?php $page_id = get_the_ID(  ); ?>
<?php get_header(  );?>
<main class="main">
    <section class="delivery">
        <div class="container delivery__container">
            <h1 class="delivery__title">
            <?php echo carbon_get_post_meta($page_id, 'delivery_suptitle');?>
            </h1>
            <p class="delivery__text">
            <?php echo carbon_get_post_meta($page_id, 'delivery_title');?>
            <!-- <br><br> -->
            <?php echo carbon_get_post_meta($page_id, 'delivery_content');?>
                
            </p>
        </div>
    </section>
</main>
<?php get_footer(  );?>