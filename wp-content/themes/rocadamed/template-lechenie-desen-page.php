<!-- 
    Template name: Страница лечение дёсен
-->
<?php
get_header();
?>

    <section class="section service">
            <div class="container">
                <div class="breadcreams">
                    <a href="/" class="breadcreams__link">Главная /</a>
                    <a href="/uslugi" class="breadcreams__link">Услуги /</a>
                    <a class="breadcreams__link breadcreams__link--not">Лечение десен</a>
                </div>
                <h1 class="title title--service">Лечение десен</h1>
                <div class="specialists__text">
                    <div class="specialists__text-left">
                        <svg class="quotes quotes-blue">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                        </svg>
                    </div>
                   <div><?php echo $redux_demo['lechenie-desen-frist-text'] ?></div>
                </div>
                <div class="service__btns">
                    <div class="hero-btn sign-up">КОНСУЛЬТАЦИЯ</div>
                    <a href="/ceny#paradontologia" class="service-btn">ЦЕНЫ</a>
                    <a href="#doctors" class="service-btn scroll-btn">ВРАЧИ</a>
                </div>
            </div>
        </section>
        <section id="doctors" class="section doctors">
            <div class="container">
                <h2 class="section-title-s section-title-s-mb-50"><?php echo $redux_demo['lechenie-desen-second-title'] ?></h2>
                <div class="doctors__content">
                    <div class="doctors__col">
                        <div class="specialists__text">
                            <div class="specialists__text-left">
                                <svg class="quotes quotes-blue">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                                </svg>
                            </div>
                           <div>
                               <p><?php echo $redux_demo['lechenie-desen-second-text'] ?></p>
                               <div class="service__btns">
                                <a href="#reviews" class="service-btn service-btn_ml_0 scroll-btn">НАШИ РАБОТЫ</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="doctors__col">
                        <div class="doctors-slider">
                            <ul class="doctors-slider__list">
                                <li class="doctors-slider__item">
                                    <div class="doctors-slider__content">
                                        <div class="doctors-slider__content-left">
                                            <div class="doctors-slider__ava">
                                                <img src="<?php echo get_template_directory_uri() ?>/imgs/pictures/small_img_img_doctors_1_3.jpg" alt="" class="doctors-slider__img">
                                            </div>
                                        </div>
                                       <div class="doctor__desc">
                                            <div class="doctors-slider__name">Мустакимова Резеда Фаритовна</div>
                                            <div class="doctors-slider-text">к.м.н.</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="slider-buttons slider-buttons--doctors-slider">
                                <div style='background-image: url(<?php echo get_template_directory_uri() ?>/svg/icons/arrow.svg);' class="slider-button slider-button-doctors-prev"></div>
                                <div style='background-image: url(<?php echo get_template_directory_uri() ?>/svg/icons/arrow.svg);' class="slider-button slider-button-doctors-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="reviews" class="section reviews">
            <div class="container">
                <h2 class="section-title-s section-title-s-mb-50"><?php echo $redux_demo['lechenie-desen-works-title'] ?></h2>
                <div class="reviews__content">
                    <div class="reviews__col">
                        <div class="specialists__text">
                            <div class="specialists__text-left">
                                <svg class="quotes quotes-blue">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                                </svg>
                            </div>
                           <div>
                               <div class="reviews-left-text"><?php echo $redux_demo['lechenie-desen-works-text'] ?></div>
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
                                            <div class="reviews-slider__title">Пациентка Д. операция закрытия рецессии, с последующим восстановлением коронкой.</div>
                                            <div class="reviews-slider__row">
                                                <div class="reviews-slider__col">
                                                    <div>Срок лечения</div>
                                                    <div>1 визит</div>
                                                </div>
                                                <div class="reviews-slider__col">
                                                    <div>Сумма лечения</div>
                                                    <div>7 000 руб.</div>
                                                </div>
                                            </div>
                                            <div class="reviews-slider__photos">
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/lechenie-desen/before.jpg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-desen/before.jpg" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/lechenie-desen/after.jpg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-desen/after.jpg" alt="" class="reviews-slider__img">
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
                                            <div class="reviews-slider__title">Пациент Н восстановление костной ткани через 1 год после пародонтологического лечения.</div>
                                            <div class="reviews-slider__row">
                                                <div class="reviews-slider__col">
                                                    <div>Срок лечения</div>
                                                    <div>1 визит</div>
                                                </div>
                                                <div class="reviews-slider__col">
                                                    <div>Сумма лечения</div>
                                                    <div>2 500 руб.</div>
                                                </div>
                                            </div>
                                            <div class="reviews-slider__photos">
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/lechenie-desen/PRE^PAN^R^TATYANA_MAMLEEVA^20110531^000.jpg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-desen/PRE^PAN^R^TATYANA_MAMLEEVA^20110531^000.jpg" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/lechenie-desen/PRE^PAN^R^TATYANA_MAMLEEVA^20170215^000.jpg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-desen/PRE^PAN^R^TATYANA_MAMLEEVA^20170215^000.jpg" alt="" class="reviews-slider__img">
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
                                            <div class="reviews-slider__title">Пациентка Р. восстановление костной ткани через 1 год после пародонтологического лечения.</div>
                                            <div class="reviews-slider__row">
                                                <div class="reviews-slider__col">
                                                    <div>Срок лечения</div>
                                                    <div>1 визит</div>
                                                </div>
                                                <div class="reviews-slider__col">
                                                    <div>Сумма лечения</div>
                                                    <div>5 000 руб.</div>
                                                </div>
                                            </div>
                                            <div class="reviews-slider__photos">
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/lechenie-desen/1.jpg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-desen/1.jpg" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/lechenie-desen/2.jpg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-desen/2.jpg" alt="" class="reviews-slider__img">
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
                <div class="section-title-s">Почему нужно лечить болезни десен:</div>
               <a href="#advice" class="reviews__link reviews__link--warranty scroll-btn ml-0">КАК УХАЖИВАТЬ ЗА ДЕСНАМИ</a>
                <div class="implantation">
                    <ul class="implantation__list">
                        <li class="implantation__item">
                            <div class="implantation__num"><span>1.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">Воспаление десен протекает безболезненно, и зачастую к врачу обращаются на этапе, когда возможно лишь удаление зубов</div>
                            </div>
                        </li>
                        <li class="implantation__item">
                            <div class="implantation__num"><span>2.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">Бактерии, вызывающие воспаление десен способны негативно влиять на гипертоническую болезнь, уровень сахара в крови, сердце.</div>
                            </div>
                        </li>
                        <li class="implantation__item">
                            <div class="implantation__num"><span>3.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">В отличии от кариеса воспаление десен способно привести к потери не только зубов, но и имплантатов.</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section reviews">
            <div class="container">
                <div class="section-title-s">Вам нужен пародонтолог если:</div>
                <div class="implantation">
                    <ul class="implantation__list">
                        <li class="implantation__item">
                            <div class="implantation__num"><span>1.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">Вы периодически определяете кровоточивость десен при чистке или приеме пищи</div>
                            </div>
                        </li>
                        <li class="implantation__item">
                            <div class="implantation__num"><span>2.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">У Вас появилось ощущение подвижности зубов</div>
                            </div>
                        </li>
                        <li class="implantation__item">
                            <div class="implantation__num"><span>3.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">У Вас определяется оголение корней зубов</div>
                            </div>
                        </li>
                        <li class="implantation__item">
                            <div class="implantation__num"><span>4.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">Вы ощущаете боль в деснах при приеме пищи</div>
                            </div>
                        </li>
                        <li class="implantation__item">
                            <div class="implantation__num"><span>5.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">У Вас определяется оголение корней зубов</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="advice" class="section advice advice--white">
            <div class="container">
                <h2 class="section-title-s section-title-s_white"><?php echo $redux_demo['desen-doctor-recomendation-title'] ?></h2>
                <div class="advice__text">
                    <div class="advice__col">
                        <svg class="quotes">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                        </svg>
                    </div>
                    <div class="advice__col">
                        <p><?php echo $redux_demo['lechenie-desen-doctor-recomendation-text'] ?></p>
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
                    <div class="doctor-advice__title">При первых признаках заболевания не откладывайте визит к врачу. Помните, что решать любую проблему надо на начальной стадии. При обнаружении следующих симптомов обязательно посетите стоматолога:</div>
                    <ul class="doctor-advice__list">
                        <li class="doctor-advice__item">
                            <div class="doctor-advice__icon">
                                <svg class="check">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="docot-advice__text">Отёчность и покраснение слизистой</div>
                        </li>
                        <li class="doctor-advice__item">
                            <div class="doctor-advice__icon">
                                <svg class="check">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="docot-advice__text">Кровоточивость при чистке зубов</div>
                        </li>
                        <li class="doctor-advice__item">
                            <div class="doctor-advice__icon">
                                <svg class="check">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="docot-advice__text">Неприятный запах изо рта</div>
                        </li>
                        <li class="doctor-advice__item">
                            <div class="doctor-advice__icon">
                                <svg class="check">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="docot-advice__text">Дискомфорт при употреблении пищи</div>
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