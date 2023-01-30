<?php
/*
Template Name: Главная
*/
?>


<?php get_header(  );?>



<main class="main">
    <section class="hero" id="hero">
        <div class="hero__wrapper">
            <div class="container hero__container">
                <p class="hero__support"></p>
                <h1 class="hero__preview"><span class="hero__logo">Parlament</span> <br> Магазин одежды</h1>
                <p class="hero__working-hours">Время работы<br>
                    Пн.-Сб. 9:00-20:00;<br>
                    Вс. 9:00-18:00.</p>
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

    <section class="catalog" id="catalog">
        <h2 class="title">Каталог</h2>
        <div class="container catalog__container">
            <div class="catalog__card ID__1">
                <img class="catalog__img" src="<?php echo get_template_directory_uri();?>/assets/img/images/dress.png" alt="">
                <h3 class="catalog__category">Платья</h3>
            </div>
            <div class="catalog__card ID__2">
                <img class="catalog__img" src="<?php echo get_template_directory_uri();?>/assets/img/images/pullover.png" alt="">
                <h3 class="catalog__category">Свитеры</h3>
            </div>
            <div class="catalog__card ID__3">
                <img class="catalog__img" src="<?php echo get_template_directory_uri();?>/assets/img/images/jacket.png" alt="">
                <h3 class="catalog__category">Куртки</h3>
            </div>
            <div class="catalog__card ID__4">
                <img class="catalog__img" src="<?php echo get_template_directory_uri();?>/assets/img/images/pullover.png" alt="">
                <h3 class="catalog__category">Футболки</h3>
            </div>

            <div class="catalog__card ID__1">
                <img class="catalog__img" src="<?php echo get_template_directory_uri();?>/assets/img/images/dress.png" alt="">
                <h3 class="catalog__category">Платья</h3>
            </div>
            <div class="catalog__card ID__2">
                <img class="catalog__img" src="<?php echo get_template_directory_uri();?>/assets/img/images/pullover.png" alt="">
                <h3 class="catalog__category">Свитеры</h3>
            </div>
            <div class="catalog__card ID__3">
                <img class="catalog__img" src="<?php echo get_template_directory_uri();?>/assets/img/images/jacket.png" alt="">
                <h3 class="catalog__category">Куртки</h3>
            </div>
            <div class="catalog__card ID__4">
                <img class="catalog__img" src="<?php echo get_template_directory_uri();?>/assets/img/images/pullover.png" alt="">
                <h3 class="catalog__category">Футболки</h3>
            </div>

            <div class="catalog__card ID__1">
                <img class="catalog__img" src="<?php echo get_template_directory_uri();?>/assets/img/images/dress.png" alt="">
                <h3 class="catalog__category">Платья</h3>
            </div>
            <div class="catalog__card ID__2">
                <img class="catalog__img" src="<?php echo get_template_directory_uri();?>/assets/img/images/pullover.png" alt="">
                <h3 class="catalog__category">Свитеры</h3>
            </div>
            <div class="catalog__card ID__3">
                <img class="catalog__img" src="<?php echo get_template_directory_uri();?>/assets/img/images/jacket.png" alt="">
                <h3 class="catalog__category">Куртки</h3>
            </div>
            <div class="catalog__card ID__4">
                <img class="catalog__img" src="<?php echo get_template_directory_uri();?>/assets/img/images/pullover.png" alt="">
                <h3 class="catalog__category">Футболки</h3>
            </div>
        </div>
    </section>

    <section class="contacts" id="contacts" title="contacts">
        <div class="container contacts__container">
            <iframe class="contacts__map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4281.150862033062!2d34.29754461086305!3d55.20153659256962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46cbebe718a21381%3A0x9be80a4e4bd4e85b!2z0YPQuy4gMjUg0J7QutGC0Y__QsdGA0Y8sIDI4LCDQktGP0LfRjNC80LAsINCh0LzQvtC70LXQvdGB0LrQsNGPINC-0LHQuy4sINCg0L7RgdGB0LjRjywgMjE1MTEw!5e1!3m2!1sru!2s!4v1665409256364!5m2!1sru!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div class="contacts__right-content">
                <h2 class="title contacts__title">Контакты</h2>
                <p class="contacts__work-time">Время работы<br>
                    Пн.-Сб. 9:00-20:00;<br>
                    Вс. 9:00-18:00.</p>
                <p class="contacts__address">г.Вязьма<br>
                    ул.25 Октября, д.28.</p>

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