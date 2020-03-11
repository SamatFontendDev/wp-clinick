<!-- 
    Template name: Страница о нас 
-->
<?php
get_header();
?>
 <section class="section about">
            <div class="container">
                <div class="breadcreams">
                    <a href="/" class="breadcreams__link">Главная /</a>
                    <a class="breadcreams__link breadcreams__link--not">О нас</a>
                </div>
                <h1 class="section-title section-title--tal"><?php echo $redux_demo['about-title'] ?></h1>
                <div class="specialists__text">
                    <div class="specialists__text-left">
                        <svg class="quotes quotes-blue">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                        </svg>
                    </div>
                   <div><?php echo $redux_demo['about-first-text'] ?></div>
                </div>
            </div>
        </section>
        <section class="section about-slider">
            <ul class="about-slider__list">
                <li class="about-slider__item">
                    <div class="about-slider__content">
                        <a href="<?php echo get_template_directory_uri() ?>/imgs/o-nas/1.jpeg" data-fancybox="gallery">
                            <img src="<?php echo get_template_directory_uri() ?>/imgs/o-nas/1.jpeg" alt="" class="about-slider__img">
                        </a>
                    </div>
                </li>
                <li class="about-slider__item">
                    <div class="about-slider__content">
                        <a href="<?php echo get_template_directory_uri() ?>/imgs/o-nas/2.jpeg" data-fancybox="gallery">
                            <img src="<?php echo get_template_directory_uri() ?>/imgs/o-nas/2.jpeg" alt="" class="about-slider__img">
                        </a>
                    </div>
                </li>
                <li class="about-slider__item">
                    <div class="about-slider__content">
                        <a href="<?php echo get_template_directory_uri() ?>/imgs/o-nas/3.jpeg" data-fancybox="gallery">
                            <img src="<?php echo get_template_directory_uri() ?>/imgs/o-nas/3.jpeg" alt="" class="about-slider__img">
                        </a>
                    </div>
                </li>
                <li class="about-slider__item">
                    <div class="about-slider__content">
                        <a href="<?php echo get_template_directory_uri() ?>/imgs/o-nas/4.jpeg" data-fancybox="gallery">
                            <img src="<?php echo get_template_directory_uri() ?>/imgs/o-nas/4.jpeg" alt="" class="about-slider__img">
                        </a>
                    </div>
                </li>
                <li class="about-slider__item">
                    <div class="about-slider__content">
                        <a href="<?php echo get_template_directory_uri() ?>/imgs/o-nas/5.jpeg" data-fancybox="gallery">
                            <img src="<?php echo get_template_directory_uri() ?>/imgs/o-nas/5.jpeg" alt="" class="about-slider__img">
                        </a>
                    </div>
                </li>
                <li class="about-slider__item">
                    <div class="about-slider__content">
                        <a href="<?php echo get_template_directory_uri() ?>/imgs/o-nas/6.jpeg" data-fancybox="gallery">
                            <img src="<?php echo get_template_directory_uri() ?>/imgs/o-nas/6.jpeg" alt="" class="about-slider__img">
                        </a>
                    </div>
                </li>
                <li class="about-slider__item">
                    <div class="about-slider__content">
                        <a href="<?php echo get_template_directory_uri() ?>/imgs/o-nas/7.jpeg" data-fancybox="gallery">
                            <img src="<?php echo get_template_directory_uri() ?>/imgs/o-nas/7.jpeg" alt="" class="about-slider__img">
                        </a>
                    </div>
                </li>
                <li class="about-slider__item">
                    <div class="about-slider__content">
                        <a href="<?php echo get_template_directory_uri() ?>/imgs/o-nas/8.jpeg" data-fancybox="gallery">
                            <img src="<?php echo get_template_directory_uri() ?>/imgs/o-nas/8.jpeg" alt="" class="about-slider__img">
                        </a>
                    </div>
                </li>
            </ul>
        </section>
        <section class="section why-we">
            <div class="container">
                <div class="section-title-s section-title-s-mb-50">Почему стоит довериться именно нашей клинике?</div>
                <div class="advantages-icons">
                    <ul class="advantages-icons__list">
                        <li class="icons__item">
                            <div class="icons__item-left">
                                  <svg class="advantages-icon">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#exp"></use>
                                </svg>
                            </div>
                            <div class="advantages-icons__text">
                                <div class="advantages-icons__subtittle">Мы работаем с 2005 года</div>
                                <p>Все наши специалисты — профессионалы своего дела. Гарантируем, вам будет оказана квалифицированная помощь.</p>
                            </div>
                        </li>
                        <li class="icons__item">
                            <div class="icons__item-left">
                                <svg class="advantages-icon">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#high"></use>
                                </svg>
                            </div>
                            <div class="advantages-icons__text">
                                <div class="advantages-icons__subtittle">Высокое качество лечения</div>
                                <p>Используем лучшие материалы и оборудование. В качестве работы вы можете убедиться, ознакомившись с отзывами.</p>
                            </div>
                        </li>
                        <li class="icons__item">
                            <div class="icons__item-left">
                                <svg class="advantages-icon advantages-icon--clock">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#clock"></use>
                                </svg>
                            </div>
                           <div class="advantages-icons__text">
                                <div class="advantages-icons__subtittle">Консультация всех специалистов одномоментно!</div>
                                <p>В нашей клинике есть возможность получить консультацию всех специалистов за один визит.</p>
                            </div>
                        </li>
                        <li class="icons__item">
                            <div class="icons__item-left">
                                <svg class="advantages-icon">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#cazy"></use>
                                </svg>
                            </div>
                            <div class="advantages-icons__text">
                                <div class="advantages-icons__subtittle">Тёплое отношение</div>
                                <p>Вам больше не нужно бояться стоматологов. Наши специалисты гарантируют комфортное и безболезненное лечение.</p>
                            </div>
                        </li>
                        <li class="icons__item">
                            <div class="icons__item-left">
                                <svg class="advantages-icon">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#way"></use>
                                </svg>
                            </div>
                            <div class="advantages-icons__text">
                                <div class="advantages-icons__subtittle">Удобное расположение</div>
                                <p>Наша клиника находится в самом центре города, в 2 минутах ходьбы от ст.метро "Площадь Тукая"  Мы всегда рады вас видеть!</p>
                            </div>
                        </li>
                        <li class="icons__item">
                            <div class="icons__item-left">
                                <svg class="advantages-icon">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#online"></use>
                                </svg>
                            </div>
                            <div class="advantages-icons__text">
                                <div class="advantages-icons__subtittle">Сервис онлайн-записи</div>
                                <p>Теперь вы можете записаться к врачу быстро и легко. Просто выберите удобное время и оставьте заявку на приём!</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section docs">
            <div class="container">
                <div class="section-title-s">Свидетельства и лицензии</div>
                <div class="docs-slier">
                    <ul class="docs-slider__list">
                        <li class="docs-slider__item">
                            <div class="docs-slider__content">
                                <a href="<?php echo get_template_directory_uri() ?>/imgs/docs/inn.jpg" data-fancybox="gallery">
                                    <img src="<?php echo get_template_directory_uri() ?>/imgs/docs/inn.jpg" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="docs-slider__item">
                            <div class="docs-slider__content">
                                <a href="<?php echo get_template_directory_uri() ?>/imgs/docs/meditsinskaya-deyatelnost-2.jpg" data-fancybox="gallery">
                                    <img src="<?php echo get_template_directory_uri() ?>/imgs/docs/meditsinskaya-deyatelnost-2.jpg" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="docs-slider__item">
                            <div class="docs-slider__content">
                                <a href="<?php echo get_template_directory_uri() ?>/imgs/docs/meditsinskaya-deyatelnost.jpg" data-fancybox="gallery">
                                    <img src="<?php echo get_template_directory_uri() ?>/imgs/docs/meditsinskaya-deyatelnost.jpg" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="docs-slider__item">
                            <div class="docs-slider__content">
                                <a href="<?php echo get_template_directory_uri() ?>/imgs/docs/ogrn.jpg" data-fancybox="gallery">
                                    <img src="<?php echo get_template_directory_uri() ?>/imgs/docs/ogrn.jpg" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="docs-slider__item">
                            <div class="docs-slider__content">
                                <a href="<?php echo get_template_directory_uri() ?>/imgs/docs/prilozhenie-meditsinskaya-deyatelnost.jpg" data-fancybox="gallery">
                                    <img src="<?php echo get_template_directory_uri() ?>/imgs/docs/prilozhenie-meditsinskaya-deyatelnost.jpg" alt="">
                                </a>
                            </div>
                        </li>
                    </ul>
                    <div class="slider-buttons slider-buttons--about">
                        <div style='background-image: url(<?php echo get_template_directory_uri() ?>/svg/icons/arrow.svg);' class="slider-button slider-buttons--about-prev"></div>
                        <div style='background-image: url(<?php echo get_template_directory_uri() ?>/svg/icons/arrow.svg);' class="slider-button slider-buttons--about-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-form section-form_pb_100 pb_330">
            <div class="container">
                <div class="form-wrap">
                    <form action="#" class="form">
                        <div class="form__title">Всегда рады ответить<br> на ваши вопросы</div>
                        <div class="form-row">
                            <input placeholder="Ваше имя" type="text" class="input">
                        </div>
                        <div class="form-row">
                            <input placeholder="Контактный телефон" type="text" class="input input-tel">
                        </div>
                        <!-- <div class="form-row">
                            <textarea placeholder="Задайте вопрос" class="input textarea" name="question" id=""></textarea>
                        </div> -->
                        <div class="form-buttons">
                            <div class="hero-btn hero-btn_mr-10">ОТПРАВИТЬ</div>
                            <div class="consent">
                                <input checked='true' class="checkbox" id="check" type="checkbox">
                                <div class="label-wrap">
                                    <label class="label-check" for="check">
                                        <div class="label-col">
                                            <div class="label-box">
                                                <svg class="checkbox-svg">
                                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#checkbox"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="label-text">
                                            Я принимаю <a href="#" class="label-link">условия передачи информации</a>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
<?php
get_footer();
?>
 