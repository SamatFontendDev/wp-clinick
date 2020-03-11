<!-- 
    Template name: Лечение зубов
-->
<?php
get_header();
?>

    <section class="section service">
            <div class="container">
                <div class="breadcreams">
                    <a href="/" class="breadcreams__link">Главная /</a>
                    <a href="/uslugi" class="breadcreams__link">Услуги /</a>
                    <a class="breadcreams__link breadcreams__link--not">Имплантация</a>
                </div>
                <h1 class="title title--service">Лечение зубов</h1>
                <div class="specialists__text">
                    <div class="specialists__text-left">
                        <svg class="quotes quotes-blue">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                        </svg>
                    </div>
                   <div><?php echo $redux_demo['lechenie-zubov-frist-text'] ?></div>
                </div>
                <div class="service__btns">
                    <div class="hero-btn sign-up">КОНСУЛЬТАЦИЯ</div>
                    <a target="_blank" href="/ceny#vostanovlenie-zubov" class="service-btn">ЦЕНЫ</a>
                </div>
            </div>
        </section>
        <section id="reviews" class="section reviews">
            <div class="container">
                <h2 class="section-title-s section-title-s-mb-50"><?php echo $redux_demo['lechenie-zubov-works-title'] ?></h2>
                <div class="reviews__content">
                    <div class="reviews__col">
                        <div class="specialists__text">
                            <div class="specialists__text-left">
                                <svg class="quotes quotes-blue">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                                </svg>
                            </div>
                           <div>
                               <div class="reviews-left-text"><?php echo $redux_demo['lechenie-zubov-works-text'] ?></div>
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
                                            <div class="reviews-slider__title">Пациент Д. 45 лет, реставрация зуба 3.6 с анестезией.</div>
                                            <div class="reviews-slider__row">
                                                <div class="reviews-slider__col">
                                                    <div>Срок лечения</div>
                                                    <div>1 визит</div>
                                                </div>
                                                <div class="reviews-slider__col">
                                                    <div>Сумма лечения</div>
                                                    <div>5 100 руб.</div>
                                                </div>
                                            </div>
                                            <div class="reviews-slider__photos">
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/IMG_8966.JPG" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/IMG_8966.JPG" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/IMG_8967.JPG" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/IMG_8967.JPG" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/IMG_8972.JPG" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/IMG_8972.JPG" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="reviews-slider__item">
                                    <div class="reviews-slider__content">
                                        <div class="reviews-slider__ava">
                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/pictures/small_img_img_doctors_1_3.jpg" alt="" class="reviews-slider__img">
                                        </div>
                                        <div class="reviews-slider__info">
                                            <div class="reviews-slider__title">Пациентка Н. 35 лет, реставрация зуба 2.5 с анестезией.</div>
                                            <div class="reviews-slider__row">
                                                <div class="reviews-slider__col">
                                                    <div>Срок лечения</div>
                                                    <div>1 визит</div>
                                                </div>
                                                <div class="reviews-slider__col">
                                                    <div>Сумма лечения</div>
                                                    <div>6 000 руб.</div>
                                                </div>
                                            </div>
                                            <div class="reviews-slider__photos">
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/IMG_9010.JPG" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/IMG_9010.JPG" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/IMG_9011.JPG" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/IMG_9011.JPG" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/IMG_9016.JPG" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/IMG_9016.JPG" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="reviews-slider__item">
                                    <div class="reviews-slider__content">
                                        <div class="reviews-slider__ava">
                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/pictures/small_img_img_doctors_1_3.jpg" alt="" class="reviews-slider__img">
                                        </div>
                                        <div class="reviews-slider__info">
                                            <div class="reviews-slider__title">Пациентка М, 27лет. Лечение кариеса с анестезией.</div>
                                            <div class="reviews-slider__row">
                                                <div class="reviews-slider__col">
                                                    <div>Срок лечения</div>
                                                    <div>1 визит</div>
                                                </div>
                                                <div class="reviews-slider__col">
                                                    <div>Сумма лечения</div>
                                                    <div>4 500 руб.</div>
                                                </div>
                                            </div>
                                            <div class="reviews-slider__photos">
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/kar1.JPG" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/kar1.JPG" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/kar2.jpg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/kar2.jpg" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                        <div class="slider-buttons slider-buttons--reviews">
                            <div style='background-image: url(<?php echo get_template_directory_uri() ?>/svg/icons/arrow.svg);' class="slider-button slider-button--reviews-prev"></div>
                            <div style='background-image: url(<?php echo get_template_directory_uri() ?>/svg/icons/arrow.svg);' class="slider-button slider-button--reviews-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="warranty" class="section warranty">
            <div class="container">
                <div class="section-title-s section-title-s-mb-50"><?php echo $redux_demo['lechenie-zubov-third-title'] ?></div>
                <div class="specialists__text">
                    <div class="specialists__text-left">
                        <svg class="quotes quotes-blue">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                        </svg>
                    </div>
                   <div><?php echo $redux_demo['lechenie-zubov-third-text'] ?></div>
                </div>
                <div class="hero-btn sign-up hero-btn_mb_50">ЗАПИСАТЬСЯ НА ПРИЁМ</div>
                <div class="section-title-s section-title-s-mb-50">4 преимущества лечения у нас</div>
                <div class="implantation">
                    <ul class="implantation__list">
                        <li class="implantation__item">
                            <div class="implantation__num"><span>1.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">Точная диагностика</div>
                                <div class="implantation__desc">Компьютерная рентгенография и современный ортопантомограф позволяют нам выявить все заболевания полости рта</div>
                            </div>
                        </li>
                        <li class="implantation__item">
                            <div class="implantation__num"><span>2.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">Индивидуальные анестетики</div>
                                <div class="implantation__desc">Анестезия подбирается врачом в соответствии с возрастом пациента, полом, весом и клинической ситуацией</div>
                            </div>
                        </li>
                        <li class="implantation__item">
                            <div class="implantation__num"><span>3.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">Качественные пломбы</div>
                                <div class="implantation__desc">Применяем проверенные композитные материалы, которые идеально воссоздают анатомическую форму</div>
                            </div>
                        </li>
                        <li class="implantation__item">
                            <div class="implantation__num"><span>4.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">Современное оборудование</div>
                                <div class="implantation__desc">На стоматологических установках последнего поколения мы удаляем кариес с максимальным сохранением здоровых тканей</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="advice" class="section advice advice--white">
            <div class="container">
                <div class="section-title-s section-title-s_white"><?php echo $redux_demo['lechenie-zubov-doctor-recomendation-title'] ?></div>
                <div class="advice__text">
                    <div class="advice__col">
                        <svg class="quotes">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                        </svg>
                    </div>
                    <div class="advice__col">
                        <p><?php echo $redux_demo['lechenie-zubov-doctor-recomendation-text'] ?></p>
                    </div>
                </div>
                <div class="doctor">
                    <div class="doctor__pic">
                        <img src="<?php echo get_template_directory_uri() ?>/imgs/pictures/small_img_img_doctors_1_3.jpg" alt="" class="doctor__img">
                    </div>
                    <div class="doctor__desc">
                        <div class="doctor-name">Салеева Гульшат Тауфиковна</div>
                        <div class="doctor-prof">д.м.н, профессор,  врач стоматолог – ортопед высшей категории, заведующая кафедрой ортопедической стоматологии КГМУ.</div>
                    </div>
                </div>
                <div class="doctor-advice">
                    <div class="doctor-advice__title">Примерно у 90-95% пациентов стоматологий выявляют те или иные заболевания зубов. Предлагаем ознакомиться с тревожащими симптомами, при которых необходимо как можно скорее показаться врачу-стоматологу:</div>
                    <ul class="doctor-advice__list">
                        <li class="doctor-advice__item">
                            <div class="doctor-advice__icon">
                                <svg class="check">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="docot-advice__text">Дискомфорт при употреблении горячей или холодной пищи и напитков</div>
                        </li>
                        <li class="doctor-advice__item">
                            <div class="doctor-advice__icon">
                                <svg class="check">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="docot-advice__text">Болевые ощущения при жевании и надавливании на зуб или десну</div>
                        </li>
                        <li class="doctor-advice__item">
                            <div class="doctor-advice__icon">
                                <svg class="check">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="docot-advice__text">Появление на эмали пятен, чёрных точек или образование полости</div>
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