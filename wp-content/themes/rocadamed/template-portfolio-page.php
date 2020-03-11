<!-- 
    Template name: Страница о портфолио
-->
<?php
get_header();
?>
<section class="section portfolio pb_330">
            <div class="container">
                <div class="breadcreams">
                    <a href="/" class="breadcreams__link">Главная /</a>
                    <a class="breadcreams__link breadcreams__link--not">Портфолио</a>
                </div>
                <div class="section-title">Портфолио</div>
                <div class="specialists__text specialists__text_mb-80">
                    <div class="specialists__text-left">
                        <svg class="quotes quotes-blue">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                        </svg>
                    </div>
                   <div>Лучше всего о мастерстве наших врачей расскажет портфолио. Посмотрите фото до и после лечения, и оцените результаты!</div>
                </div>
                <div class="hero-btn sign-up hero-btn_mb_50">ЗАПИСАТЬСЯ НА ПРИЁМ</div>
                <div class="prices-btns-block prices-btns-block_mb_30">
                    <ul class="prices-btns-block__list">
                        <li class="prices-btns-block__item">
                            <a href="#lechenie-zubov" class="prices-btns-block__link scroll-btn">Лечение зубов</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#viniri" class="prices-btns-block__link scroll-btn">Виниры</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#ispravlenie-prikusa" class="prices-btns-block__link scroll-btn">Исправление прикуса</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#lechenie-zubov" class="prices-btns-block__link scroll-btn">Лечение зубов</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#lechenie-desen" class="prices-btns-block__link scroll-btn">Лечение десен</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#otbelivanie" class="prices-btns-block__link scroll-btn">Отбеливание</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#detskaya-stomatologia" class="prices-btns-block__link scroll-btn">Детская стоматология</a>
                        </li>
                        
                    </ul>
                </div>
                <ul class="portfolio__list">
                    <li id="lechenie-zubov" class="portfolio__item">
                        <div class="portfolio-content">
                            <div class="portfolio-content__col">
                                <div class="portfolio-content_left">
                                    <div class="portfolio-content__pic twentytwenty-container">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/1.jpg" alt="" class="portfolio-content__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/2.jpg" alt="" class="portfolio-content__img">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content__col">
                                <div class="portfolio-content__title">Лечение зубов</div>
                                <div class="portfolio-content__desc">Пациент Д. 45 лет, реставрация зуба 3.6 с анестезией.</div>
                                <div class="portfolio-content__row">
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Срок лечения:</div>
                                        <div class="portfolio-content__info">1 визит</div>
                                    </div>
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Сумма лечения:</div>
                                        <div class="portfolio-content__info">5 100 р.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="portfolio__item">
                        <div class="portfolio-content">
                            <div class="portfolio-content__col">
                                <div class="portfolio-content_left">
                                    <div class="portfolio-content__pic twentytwenty-container">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/kar2.jpg" alt="" class="portfolio-content__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-zubov/kar1.JPG" alt="" class="portfolio-content__img">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content__col">
                                <div class="portfolio-content__title">Лечение зубов</div>
                                <div class="portfolio-content__desc">Пациентка М, 27лет. Лечение кариеса с анестезией</div>
                                <div class="portfolio-content__row">
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Срок лечения:</div>
                                        <div class="portfolio-content__info">1 визит</div>
                                    </div>
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Сумма лечения:</div>
                                        <div class="portfolio-content__info">4 500 р.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="viniri" class="portfolio__item">
                        <div class="portfolio-content">
                            <div class="portfolio-content__col">
                                <div class="portfolio-content_left">
                                    <div class="portfolio-content__pic twentytwenty-container">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/viniri/1-1.jpg" alt="" class="portfolio-content__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/viniri/2-2.jpg" alt="" class="portfolio-content__img">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content__col">
                                <div class="portfolio-content__title">Виниры</div>
                                <div class="portfolio-content__desc">Пациент 50 лет, сделаны керамические виниры 8 шт.</div>
                                <div class="portfolio-content__row">
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Срок лечения:</div>
                                        <div class="portfolio-content__info">3 визита</div>
                                    </div>
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Сумма лечения:</div>
                                        <div class="portfolio-content__info">145 000 р.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="portfolio__item">
                        <div class="portfolio-content">
                            <div class="portfolio-content__col">
                                <div class="portfolio-content_left">
                                    <div class="portfolio-content__pic twentytwenty-container">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/viniri/3-3.jpg" alt="" class="portfolio-content__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/viniri/4-4.jpg" alt="" class="portfolio-content__img">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content__col">
                                <div class="portfolio-content__title">Виниры</div>
                                <div class="portfolio-content__desc">Пациентка 30 лет, сделаны керамические виниры 8 шт.</div>
                                <div class="portfolio-content__row">
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Срок лечения:</div>
                                        <div class="portfolio-content__info">4 визита</div>
                                    </div>
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Сумма лечения:</div>
                                        <div class="portfolio-content__info">145 000 р.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="ispravlenie-prikusa" class="portfolio__item">
                        <div class="portfolio-content">
                            <div class="portfolio-content__col">
                                <div class="portfolio-content_left">
                                    <div class="portfolio-content__pic twentytwenty-container">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/pictures/5.jpg" alt="" class="portfolio-content__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/pictures/4.jpg" alt="" class="portfolio-content__img">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content__col">
                                <div class="portfolio-content__title">Исправление прикуса</div>
                                <div class="portfolio-content__desc">Пациентка Е., 25 лет, лечение самолигирующей брекет-системой «Clarity SL»</div>
                                <div class="portfolio-content__row">
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Срок лечения:</div>
                                        <div class="portfolio-content__info">19 месяцев</div>
                                    </div>
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Сумма лечения:</div>
                                        <div class="portfolio-content__info">2 490 р.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="lechenie-desen" class="portfolio__item">
                        <div class="portfolio-content">
                            <div class="portfolio-content__col">
                                <div class="portfolio-content_left">
                                    <div class="portfolio-content__pic twentytwenty-container">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-desen/1-1.jpg" alt="" class="portfolio-content__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/lechenie-desen/2-2.jpg" alt="" class="portfolio-content__img">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content__col">
                                <div class="portfolio-content__title">Лечение десен.</div>
                                <div class="portfolio-content__desc">Пациентка Д. операция закрытия рецессии, с последующим восстановлением коронкой.</div>
                                <div class="portfolio-content__row">
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Срок лечения:</div>
                                        <div class="portfolio-content__info">1 визит</div>
                                    </div>
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Сумма лечения:</div>
                                        <div class="portfolio-content__info">7 000 р.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="otbelivanie" class="portfolio__item">
                        <div class="portfolio-content">
                            <div class="portfolio-content__col">
                                <div class="portfolio-content_left">
                                    <div class="portfolio-content__pic twentytwenty-container">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/otblenivanie/before.jpg" alt="" class="portfolio-content__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/otblenivanie/after.jpg" alt="" class="portfolio-content__img">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content__col">
                                <div class="portfolio-content__title">Отбеливание</div>
                                <div class="portfolio-content__desc">Пациент 45лет , отбеливание zoom4</div>
                                <div class="portfolio-content__row">
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Срок лечения:</div>
                                        <div class="portfolio-content__info">1 визит</div>
                                    </div>
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Сумма лечения:</div>
                                        <div class="portfolio-content__info">24 600 р.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="detskaya-stomatologia" class="portfolio__item">
                        <div class="portfolio-content">
                            <div class="portfolio-content__col">
                                <div class="portfolio-content_left">
                                    <div class="portfolio-content__pic twentytwenty-container">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/detaskaya-stom/2.jpg" alt="" class="portfolio-content__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/imgs/detaskaya-stom/1.jpg" alt="" class="portfolio-content__img">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-content__col">
                                <div class="portfolio-content__title">Детская стоматология</div>
                                <div class="portfolio-content__desc">Пациент М. 7 лет. Профессиональная чистка зубов.</div>
                                <div class="portfolio-content__row">
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Срок лечения:</div>
                                        <div class="portfolio-content__info">1 визит</div>
                                    </div>
                                    <div class="portfolio-content__block">
                                        <div class="portfolio-content__subtitle">Сумма лечения:</div>
                                        <div class="portfolio-content__info">1 320 р.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </section>
<?php
get_footer();
?>
 