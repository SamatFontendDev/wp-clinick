<!-- 
    Template name: Страница виниры
-->
<?php
get_header();
?>
    <section class="section service">
            <div class="container">
                <div class="breadcreams">
                    <a href="/" class="breadcreams__link">Главная /</a>
                    <a href="/uslugi" class="breadcreams__link">Услуги /</a>
                    <a class="breadcreams__link breadcreams__link--not">Виниры</a>
                </div>
                <h1 class="title title--service">Виниры</h1>
                <div class="specialists__text">
                    <div class="specialists__text-left">
                        <svg class="quotes quotes-blue">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                        </svg>
                    </div>
                    <div><?php echo $redux_demo['viniri-frist-text'] ?></div>
                </div>
                <div class="service__btns">
                    <div class="hero-btn sign-up">КОНСУЛЬТАЦИЯ</div>
                    <a href="/uslugi#ortoedia" class="service-btn">ЦЕНЫ</a>
                    <a href="#doctors" class="service-btn scroll-btn">ВРАЧИ</a>
                </div>
            </div>
        </section>
        <section id="doctors" class="section doctors">
            <div class="container">
                <h2 class="section-title-s section-title-s-mb-50"><?php echo $redux_demo['viniri-second-title'] ?></h2>
                <div class="doctors__content">
                    <div class="doctors__col">
                        <div class="specialists__text">
                            <div class="specialists__text-left">
                                <svg class="quotes quotes-blue">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                                </svg>
                            </div>
                           <div>
                               <p><?php echo $redux_demo['viniri-second-text'] ?></p>
                               <div class="service__btns">
                                <a href="#reviews" class="service-btn service-btn_ml_0 scroll-btn">НАШИ РАБОТЫ</a>
                                <a href="#stages" class="service-btn scroll-btn">ЭТАПЫ</a>
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
                                            <div class="doctors-slider__name">Смирнов Алексей Евгеньевич</div>
                                            <div class="doctors-slider-text">врач стоматолог – хирург</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="doctors-slider__item">
                                    <div class="doctors-slider__content">
                                        <div class="doctors-slider__content-left">
                                            <div class="doctors-slider__ava">
                                                <img src="<?php echo get_template_directory_uri() ?>/imgs/pictures/small_img_img_doctors_1_3.jpg" alt="" class="doctors-slider__img">
                                            </div>
                                        </div>
                                       <div class="doctor__desc">
                                            <div class="doctors-slider__name">Смирнов Алексей Евгеньевич</div>
                                            <div class="doctors-slider-text">врач стоматолог – хирург</div>
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
                <div class="section-title-s section-title-s-mb-50"><?php echo $redux_demo['viniri-works-title'] ?></div>
                <div class="reviews__content">
                    <div class="reviews__col">
                        <div class="specialists__text">
                            <div class="specialists__text-left">
                                <svg class="quotes quotes-blue">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                                </svg>
                            </div>
                           <div>
                               <div class="reviews-left-text"><?php echo $redux_demo['viniri-works-text'] ?></div>
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
                                            <div class="reviews-slider__title">Пациент 50 лет, сделаны керамические виниры 8 шт.</div>
                                            <div class="reviews-slider__row">
                                                <div class="reviews-slider__col">
                                                    <div>Срок лечения</div>
                                                    <div>3 взита</div>
                                                </div>
                                                <div class="reviews-slider__col">
                                                    <div>Сумма лечения</div>
                                                    <div>145 000 руб.</div>
                                                </div>
                                            </div>
                                            <div class="reviews-slider__photos">
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/viniri/1.jpeg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/viniri/1.jpeg" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="/<?php echo get_template_directory_uri() ?>imgs/viniri/2.jpeg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/viniri/2.jpeg" alt="" class="reviews-slider__img">
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
                                            <div class="reviews-slider__title">Пациентка 30 лет, 8 виниров.</div>
                                            <div class="reviews-slider__row">
                                                <div class="reviews-slider__col">
                                                    <div>Срок лечения</div>
                                                    <div>4 визита</div>
                                                </div>
                                                <div class="reviews-slider__col">
                                                    <div>Сумма лечения</div>
                                                    <div>145 000 руб.</div>
                                                </div>
                                            </div>
                                            <div class="reviews-slider__photos">
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/viniri/3.jpeg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/viniri/3.jpeg" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/viniri/4.jpeg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/viniri/4.jpeg" alt="" class="reviews-slider__img">
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
                                            <div class="reviews-slider__title">Пациентка 60 лет, 10 виниров.</div>
                                            <div class="reviews-slider__row">
                                                <div class="reviews-slider__col">
                                                    <div>Срок лечения</div>
                                                    <div>3 визита</div>
                                                </div>
                                                <div class="reviews-slider__col">
                                                    <div>Сумма лечения</div>
                                                    <div>180 000 руб.</div>
                                                </div>
                                            </div>
                                            <div class="reviews-slider__photos">
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/viniri/5.jpeg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/viniri/5.jpeg" alt="" class="reviews-slider__img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="reviews-slider__photo-wrap">
                                                    <div class="reviews-slider__photo">
                                                        <a href="<?php echo get_template_directory_uri() ?>/imgs/viniri/6.jpeg" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/imgs/viniri/6.jpeg" alt="" class="reviews-slider__img">
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
        <section id="stages" class="section stages">
            <div class="container">
                <div class="section-title-s section-title-s-mb-50">Основные этапы установки виниров</div>
                <ul class="stages__list">
                    <li class="stages__item">
                        <div class="stage">
                           <div class="stage-left">
                                <div class="stage__pic">
                                    <img src="<?php echo get_template_directory_uri() ?>/imgs/pictures/impl-steps_1.jpg" alt="" class="stage__img">
                                </div>
                            </div>
                            <div class="stage__desc">
                                <div class="stage__title">Консультация и планирование </div>
                                <div class="stage__text">Консультирование, планирование, фотографирование, обсуждение формы и цвета будущей улыбки.</div>
                            </div>
                        </div>
                    </li>
                    <li class="stages__item">
                        <div class="stage">
                            <div class="stage-left">
                                <div class="stage__pic">
                                    <img src="<?php echo get_template_directory_uri() ?>/imgs/pictures/viniri-2.jpg" alt="" class="stage__img">
                                </div>
                            </div>
                            <div class="stage__desc">
                                <div class="stage__title">Примерка улыбки.</div>
                                <div class="stage__text">Изготавливаем для Вас макет будущей улыбки и примеряем его во рту.</div>
                            </div>
                        </div>
                    </li>
                    <li class="stages__item">
                        <div class="stage">
                            <div class="stage-left">
                                <div class="stage__pic">
                                    <img src="<?php echo get_template_directory_uri() ?>/imgs/pictures/viniri-3.jpg" alt="" class="stage__img">
                                </div>
                            </div>
                            <div class="stage__desc">
                                <div class="stage__title">Подготовка зубов</div>
                                <div class="stage__text">Препарируем зубы, снимаем оттиски, отправляем работу в лабораторию.</div>
                            </div>
                        </div>
                    </li>
                    <li class="stages__item">
                        <div class="stage">
                            <div class="stage-left">
                                <div class="stage__pic">
                                    <img src="<?php echo get_template_directory_uri() ?>/imgs/pictures/viniri-4.jpg" alt="" class="stage__img">
                                </div>
                            </div>
                            <div class="stage__desc">
                                <div class="stage__title">Радуемся результату.</div>
                                <div class="stage__text">Примерно через неделю после подготовки зубов мы сдаём работу, а вы счастливые радуетесь новой улыбке.</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section id="warranty" class="section warranty">
            <div class="container">
                <div class="section-title-s section-title-s-mb-50">4 преимущества виниров</div>
                <div class="implantation">
                    <ul class="implantation__list">
                        <li class="implantation__item">
                            <div class="implantation__num"><span>1.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">Благодаря винирам можно придать эстетичный вид зубам, чья форма или цвет были нарушены - по самым разным причинам (от вредных привычек до возрастного фактора).</div>
                            </div>
                        </li>
                        <li class="implantation__item">
                            <div class="implantation__num"><span>2.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">Виниры устранят такие дефекты, как потемнение пломбы и запломбированных каналов, флюороз, тетрациклиновые зубы.</div>
                            </div>
                        </li>
                        <li class="implantation__item">
                            <div class="implantation__num"><span>3.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">Установка виниров поможет, если отбеливание не принесло желаемых результатов.</div>
                            </div>
                        </li>
                        <li class="implantation__item">
                            <div class="implantation__num"><span>4.</span></div>
                            <div class="implantation__text">
                                <div class="implantation__title">Также виниры позволяют убрать промежутки между зубами и можно скорректировать неровность зубного ряда без лечения брекетами. </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="advice" class="section advice advice--white">
            <div class="container">
                <div class="section-title-s section-title-s_white"><?php echo $redux_demo['viniri-doctor-recomendation-title'] ?></div>
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
                    <ul class="doctor-advice__list">
                        <li class="doctor-advice__item">
                            <div class="doctor-advice__icon">
                                <svg class="check">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="docot-advice__text">Проф осмотр и проф гигиена у врача стоматолога  каждые 6 месяцев.</div>
                        </li>
                        <li class="doctor-advice__item">
                            <div class="doctor-advice__icon">
                                <svg class="check">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="docot-advice__text">Ежедневное поддержание хорошей гигиены полости рта (зубная щетка, паста, ополаскиватель, зубная нить, ирригатор).</div>
                        </li>
                        <li class="doctor-advice__item">
                            <div class="doctor-advice__icon">
                                <svg class="check">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="docot-advice__text">Соблюдение рекомендаций врача.</div>
                        </li>
                        <li class="doctor-advice__item">
                            <div class="doctor-advice__icon">
                                <svg class="check">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="docot-advice__text">Не рекомендуется откусывание сверхтвёрдой пищи.</div>
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