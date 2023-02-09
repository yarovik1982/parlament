<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Описание">
    <!-- <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">-->
    <script defer src="<?php echo get_template_directory_uri();?>/assets/js/burgerMenu.js"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/assets/js/smoothScroll.js"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/assets/js/animationHeader.js"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/assets/js/subnavAccordion.js"></script> 

    <?php wp_head(  ); ?>
</head>
<body>

<!-- <?php echo wp_get_attachment_image_url( carbon_get_theme_option('icon_vk_light'));?> -->

<header class="header">
    <div class="container header__container">
        <!--Top content-->
        <div class="header__top-content">

            <div class="menu">
                <div class="burger">
                    <span class="burger__line"></span>
                    <span class="burger__line"></span>
                    <span class="burger__line"></span>
                </div>
                <p class="menu__text">Меню</p>
            </div>

            <nav class="nav">
                <div class="burger nav__burger"></div>
                <!--main navigation-->
                <ul class="nav__list nav__menu">
                    <li class="nav__title nav__menu-title">Меню</li>
<?php
wp_nav_menu( [
	'theme_location'  => 'menu_main_burger',
	'container'       => null,
	'menu_class'      => 'nav__menu',
] );
?>

                </ul>
                <!--catalog navigation-->
                <ul class="nav__list nav__catalog">
                    <li class="nav__title">Каталог</li>
                    <li class="nav__item">ОСЕНЬ/ЗИМА<img class="product-category__arrow" src="<?php echo get_template_directory_uri();?>/assets/img/icons/arrowBlack.svg" alt="">
                        <ul class="subnav">
                        <?php

$terms = get_terms( [
	'taxonomy'   => 'product-categories',
    'name'       => ['Куртки', 'Джинсы', 'Чиносы', 'Джемпера', 'Кардиганы', 'Лонгсливы', 'Водолазки', 'Футболки'],
    'orderby'    => 'id',
	'order'      => 'ASC',
] );
?>
            <?php foreach ($terms as $item) : ?>
                
                <li class="subnav__item" data-filter="<?php echo $item -> slug;?>">
                    <?php echo $item -> name;?>
                </li>
            <?php endforeach;?>
                           
                            <!-- <li class="subnav__item"><a class="subnav__link" href="shop.html">Джинсы</a></li>
                            <li class="subnav__item"><a class="subnav__link" href="shop.html">Чиносы</a></li>
                            <li class="subnav__item"><a class="subnav__link" href="shop.html">Джемпера</a></li>
                            <li class="subnav__item"><a class="subnav__link" href="shop.html">Кардиганы</a></li>
                            <li class="subnav__item"><a class="subnav__link" href="shop.html">Лонгсливы</a></li>
                            <li class="subnav__item"><a class="subnav__link" href="shop.html">Водолазки</a></li>
                            <li class="subnav__item"><a class="subnav__link" href="shop.html">Футболки</a></li> -->
                        </ul>
                    </li>
                    <li class="nav__item">ВЕСНА/ЛЕТО<img class="product-category__arrow" src="<?php echo get_template_directory_uri();?>/assets/img/icons/arrowBlack.svg" alt="">
                        <ul class="subnav">
                            <?php
                                $terms = get_terms( [
                                	'taxonomy'   => 'product-categories',
                                    'name'       => ['Куртки', 'Джинсы', 'Чиносы', 'Джемпера', 'Кардиганы', 'Лонгсливы', 'Водолазки',      'Футболки'],
                                    'orderby'    => 'id',
                                	'order'      => 'ASC',
                                ] );
                            ?>
                            <?php 
                                foreach ($terms as $item) : 
                            ?>
                                
                                <li class="subnav__item" data-filter="<?php echo $item -> slug;?>">
                                    <?php echo $item -> name;?>
                                </li>
                            <?php endforeach;?>                            
                        </ul>
                    </li>
                    <li class="nav__item">МУЖСКАЯ ОДЕЖДА<img class="product-category__arrow" src="<?php echo get_template_directory_uri();?>/assets/img/icons/arrowBlack.svg" alt="">
                        <ul class="subnav">
                        <?php
                            $terms = get_terms( [
                            	'taxonomy'   => 'product-categories',
                                'name'       => ['Куртки', 'Джинсы', 'Чиносы', 'Джемпера', 'Кардиганы', 'Лонгсливы', 'Водолазки', 'Футболки'],
                                'orderby'    => 'id',
                            	'order'      => 'ASC',
                            ] );
                            ?>
                            <?php foreach ($terms as $item) : ?>
                                
                                <li class="subnav__item" data-filter="<?php echo $item -> slug;?>">
                                    <?php echo $item -> name;?>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </li>
                    <li class="nav__item">ЖЕНСКАЯ ОДЕЖДА<img class="product-category__arrow" src="<?php echo get_template_directory_uri();?>/assets/img/icons/arrowBlack.svg" alt="">
                        <ul class="subnav">
                        <?php
                            $terms = get_terms( [
                            	'taxonomy'   => 'product-categories',
                                'name'       => ['Куртки', 'Джинсы', 'Чиносы', 'Джемпера', 'Кардиганы', 'Лонгсливы', 'Водолазки', 'Футболки'],
                                'orderby'    => 'id',
                            	'order'      => 'ASC',
                            ] );
                            ?>
                            <?php foreach ($terms as $item) : ?>
                                
                                <li class="subnav__item" data-filter="<?php echo $item -> slug;?>">
                                    <?php echo $item -> name;?>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </li>
                    <li class="nav__item">Другое<img class="product-category__arrow" src="<?php echo get_template_directory_uri();?>/assets/img/icons/arrowBlack.svg" alt="">
                        <ul class="subnav">
                        <?php

                            $terms = get_terms( [
                            	'taxonomy'   => 'product-categories',
                                'name'       => ['Куртки', 'Джинсы', 'Чиносы', 'Джемпера', 'Кардиганы', 'Лонгсливы', 'Водолазки', 'Футболки'],
                                'orderby'    => 'id',
                            	'order'      => 'ASC',
                            ] );
                            ?>
                            <?php foreach ($terms as $item) : ?>
                                <li class="subnav__item" data-filter="<?php echo $item -> slug;?>">
                            <?php echo $item -> name;?>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </li>
                </ul>
                <!--address navigation-->
                <div class="nav__address address">
                    <p class="address__text"><?php echo carbon_get_theme_option('sity');?></p>
                    <a href="" class="social-link">
                        <img class="social-link-img" src="<?php echo wp_get_attachment_image_url( carbon_get_theme_option('icon_vk_dark'));?>" alt="">
                    </a>
                    <a href="" class="social-link">
                        <img class="social-link-img" src="<?php echo wp_get_attachment_image_url( carbon_get_theme_option('icon_insta_dark'));?>" alt="">
                    </a>
                    <p class="address__subtext"><?php echo carbon_get_theme_option('address');?></p>
                </div>
            </nav>

            <div class="logo header__logo">
