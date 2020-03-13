<!-- 
    Template name: Страница контакты
-->
<?php
get_header();
?>
<section class="section contacts">
            <div class="container">
                <div class="breadcreams">
                    <a href="/" class="breadcreams__link">Главная /</a>
                    <a class="breadcreams__link breadcreams__link--not">Контакты</a>
                </div>
                <div class="section-title section-title--tal">Будем рады видеть вас в гостях!</div>
                <div class="contacts__content">
                    <ul class="contacts__list">
                        <li class="contacts__item">
                            <div class="contacts-subtitle">Звоните:</div>
                            <a href="tel: <?php echo $redux_demo['header-phone'] ?>" class="contacts-tel"><?php echo $redux_demo['header-phone'] ?></a>
                        </li>
                        <li class="contacts__item">
                            <div class="contacts-subtitle">Пишите:</div>
                            <a href="mailto: clinic@rocadamed.ru" class="contacts-mail">clinic@rocadamed.ru</a>
                        </li>
                        <li class="contacts__item contacts__item--clock">
                            <svg class="clock">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#clock"></use>
                            </svg>
                            <div class="contacts-text">Режим работы:<br>Понедельник-Пятница - 8.00-20.00<br>
                                Суббота - 9.00-16.00<br>
                                Воскресенье - выходной</div>
                        </li>
                        <li class="contacts__item contacts__item--clock">
                            <a href="https://instagram.com/rocadamed_clinic?igshid=1kbj6f3f0yiht" class="instagram__link">
                                <svg class="instagram">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#instagram"></use>
                                </svg>
                            
                            <div class="contacts-text">Подписывайтесь на наш инстаграм.</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="map pb_330">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4af933b650ffdf55be5f234b945ead6332aa047052ad290390043c337dd56fe3&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
        </section>
<?php
get_footer();
?>