<!-- 
    Template name: Страница детская стоматология
-->
<?php
get_header();
?>

<section class="section service">
            <div class="container">
                <div class="breadcreams">
                    <a href="/" class="breadcreams__link">Главная /</a>
                    <a href="/uslugi" class="breadcreams__link">Услуги /</a>
                    <a class="breadcreams__link breadcreams__link--not">Детская стоматология</a>
                </div>
                <div class="title title--service">Детская стоматология</div>
                <div class="specialists__text">
                    <div class="specialists__text-left">
                        <svg class="quotes quotes-blue">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                        </svg>
                    </div>
                   <div> <?php echo $redux_demo['detskaya-frist-text'] ?></div>
                </div>
                <div class="service__btns">
                    <div class="hero-btn sign-up">КОНСУЛЬТАЦИЯ</div>
                    <a href="/ceny#detskaya" class="service-btn scroll-btn">ЦЕНЫ</a>
                </div>
            </div>
        </section>
        <section id="reviews" class="section reviews">
            <div class="container">
                <div class="section-title-s section-title-s-mb-50"><?php echo $redux_demo['detskaya-works-title'] ?></div>
                <div class="reviews__content">
                    <div class="reviews__col">
                        <div class="specialists__text">
                            <div class="specialists__text-left">
                                <svg class="quotes quotes-blue">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                                </svg>
                            </div>
                           <div>
                               <div class="reviews-left-text">
                               <?php echo $redux_demo['detskaya-works-text'] ?>
                               </div>
                           </div>
                        </div>
                        <div class="doctors-slider__content doctors-slider__content--pl">
                            <div class="doctors-slider__content-left">
                                <div class="doctors-slider__ava doctors-slider__ava--small">
                                    <img src="<?php echo get_template_directory_uri() ?>/imgs/pictures/small_img_img_doctors_1_3.jpg" alt="" class="doctors-slider__img">
                                </div>
                            </div>
                           <div class="doctor__desc">
                                <div class="doctors-slider__name">Смирнов Алексей Евгеньевич</div>
                                <div class="doctors-slider-text">врач стоматолог – хирург</div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__col">
                        <div class="reviews-slider">
                            <ul class="reviews-slider__list">
                                <li class="reviews-slider__item">
                                    <div class="reviews-slider__content">
                                        <div class="reviews-slider__ava">
                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/pictures/small_img_img_doctors_1_3.jpg" alt="" class="reviews-slider__img">
                                        </div>
                                        <div class="reviews-slider__info">
                                            <div class="reviews-slider__title">Пациент М. 7 лет. Профессиональная чистка зубов.</div>
                                            <div class="reviews-slider__row">
                                                <div class="reviews-slider__col">
                                                    <div>Срок лечения</div>
                                                    <div>1 визит</div>
                                                </div>
                                                <div class="reviews-slider__col">
                                                    <div>Сумма лечения</div>
                                                    <div>1 320 руб.</div>
                                                </div>
                                            </div>
                                            <div class="reviews-slider__photos">
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/detaskaya-stom/before.jpg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/detaskaya-stom/before.jpg" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/detaskaya-stom/after.jpg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/detaskaya-stom/after.jpg" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </li>
                                
                                
                              
                                </li>
                               
                            </ul>
                        </div>
                        <div class="slider-buttons slider-buttons--reviews">
                            <div class="slider-button slider-button--reviews-prev"></div>
                            <div class="slider-button slider-button--reviews-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="warranty" class="section warranty">
            <div class="container">
                <div class="section-title-s"> <?php echo $redux_demo['detskaya-doctor-recomendation-title'] ?></div>
                <div class="implantation">
                    <ul class="implantation__list">
                        <li class="implantation__item">
                            <div class="implantation__num"><span>1.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">Гигиена полости рта
                                    Это и домашняя ежедневная чистка зубов, и профессиональная у врача-стоматолога на приеме. В домашних условиях возможно очищение только мягкого зубного налета, а с помощью профессиональной  чистки  мы избавляемся от зубного камня и пигментированного налета.
                                    </div>
                            </div>
                        </li>
                        <li class="implantation__item">
                            <div class="implantation__num"><span>2.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">Герметизация фиссур
                                    Это запечатывание  анатомических углублений (фиссур)  на жевательной поверхности зуба фторсодержащим материалом.
                                    Процедура необходима для защиты постоянных жевательных зубов от возникновения кариеса. Герметизацию фиссур нужно проводить в первые месяцы прорезывания зуба.
                                    </div>
                            </div>
                        </li>
                    </ul>
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