<?php 
if(is_front_page()):?>
                <p class="logo__top header__logo-top">Pt</p>
                <p class="logo__bottom header__logo-bottom">Магазин одежды</p>
<?php else : ?>
            <a href="<?php echo get_home_url( ); ?>">
                <p class="logo__top header__logo-top">Pt</p>
                <p class="logo__bottom header__logo-bottom">Магазин одежды</p>
            </a>

<?php endif; ?>
                <!-- <p class="logo__top header__logo-top">Pt</p>
                <p class="logo__bottom header__logo-bottom">Магазин одежды</p> -->
            </div>

            <div class="social header__social">
                <a href="<?php echo carbon_get_theme_option('link_vk');?>" class="social-link">
                    <img src="<?php echo wp_get_attachment_image_url( carbon_get_theme_option('icon_vk_light'));?>" alt="" class="social-link-img">
                </a>
                <a href="" class="social-link">
                    <img src="<?php echo wp_get_attachment_image_url( carbon_get_theme_option('icon_insta_light'));?>" alt="" class="social-link-img">
                </a>
            </div>

            <div class="blackout"></div>
        </div>

        <!--Bottom content-->
        <ul class="header__bottom-content">
            <?php

$terms = get_terms( [
	'taxonomy'   => 'product-categories',
    'name'       => ['Весна лето', 'Осень зима', 'Джинсы', 'Куртки', 'Чиносы', 'Платья', 'Шапки'],
    'orderby'    => 'id',
	'order'      => 'ASC',
] );
?>
            <?php foreach ($terms as $item) : ?>
                
                <li class="product-category" data-filter="<?php echo $item -> slug ;?>">
                    <?php echo $item -> name;?>
                </li>
            <?php endforeach;?>
            <p class="product-category">ЕЩЁ <img class="product-category__arrow" src="<?php echo get_template_directory_uri();?>/assets/img/icons/arrow.svg" alt=""></p>
        </ul>
        
    </div>
</header>