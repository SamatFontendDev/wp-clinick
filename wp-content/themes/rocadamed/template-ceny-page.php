<!-- 
    Template name: Страница о цены
-->
<?php
get_header();
?>
<section class="section prices-section">
            <div class="container">
                <div class="breadcreams">
                    <a href="/" class="breadcreams__link">Главная /</a>
                    <a class="breadcreams__link breadcreams__link--not">Цены</a>
                </div>
                <h1 class="section-title">Цены в «Стоматологии Рокада-Мед»</h1>
                <div class="service-price__desc">
                    <svg class="wallet">
                        <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#wallet"></use>
                    </svg>
                    Предлагаем ознакомиться с ценами на популярные виды стоматологических услуг. Убедитесь в выгодной стоимости лечения в нашей клинике!
                </div>
                <a href="#prices-block" class="service-btn scroll-btn service-btn_mb">УЗНАТЬ СТОИМОСТЬ</a>
                <div class="prices-btns-block">
                    <ul class="prices-btns-block__list">
                        <li class="prices-btns-block__item">
                            <a href="#obshie" class="prices-btns-block__link scroll-btn">Общие</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#terapia" class="prices-btns-block__link scroll-btn">Терапия</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#vostanovlenie-zubov" class="prices-btns-block__link scroll-btn">Восстановление зубов</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#endodontia" class="prices-btns-block__link scroll-btn">Эндодонтия</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#diskolorit" class="prices-btns-block__link scroll-btn">Лечение дисколорита зубов</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#hirurgia" class="prices-btns-block__link scroll-btn">Хирургия</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#ortoedia" class="prices-btns-block__link scroll-btn">Ортопедия</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#vspom-proc" class="prices-btns-block__link scroll-btn">Вспомогательные процедуры</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#ortodontia" class="prices-btns-block__link scroll-btn">Ортодонтия. Лечение брекет-системой</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#lechenie-sem-ap" class="prices-btns-block__link scroll-btn">Лечение съемной аппаратурой</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#dop-uslugi" class="prices-btns-block__link scroll-btn">Дополнительные услуги</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#paradontologia" class="prices-btns-block__link scroll-btn">Пародонтология</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#implantacia" class="prices-btns-block__link scroll-btn">Имплантация зубных протезов</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#detskaya" class="prices-btns-block__link scroll-btn">Детская стоматология</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#profilaktika" class="prices-btns-block__link scroll-btn">Профилактика</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#rengen" class="prices-btns-block__link scroll-btn">Рентген</a>
                        </li>
                        <li class="prices-btns-block__item">
                            <a href="#prochie" class="prices-btns-block__link scroll-btn">Прочие</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="prices-block" class="section prices-block">
            <div class="container">
                <div class="section-title-s section-title-s-mb-50">Наши цены</div>
                <ul class="prices-block__list">
                    <li id="obshie" class="prices-block__item">
                        <div class="prices-block__title">Общие</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">41</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Анестезия с учетом индивидуальных особенностей состояния здоровья пациента</div>
                                </div>
                                <div class="td"><div class="prices__num">650 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">42</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Осмотр-консультация </div>
                                </div>
                                <div class="td"><div class="prices__num">350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">81</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка коффердама</div>
                                </div>
                                <div class="td"><div class="prices__num">900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">80</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Постановка защитной резиновой завесы при эндодонтическом лечении</div>
                                </div>
                                <div class="td"><div class="prices__num">700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">82</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление спортивной каппы</div>
                                </div>
                                <div class="td"><div class="prices__num">8000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">83</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление каппы от бруксизма</div>
                                </div>
                                <div class="td"><div class="prices__num">8000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">86</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление временной ортопедической каппы</div>
                                </div>
                                <div class="td"><div class="prices__num">2000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">84</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление каппы для отбеливания (1 челюсть)</div>
                                </div>
                                <div class="td"><div class="prices__num">2500 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="terapia" class="prices-block__item">
                        <div class="prices-block__title">Терапия</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3019</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Консультация терапевта с составлением плана лечения </div>
                                </div>
                                <div class="td"><div class="prices__num">1 150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3022</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Консультация терапевта</div>
                                </div>
                                <div class="td"><div class="prices__num">650 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3062</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Коррекция эстетической реставрации</div>
                                </div>
                                <div class="td"><div class="prices__num">1 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3021</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Снятие пломбы</div>
                                </div>
                                <div class="td"><div class="prices__num">450 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3032</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Наложение временной пломбы</div>
                                </div>
                                <div class="td"><div class="prices__num">350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3033</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Коррекция десневого контура</div>
                                </div>
                                <div class="td"><div class="prices__num">600 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3081</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Использование микроскопа при лечении корневых каналов</div>
                                </div>
                                <div class="td"><div class="prices__num">3 200 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3091</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Применение микроскопа на этапах диагностики</div>
                                </div>
                                <div class="td"><div class="prices__num">3 200 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3093</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Диагностика скрытого кариеса методом "Диагнокам"</div>
                                </div>
                                <div class="td"><div class="prices__num">650 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="vostanovlenie-zubov" class="prices-block__item">
                        <div class="prices-block__title">Восстановление зубов</div>
                        <div class="table">
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3020</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лечение поверхностного кариеса</div>
                                </div>
                                <div class="td"><div class="prices__num">2 000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3040</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Отсроченное лечение острого глубокого кариеса (первое посещение)</div>
                                </div>
                                <div class="td"><div class="prices__num">1 700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3060</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Временное пломбирование зуба материалом Vitremer (США - Германия) при остром течении кариеса</div>
                                </div>
                                <div class="td"><div class="prices__num">2 100 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3061</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пломбирование зуба материалом химического отверждения</div>
                                </div>
                                <div class="td"><div class="prices__num">3 000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3065</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Функциональное восстановление зуба без повреждения контактного пункта фотокомпозитным материалом</div>
                                </div>
                                <div class="td"><div class="prices__num">2 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3070</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Функциональное восстановление зуба c повреждением одного контактного пункта фотокомпозитным материалом</div>
                                </div>
                                <div class="td"><div class="prices__num">3 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3071</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Функциональное восстановление зуба с повреждением двух контактных пунктов фотокомпозитным материалом</div>
                                </div>
                                <div class="td"><div class="prices__num">4 000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3090</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Функциональное восстановление зуба с повреждением МОД поверхностей фотокомпозитным материалом</div>
                                </div>
                                <div class="td"><div class="prices__num">4 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3125</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Восстановление культи зуба под ортопедическую конструкцию</div>
                                </div>
                                <div class="td"><div class="prices__num">3 800 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3095</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Функциональное восстановление зуба фотокомпозитным материалом с применением стекловолоконного  штифта</div>
                                </div>
                                <div class="td"><div class="prices__num">6 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3120</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Восстановление зуба стеклоиномерным цементом</div>
                                </div>
                                <div class="td"><div class="prices__num">1 150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3130</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Эстетико-функциональное восстановление зуба композитным виниром</div>
                                </div>
                                <div class="td"><div class="prices__num">6 900 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="endodontia" class="prices-block__item">
                        <div class="prices-block__title">Эндодонтия</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3149</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Электроодонтодиагностика (1 зуб)</div>
                                </div>
                                <div class="td"><div class="prices__num">350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3159</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Временная пломба при эндодонтическом лечении зуба материалом Vitremer</div>
                                </div>
                                <div class="td"><div class="prices__num">650 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3157</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лечение одного корневого канала с использованием антисептических  средств  </div>
                                </div>
                                <div class="td"><div class="prices__num">1 150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3148</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пломбирование одного корневого канала</div>
                                </div>
                                <div class="td"><div class="prices__num">1 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3160</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лечение одноканального зуба с использованием антисептических средств </div>
                                </div>
                                <div class="td"><div class="prices__num">1 850 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3161</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пломбирование одноканального зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">1 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3162</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лечение двухканального зуба с использованием антисептических средств </div>
                                </div>
                                <div class="td"><div class="prices__num">2 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3163</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пломбирование двухканального зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">2 200 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3164</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лечение трехканального зуба с использованием антисептических средств</div>
                                </div>
                                <div class="td"><div class="prices__num">3 000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3165</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пломбирование трехканального зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">3 100 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3166</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пломбирование корневых каналов временное материалом на основе гидроокиси кальция</div>
                                </div>
                                <div class="td"><div class="prices__num">700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3171</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Повторная обработка корневого канала</div>
                                </div>
                                <div class="td"><div class="prices__num">700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3172</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Первичное лечение 1 корневого канала со сложной анатомией (склерозированный, облитерированный или сложно проходимый)</div>
                                </div>
                                <div class="td"><div class="prices__num">2 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3230</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Распломбирование одного канала, запломбированного резорцин - формалиновой пастой, цементом  или гуттаперчей</div>
                                </div>
                                <div class="td"><div class="prices__num">1 700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3231</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Распломбирование  канала запломбированного пастой</div>
                                </div>
                                <div class="td"><div class="prices__num">1 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3260</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Постановка девитализирующей пасты при лечении пульпита</div>
                                </div>
                                <div class="td"><div class="prices__num">575 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3261</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Трепанация коронки зуба при остром периодонтите или обострении хронического</div>
                                </div>
                                <div class="td"><div class="prices__num">1 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3331</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Подготовка одного корневого канала под культевую штифтовую конструкцию</div>
                                </div>
                                <div class="td"><div class="prices__num">575 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3340</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Подготовка кариозной полости под вкладку</div>
                                </div>
                                <div class="td"><div class="prices__num">900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3232</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Извлечение инородного тела из канала</div>
                                </div>
                                <div class="td"><div class="prices__num">1 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3233</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Закрытие перфорации материалом Триоксидент</div>
                                </div>
                                <div class="td"><div class="prices__num">1 150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3234</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Извлечение стекловолоконного штифта из канала</div>
                                </div>
                                <div class="td"><div class="prices__num">2 100 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="diskolorit" class="prices-block__item">
                        <div class="prices-block__title">Лечение дисколорита зубов</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3322</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Отбеливание зубов с применением системы ZOOM (1 цикл)</div>
                                </div>
                                <div class="td"><div class="prices__num">8 200 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3300</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Отбеливание зубов с применением системы домашнего  отбеливания (индивидуальная каппа, реминерализующая терапия)</div>
                                </div>
                                <div class="td"><div class="prices__num">8 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3290</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Повторное отбеливание зубов с применением системы домашнего отбеливания</div>
                                </div>
                                <div class="td"><div class="prices__num">4 250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3500</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Отбеливание чувствительных зубов системой Spa-Dent</div>
                                </div>
                                <div class="td"><div class="prices__num">2 650 руб.</div></div>
                            </div>
                    </li>
                    <li id="#hirurgia" class="prices-block__item">
                        <div class="prices-block__title">Хирургия</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6009</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Консультация хирурга</div>
                                </div>
                                <div class="td"><div class="prices__num">650 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6008</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Консультация хирурга с составлением плана лечения</div>
                                </div>
                                <div class="td"><div class="prices__num">1 150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6010</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Удаление зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">2 000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6015</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Удаление зуба 3-4 степени подвижности</div>
                                </div>
                                <div class="td"><div class="prices__num">1 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6020</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Удаление зуба атипичное</div>
                                </div>
                                <div class="td"><div class="prices__num">3 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6021</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Удаление ретенированного зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">5 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6022</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Заполнение лунки удаленного зуба остеотропным материалом (отечеств.)</div>
                                </div>
                                <div class="td"><div class="prices__num">6 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6030</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Перевязка после хирургического вмешательства</div>
                                </div>
                                <div class="td"><div class="prices__num">575 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6031</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Наложение швов</div>
                                </div>
                                <div class="td"><div class="prices__num">575 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6032</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Снятие швов</div>
                                </div>
                                <div class="td"><div class="prices__num">700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6040</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Резекция верхушки корня в области одного зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">5 200 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6041</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Осмотр после хирургического вмешательства</div>
                                </div>
                                <div class="td"><div class="prices__num">400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6050</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Резекция верхушки корня в области двух зубов</div>
                                </div>
                                <div class="td"><div class="prices__num">6 550 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6060</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Цистэктомия на верхней челюсти до двух зубов</div>
                                </div>
                                <div class="td"><div class="prices__num">5 550 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6061</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Цистэктомия на верхней челюсти больше двух зубов</div>
                                </div>
                                <div class="td"><div class="prices__num">7 350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6062</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Цистэктомия на нижней челюсти до двух зубов</div>
                                </div>
                                <div class="td"><div class="prices__num">6 350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6071</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Цистэктомия на нижней челюсти больше двух зубов</div>
                                </div>
                                <div class="td"><div class="prices__num">7 800 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6095</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Гингивэктомия в области одного зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">1 150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6100</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Иссечение «капюшона»</div>
                                </div>
                                <div class="td"><div class="prices__num">1 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6110</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Вскрытие абсцесса</div>
                                </div>
                                <div class="td"><div class="prices__num">1 600 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6111</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Периостотомия</div>
                                </div>
                                <div class="td"><div class="prices__num">1 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6130</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Гемисекция</div>
                                </div>
                                <div class="td"><div class="prices__num">2 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6140</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Френулопластика</div>
                                </div>
                                <div class="td"><div class="prices__num">4 850 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6145</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Вестибулопластика</div>
                                </div>
                                <div class="td"><div class="prices__num">6 350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6150</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Удаление экзостоза</div>
                                </div>
                                <div class="td"><div class="prices__num">2 100 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6155</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Иссечение образований слизистой оболочки полости рта</div>
                                </div>
                                <div class="td"><div class="prices__num">2 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6156</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Иссечение доброкачественного образования</div>
                                </div>
                                <div class="td"><div class="prices__num">2 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6151</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Гистологическое исследование операционного материала</div>
                                </div>
                                <div class="td"><div class="prices__num">2 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6160</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Устранение дефекта костной ткани с применением остеоиндуктивного материала (отечеств.)</div>
                                </div>
                                <div class="td"><div class="prices__num">5 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6161</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Устранение дефекта костной ткани с применением остеоиндуктивного материала (иппорт.)</div>
                                </div>
                                <div class="td"><div class="prices__num">14 950 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6162</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Операция по закрытию перфорации в/челюстной пазухи</div>
                                </div>
                                <div class="td"><div class="prices__num">2 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">6163</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Закрытие перфорации в/челюстной пазухи</div>
                                </div>
                                <div class="td"><div class="prices__num">2 900 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="ortoedia" class="prices-block__item">
                        <div class="prices-block__title">Ортопедия</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4001</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Консультация с составлением ортопедического плана лечения и изготовлением контрольных моделей</div>
                                </div>
                                <div class="td"><div class="prices__num">1 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4999</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление временного бюгельного протеза с импортными зубами</div>
                                </div>
                                <div class="td"><div class="prices__num">17 250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4010</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Консультация ортопеда</div>
                                </div>
                                <div class="td"><div class="prices__num">900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4011</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление циркониевой коронки (полная анатомия)</div>
                                </div>
                                <div class="td"><div class="prices__num">13 250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4012</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление циркониевой коронки под керамическую облицовку</div>
                                </div>
                                <div class="td"><div class="prices__num">10 950 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4013</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Нанесение керамической облицовки на циркониевый каркас</div>
                                </div>
                                <div class="td"><div class="prices__num">6 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4014</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление рабочей модели из гипса</div>
                                </div>
                                <div class="td"><div class="prices__num">1 700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4048</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">ртопедическое лечение с использованием лицевой дуги</div>
                                </div>
                                <div class="td"><div class="prices__num">6 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4020</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление культевой штифтовой конструкции (предполагается 1 канал)</div>
                                </div>
                                <div class="td"><div class="prices__num">4 000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4022</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление культевой штифтовой вкладки с использованием фиксирующих элементов</div>
                                </div>
                                <div class="td"><div class="prices__num">5 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4021</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление сложной (разборной) штифтовой конструкции (предполагается 2 и более каналов)</div>
                                </div>
                                <div class="td"><div class="prices__num">5 200 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4032</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление металлокерамической коронки из хромокобальтового сплава, зуб</div>
                                </div>
                                <div class="td"><div class="prices__num">10 600 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4031</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление металлокерамической коронки из хромокобальтового сплава с изпользованием плечевой массы</div>
                                </div>
                                <div class="td"><div class="prices__num">10 600 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4033</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление металлокерамической коронки с фрезеровкой</div>
                                </div>
                                <div class="td"><div class="prices__num">10 600 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4034</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление  цельнолитой коронки из хромокобальтового сплава, литой зуб</div>
                                </div>
                                <div class="td"><div class="prices__num">8 600 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4035</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление цельнолитой коронки с фрезеровкой</div>
                                </div>
                                <div class="td"><div class="prices__num">9 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4144</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Диагностика и составление плана лечения с применением артикулятора</div>
                                </div>
                                <div class="td"><div class="prices__num">4 000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4036</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление цельнокерамической коронки</div>
                                </div>
                                <div class="td"><div class="prices__num">15 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4037</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление цельнокерамического винира</div>
                                </div>
                                <div class="td"><div class="prices__num">15 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4039</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление цельнокерамической коронки с облицовкой</div>
                                </div>
                                <div class="td"><div class="prices__num">18 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4040</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Замена матрицы АВ</div>
                                </div>
                                <div class="td"><div class="prices__num">2 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4038</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление цельнокерамической вкладки</div>
                                </div>
                                <div class="td"><div class="prices__num">15 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4002</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление частичного съемного протеза из эластичного материала (1 зуб)</div>
                                </div>
                                <div class="td"><div class="prices__num">13 800 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4043</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Армирование 1 ед. пластмассовой коронки</div>
                                </div>
                                <div class="td"><div class="prices__num">1 250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4045</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Ортопедическое лечение с применением одностороннего бюгельного протеза (без стоимости фиксирующих элементов)</div>
                                </div>
                                <div class="td"><div class="prices__num">19 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4046</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление сьемного протеза из эластичного материала</div>
                                </div>
                                <div class="td"><div class="prices__num">40 250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4047</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление временного бюгельного протеза</div>
                                </div>
                                <div class="td"><div class="prices__num">13 800 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4060</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Ортопедическое лечение с применением бюгельного протеза (без стоимости фиксирующих элементов)</div>
                                </div>
                                <div class="td"><div class="prices__num">37 950 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4061</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление замка ВКС — ОЦ</div>
                                </div>
                                <div class="td"><div class="prices__num">5 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4062</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление замка ВКС - СГ</div>
                                </div>
                                <div class="td"><div class="prices__num">5 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4063</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление замка ВС - 3</div>
                                </div>
                                <div class="td"><div class="prices__num">5 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4064</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление эстетического кламмера</div>
                                </div>
                                <div class="td"><div class="prices__num">3 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4066</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление балки</div>
                                </div>
                                <div class="td"><div class="prices__num">4 000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4067</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Замена матрицы Bredent</div>
                                </div>
                                <div class="td"><div class="prices__num">1 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4072</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Замена клинического винта</div>
                                </div>
                                <div class="td"><div class="prices__num">1 950 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4073</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Замена матрицы Semados</div>
                                </div>
                                <div class="td"><div class="prices__num">12 650 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4068</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление интерлока</div>
                                </div>
                                <div class="td"><div class="prices__num">1 550 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4069</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление кламмера опорно-удерживающего</div>
                                </div>
                                <div class="td"><div class="prices__num">2 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4091</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление полного съемного протеза с импортной гарнитурой</div>
                                </div>
                                <div class="td"><div class="prices__num">18 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4092</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление частичного съемного протеза</div>
                                </div>
                                <div class="td"><div class="prices__num">17 250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4145</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Протезирование на имплантах Германия с трансокклюзионной фиксацией</div>
                                </div>
                                <div class="td"><div class="prices__num">28 850 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4500</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление индивидуального титанового абатмента Германия</div>
                                </div>
                                <div class="td"><div class="prices__num">18 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4071</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Протезирование на имплантатах Германия c фрезеровкой</div>
                                </div>
                                <div class="td"><div class="prices__num">31 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4147</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Протезирование на имплантах Израиль с трансокклюзионной фиксацией</div>
                                </div>
                                <div class="td"><div class="prices__num">23 250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4502</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Индивидуализация стандартного абатмента Гермения</div>
                                </div>
                                <div class="td"><div class="prices__num">18 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4503</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Индивидуализация стандартного абатмента Израиль</div>
                                </div>
                                <div class="td"><div class="prices__num">12 650 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4093</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление аттачмента на имплантанте</div>
                                </div>
                                <div class="td"><div class="prices__num">16 450 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4095</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Аттачмент на имплантанте, изготовленный в лабораторных условиях</div>
                                </div>
                                <div class="td"><div class="prices__num">16 450 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4096</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лабораторное изготовление фиксирующих элементов на имплантантах Германия</div>
                                </div>
                                <div class="td"><div class="prices__num">10 350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4094</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление индивидуального абатмента на основе оксида циркония</div>
                                </div>
                                <div class="td"><div class="prices__num">21 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4098</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лабораторное изготовление фиксирующих элементов на замках Brident</div>
                                </div>
                                <div class="td"><div class="prices__num">5 050 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4097</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лабораторное изготовление фиксирующих элементов на имплантах Израиль</div>
                                </div>
                                <div class="td"><div class="prices__num">8 050 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4146</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление временной пластмассовой конструкции  на абатмене</div>
                                </div>
                                <div class="td"><div class="prices__num">6 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4151</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Протезирование с использованием Multi System с уровня абатмента Израиль</div>
                                </div>
                                <div class="td"><div class="prices__num">18 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4152</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Временное протезирование с использованием Multi System Германия</div>
                                </div>
                                <div class="td"><div class="prices__num">28 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4153</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Временное протезирование с использованием Multi System Израиль</div>
                                </div>
                                <div class="td"><div class="prices__num">20 700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4154</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Протезирование с использованием Multi System Германия</div>
                                </div>
                                <div class="td"><div class="prices__num">34 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4155</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Протезирование с использованием Multi System Израиль</div>
                                </div>
                                <div class="td"><div class="prices__num">25 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4156</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Протезирование с использованием Multi System с уровня абатмента Германия</div>
                                </div>
                                <div class="td"><div class="prices__num">20 700 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="#vspom-proc" class="prices-block__item">
                        <div class="prices-block__title">Вспомогательные процедуры</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4180</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Снятие коронки штампованной</div>
                                </div>
                                <div class="td"><div class="prices__num">575 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4192</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Снятие коронки с импланта</div>
                                </div>
                                <div class="td"><div class="prices__num">2 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4181</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Снятие коронки цельнолитой</div>
                                </div>
                                <div class="td"><div class="prices__num">1 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4182</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Починка протеза (приварка 1-2 зубов)</div>
                                </div>
                                <div class="td"><div class="prices__num">1 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4193</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Починка протеза (приварка более 2 зубов)</div>
                                </div>
                                <div class="td"><div class="prices__num">1 950 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4185</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Починка протеза (перелом)</div>
                                </div>
                                <div class="td"><div class="prices__num">1 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4183</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лабораторная перебазировка протеза</div>
                                </div>
                                <div class="td"><div class="prices__num">2 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4190</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Фиксация ранее изготовленной коронки</div>
                                </div>
                                <div class="td"><div class="prices__num">1 100 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4191</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Временная фиксация ранее изготовленной коронки</div>
                                </div>
                                <div class="td"><div class="prices__num">575 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4200</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление временного косметического протеза</div>
                                </div>
                                <div class="td"><div class="prices__num">6 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4210</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление частичного съемного протеза с использованием отечественных материалов</div>
                                </div>
                                <div class="td"><div class="prices__num">9 200 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4215</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление армированного временного мостовидного протеза (1 единица)</div>
                                </div>
                                <div class="td"><div class="prices__num">1 950 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4211</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление полного съемного протеза с использованием отечественных материалов</div>
                                </div>
                                <div class="td"><div class="prices__num">10 250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4216</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление временной коронки в клинике</div>
                                </div>
                                <div class="td"><div class="prices__num">1 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4212</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Временная пластмассовая коронка, зуб, изготовленные в лабораторных условиях</div>
                                </div>
                                <div class="td"><div class="prices__num">4 000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4231</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Фантомное моделирование 1 ед.</div>
                                </div>
                                <div class="td"><div class="prices__num">200 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4320</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Индивидуальная ложка</div>
                                </div>
                                <div class="td"><div class="prices__num">1 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4321</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление мягкой прокладки</div>
                                </div>
                                <div class="td"><div class="prices__num">2 550 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4343</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Снятие слепков альгинатной массой</div>
                                </div>
                                <div class="td"><div class="prices__num">575 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4447</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление R-контрольного шаблона</div>
                                </div>
                                <div class="td"><div class="prices__num">4 050 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">4448</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление мок-ап</div>
                                </div>
                                <div class="td"><div class="prices__num">2 900 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="ortodontia" class="prices-block__item">
                        <div class="prices-block__title">Ортодонтия. Лечение брекет-системой</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8001</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Консультация ортодонта</div>
                                </div>
                                <div class="td"><div class="prices__num">1 150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8002</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Контрольный осмотр, наблюдение в процессе лечения</div>
                                </div>
                                <div class="td"><div class="prices__num">350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8010</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Ортодонтическое обследование с составлением плана лечения</div>
                                </div>
                                <div class="td"><div class="prices__num">1 450 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8017</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лечение с использованием ортодонтического импланта (дополнительно к основному курсу)</div>
                                </div>
                                <div class="td"><div class="prices__num">6 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8020</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка брекет-системы металлической на 1 челюсть</div>
                                </div>
                                <div class="td"><div class="prices__num">34 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8019</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка лингвальных брекетов на 1 челюсть</div>
                                </div>
                                <div class="td"><div class="prices__num">97 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8028</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка керамической брекет-системы на 1 челюсть</div>
                                </div>
                                <div class="td"><div class="prices__num">51 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8032</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка самолегирующей брекет-системы Деймон 3 на 1 челюсть</div>
                                </div>
                                <div class="td"><div class="prices__num">43 700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8006</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка самолегирующей брекет-системы Деймон   Клеар на 1 челюсть</div>
                                </div>
                                <div class="td"><div class="prices__num">63 250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8007</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка брекет-системы "Damon Q"</div>
                                </div>
                                <div class="td"><div class="prices__num">51 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8045</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка самолегирующей керамической брекет-системы на 1 челюсть</div>
                                </div>
                                <div class="td"><div class="prices__num">60 950 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8046</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Система Flash-Free (lдополнительно к основному курсу)</div>
                                </div>
                                <div class="td"><div class="prices__num">6 350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8004</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка самолегирующей брекет-системы SmartClip на 1 челюсть</div>
                                </div>
                                <div class="td"><div class="prices__num">46 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8033</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Анализ ТРГ (дополнительно к основному курсу)</div>
                                </div>
                                <div class="td"><div class="prices__num">1 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8034</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Трейнер для брекетов (дополнительно к основному курсу)</div>
                                </div>
                                <div class="td"><div class="prices__num">6 350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8035</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Починка ретейнера (1 соединение)</div>
                                </div>
                                <div class="td"><div class="prices__num">700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8005</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Фиксация несъемного ретейнера на один зуб</div>
                                </div>
                                <div class="td"><div class="prices__num">860 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8036</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление назубной каппы ( дополнительно к основному курсу)</div>
                                </div>
                                <div class="td"><div class="prices__num">5 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8037</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Съемный пластиночный ретенционный аппарат, каппа (дополнительно к основному курсу)</div>
                                </div>
                                <div class="td"><div class="prices__num">4 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8040</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Обучение правилам чистки зубов при пользовании брекет-системой</div>
                                </div>
                                <div class="td"><div class="prices__num">575 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8041</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Удаление мягких зубных отложений</div>
                                </div>
                                <div class="td"><div class="prices__num">1 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8043</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Глубокое фторирование 1 челюсть</div>
                                </div>
                                <div class="td"><div class="prices__num">1 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8044</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Диагностическая модель (1 челюсть)</div>
                                </div>
                                <div class="td"><div class="prices__num">700 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="lechenie-sem-ap" class="prices-block__item">
                        <div class="prices-block__title">Лечение съемной аппаратурой</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8050</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Аппарат с элементами</div>
                                </div>
                                <div class="td"><div class="prices__num">16 100 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8052</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Годовой курс лечения с применением стандартных вестибулярных пластинок</div>
                                </div>
                                <div class="td"><div class="prices__num">7 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8051</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Аппарат Башаровой</div>
                                </div>
                                <div class="td"><div class="prices__num">13 800 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8053</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Функциональная конструкция(регулятор функции Френкеля)</div>
                                </div>
                                <div class="td"><div class="prices__num">16 100 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8054</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Годовой курс преортодонтического лечения с применением трейнеров, протезов для  вер. и ниж. чел. внутриротовых капп</div>
                                </div>
                                <div class="td"><div class="prices__num">9 800 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8056</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Годовой курс ортодонтического лечения с применением трейнера MYOBRACE</div>
                                </div>
                                <div class="td"><div class="prices__num">10950 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8057</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Изготовление дополнительного съемного аппарата</div>
                                </div>
                                <div class="td"><div class="prices__num">8 050 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8058</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лечение с использованием корректора дистального прикуса FORSUS (lдополнительно к основному курсу ортодонтического лечения) </div>
                                </div>
                                <div class="td"><div class="prices__num">19 550 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="dop-uslugi" class="prices-block__item">
                        <div class="prices-block__title">Дополнительные услуги</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8060</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка эстетической дуги</div>
                                </div>
                                <div class="td"><div class="prices__num">1 950 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8061</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка дуги на лингвальных брекетах</div>
                                </div>
                                <div class="td"><div class="prices__num">2 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8132</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Фиксация опорного кольца</div>
                                </div>
                                <div class="td"><div class="prices__num">1 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8163</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Фиксация брекета металлического</div>
                                </div>
                                <div class="td"><div class="prices__num">1 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8142</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Фиксация щечной трубки</div>
                                </div>
                                <div class="td"><div class="prices__num">1 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8143</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Фиксация брекета лингвального</div>
                                </div>
                                <div class="td"><div class="prices__num">1 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8064</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Повторная фиксация элемента на адгезив</div>
                                </div>
                                <div class="td"><div class="prices__num">750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8065</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Снятие одного лингвального брекета</div>
                                </div>
                                <div class="td"><div class="prices__num">120 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8066</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка дуги</div>
                                </div>
                                <div class="td"><div class="prices__num">1 250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8067</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Фиксация лигатуры, 1 шт.</div>
                                </div>
                                <div class="td"><div class="prices__num">135 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8068</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Снятие одного брекета</div>
                                </div>
                                <div class="td"><div class="prices__num">70 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8113</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Фиксация керамического брекета</div>
                                </div>
                                <div class="td"><div class="prices__num">1 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8088</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Связывание в блок длинной эстетической лигатурой (1 лигатура)</div>
                                </div>
                                <div class="td"><div class="prices__num">900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8070</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Шлифовка, полировка 1 зуба после снятия брекетов</div>
                                </div>
                                <div class="td"><div class="prices__num">150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8071</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Наложение межчелюстной эластичной тяги</div>
                                </div>
                                <div class="td"><div class="prices__num">1 100 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8072</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Наложение эластичной цепочки, 1 звено</div>
                                </div>
                                <div class="td"><div class="prices__num">70 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8074</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Связывание в блок металлической лигатурой (1 лигатура)</div>
                                </div>
                                <div class="td"><div class="prices__num">350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8075</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Реконструкция аппарата, перебазировка</div>
                                </div>
                                <div class="td"><div class="prices__num">1 000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8076</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Починка (реставрация) аппарата</div>
                                </div>
                                <div class="td"><div class="prices__num">760 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8078</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Профессиональная гигиена аппаратом  AIR-FLOW (1зуб)</div>
                                </div>
                                <div class="td"><div class="prices__num">140 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8082</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Частичный съемный пластинчатый протез с завышением прикуса</div>
                                </div>
                                <div class="td"><div class="prices__num">10 350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8090</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Вспомогательный аппарат с элементами</div>
                                </div>
                                <div class="td"><div class="prices__num">5 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8200</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Наложение 1-го изгиба на ортодонтическую дугу</div>
                                </div>
                                <div class="td"><div class="prices__num">800 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8210</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Активация аппарата "Forsus" наложением стопорного кольца</div>
                                </div>
                                <div class="td"><div class="prices__num">350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8211</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Активация съемного ортодонтического аппарата</div>
                                </div>
                                <div class="td"><div class="prices__num">290 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8212</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Аппроксимальное пришлифовывание в области 1 зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">290 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8213</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Наложение(фиксация) композитной кнопки в области 1 зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">640 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8214</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Окклюзионная накладка из композитного материала в области 1 зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">865 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8112</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Фиксация кнопки, брекет-кнопки</div>
                                </div>
                                <div class="td"><div class="prices__num">800 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8133</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Припасовка аппарата после починки</div>
                                </div>
                                <div class="td"><div class="prices__num">460 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8144</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Сепарация в области 1 зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">8145</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Активация аппарата с завышением прикуса</div>
                                </div>
                                <div class="td"><div class="prices__num">520 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="paradontologia" class="prices-block__item">
                        <div class="prices-block__title">Пародонтология</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5009</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Консультация пародонтолога с составлением плана лечения</div>
                                </div>
                                <div class="td"><div class="prices__num">1 150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5008</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Консультация пародонтолога</div>
                                </div>
                                <div class="td"><div class="prices__num">650 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5010</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Закрытый кюретаж в области двух зубов</div>
                                </div>
                                <div class="td"><div class="prices__num">1 550 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5020</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Глубокий (открытый) кюретаж в области двух зубов</div>
                                </div>
                                <div class="td"><div class="prices__num">2 550 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5030</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Защитная повязка в области одного зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5040</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Вскрытие пародонтального абсцесса</div>
                                </div>
                                <div class="td"><div class="prices__num">1 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5050</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Гингивэктомия в области одного зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">1 000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5060</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Индивидуальное пришлифовывание одного зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5070</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Шинирование стекловолоконной лентой в пределах одного зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">1 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5080</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Удаление пародонтальной кисты</div>
                                </div>
                                <div class="td"><div class="prices__num">5 200 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5090</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Френулопластика</div>
                                </div>
                                <div class="td"><div class="prices__num">4 850 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5095</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Вестибулопластика</div>
                                </div>
                                <div class="td"><div class="prices__num">6 350 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5101</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Иссечение слизистых тяжей</div>
                                </div>
                                <div class="td"><div class="prices__num">2 550 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5110</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Гингивопластика по поводу рецессии  десны лоскутом на ножке</div>
                                </div>
                                <div class="td"><div class="prices__num">4 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5120</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Гингивопластика по поводу рецессии десны свободным лоскутом</div>
                                </div>
                                <div class="td"><div class="prices__num">5 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5130</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лоскутная операция с остеопластикой</div>
                                </div>
                                <div class="td"><div class="prices__num">10 950 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5150</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Медобработка зубодесневого кармана (один зуб)</div>
                                </div>
                                <div class="td"><div class="prices__num">140 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5160</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Повторный осмотр после операции (медобработка, снятие повязки, снятие швов)</div>
                                </div>
                                <div class="td"><div class="prices__num">575 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">5170</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лечение заболеваний слизистой оболочки полости рта (одно посещение)</div>
                                </div>
                                <div class="td"><div class="prices__num">575 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="implantacia" class="prices-block__item">
                        <div class="prices-block__title">Имплантация зубных протезов</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7010</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка одного имплантата (Германия)</div>
                                </div>
                                <div class="td"><div class="prices__num">36 800 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7009</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Дополнительные мероприятия имплантации</div>
                                </div>
                                <div class="td"><div class="prices__num">11 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7999</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Сочетанный метод установки дентального имплантата </div>
                                </div>
                                <div class="td"><div class="prices__num">51 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7035</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Удаление имплантата</div>
                                </div>
                                <div class="td"><div class="prices__num">5 150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7034</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка временного имплантата</div>
                                </div>
                                <div class="td"><div class="prices__num">25 000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7033</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Планирование направляющих имплантатов для контроля на модели (1 зуб)</div>
                                </div>
                                <div class="td"><div class="prices__num">9 200 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7041</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Дополнительный зуб при планировании направляющих имплантатов для контроля на модели</div>
                                </div>
                                <div class="td"><div class="prices__num">920 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7014</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Расщепление костного альвеолярного гребня</div>
                                </div>
                                <div class="td"><div class="prices__num">7 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7013</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пластика аутогенным костным трансплататом</div>
                                </div>
                                <div class="td"><div class="prices__num">34 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7015</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка временного ортодонтического импланта</div>
                                </div>
                                <div class="td"><div class="prices__num">25 000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7011</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка формирователя десны</div>
                                </div>
                                <div class="td"><div class="prices__num">1 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7083</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка одного имплантата (Израиль)</div>
                                </div>
                                <div class="td"><div class="prices__num">26 500 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7011</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка формирователя десны</div>
                                </div>
                                <div class="td"><div class="prices__num">1 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7020</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Имплантация мембраны резорбируемой</div>
                                </div>
                                <div class="td"><div class="prices__num">21 850 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7021</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Имплантация мембраны нерезорбируемой (+ 2 фиксатора)</div>
                                </div>
                                <div class="td"><div class="prices__num">36 800 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7040</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Операция по удалению нерезорбируемой мембраны</div>
                                </div>
                                <div class="td"><div class="prices__num">3 450 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7030</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Использование костного отечественного наполнителя (1 упаковка) при костной пластике</div>
                                </div>
                                <div class="td"><div class="prices__num">6 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7031</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Использование костного импортного наполнителя (1 упаковка) при костной пластике</div>
                                </div>
                                <div class="td"><div class="prices__num">16 100 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7032</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Снятие оттисков и изготовление диагностической модели</div>
                                </div>
                                <div class="td"><div class="prices__num">1 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7050</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка титанового винта для фиксации костного трансплантата</div>
                                </div>
                                <div class="td"><div class="prices__num">4 100 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7060</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Забор аутокости скребком MICROSS</div>
                                </div>
                                <div class="td"><div class="prices__num">15 550 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7070</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Синус лифт</div>
                                </div>
                                <div class="td"><div class="prices__num">21 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7072</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Операция раскрытия импланта</div>
                                </div>
                                <div class="td"><div class="prices__num">1 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7090</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Индивидуальное планирование дентальной имплантации с изготовлением операционного шаблона</div>
                                </div>
                                <div class="td"><div class="prices__num">40 250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">9022</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка стандартного формирователя десны</div>
                                </div>
                                <div class="td"><div class="prices__num">9 200 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="detskaya" class="prices-block__item">
                        <div class="prices-block__title">Детская стоматология</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2009</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Консультация детского стоматолога, составлением плана лечения</div>
                                </div>
                                <div class="td"><div class="prices__num">1 150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2011</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Первичная консультация детского врача-стоматолога</div>
                                </div>
                                <div class="td"><div class="prices__num">650 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2031</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Психологическая подготовка ребенка к лечению зубов без манипуляций</div>
                                </div>
                                <div class="td"><div class="prices__num">600 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2010</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Удаление временного зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">1 600 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2005</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Наложение лечебной прокладки</div>
                                </div>
                                <div class="td"><div class="prices__num">450 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2016</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Подсечение уздечки языка у детей грудного возраста</div>
                                </div>
                                <div class="td"><div class="prices__num">1 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2015</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Удаление временного зуба 3-4 степени подвижности</div>
                                </div>
                                <div class="td"><div class="prices__num">1 150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2020</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пломбирование временного зуба материалом Vitremer по 1 классу</div>
                                </div>
                                <div class="td"><div class="prices__num">2 000 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2030</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пломбирование временного зуба материалом Vitremer по 2 классу</div>
                                </div>
                                <div class="td"><div class="prices__num">2 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2041</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Первое посещение при пульпите- лечение временного зуба с наложением девитализирующей пасты</div>
                                </div>
                                <div class="td"><div class="prices__num">700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2042</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Второе посещение при пульпите  временного зуба с наложением временной пасты</div>
                                </div>
                                <div class="td"><div class="prices__num">1 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2043</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Оказание помощи при периодонтите</div>
                                </div>
                                <div class="td"><div class="prices__num">1 250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2032</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Первичное лечение 1 корневого канала временного зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">575 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2033</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пломбирование 1 корневого канала временного зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">690 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">7021</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Имплантация мембраны нерезорбируемой (+ 2 фиксатора)</div>
                                </div>
                                <div class="td"><div class="prices__num">36 800 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2050</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Временное пломбирование одного канала с несформированным корнем постоянного зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">860 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2060</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лечение стоматита(1 сеанс)</div>
                                </div>
                                <div class="td"><div class="prices__num">575 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2061</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Дополнительное консультативное посещение детского стоматолога</div>
                                </div>
                                <div class="td"><div class="prices__num">450 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2062</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Профессиональная коррекция гигиены полости рта у детей</div>
                                </div>
                                <div class="td"><div class="prices__num">900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2070</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Профилактическое запечатывание фиссур фторсодержащим материалом</div>
                                </div>
                                <div class="td"><div class="prices__num">1 150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2071</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">ломбирование постоянных зубов материалом Vitremer 1 класс</div>
                                </div>
                                <div class="td"><div class="prices__num">2 100 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2072</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пломбирование постоянных зубов материалом Vitremer 2 класс</div>
                                </div>
                                <div class="td"><div class="prices__num">2 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2073</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пломбирование постоянного зуба фотокомпозитным материалом 1 класс</div>
                                </div>
                                <div class="td"><div class="prices__num">2 550 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2074</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пломбирование постоянного зуба фотокомпозитным материалом с восстановлением 1 контактной поверхности</div>
                                </div>
                                <div class="td"><div class="prices__num">2 900 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2075</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Отсроченное лечение острого глубокого кариеса постоянного зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">1 750 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2012</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Использование коффердама</div>
                                </div>
                                <div class="td"><div class="prices__num">600 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2013</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лечение одного корневого канала с использованием антисептических средств</div>
                                </div>
                                <div class="td"><div class="prices__num">700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2014</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пломбирование одного корневого канала</div>
                                </div>
                                <div class="td"><div class="prices__num">700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2001</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Рекомендация по использованию зубной щетки </div>
                                </div>
                                <div class="td"><div class="prices__num">400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2002</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Рекомендация по использованию зубной пасты</div>
                                </div>
                                <div class="td"><div class="prices__num">450 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2021</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Пломбирование временного зуба фотокомпозитным материалом</div>
                                </div>
                                <div class="td"><div class="prices__num">2 550 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">2022</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Лечение поверхности кариеса у детей</div>
                                </div>
                                <div class="td"><div class="prices__num">1 500 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="profilaktika" class="prices-block__item">
                        <div class="prices-block__title">Профилактика</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">1030</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Профессиональная коррекция гигиены полости рта</div>
                                </div>
                                <div class="td"><div class="prices__num">1 150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">1020</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Гигиеническая чистка зубов перед посещением стоматолога</div>
                                </div>
                                <div class="td"><div class="prices__num">230 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">1010</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Профессиональная гигиена (один зуб) с использованием специальной аппаратуры</div>
                                </div>
                                <div class="td"><div class="prices__num">120 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">1019</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Консультация врача-стоматолога по подбору бальзама для десен</div>
                                </div>
                                <div class="td"><div class="prices__num">1 150 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">1040</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Профилактическая аппликация фтористого геля на все группы зубов с применением индивидуальной ложки </div>
                                </div>
                                <div class="td"><div class="prices__num">1 300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">1050</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Профилактическое покрытие  фторсодержащим препаратом (один зуб)</div>
                                </div>
                                <div class="td"><div class="prices__num">1 400 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">1080</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Глубокое фторирование (один зуб)</div>
                                </div>
                                <div class="td"><div class="prices__num">250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">1090</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Профилактическое запечатывание фиссур, покрытие герметиком</div>
                                </div>
                                <div class="td"><div class="prices__num">1 100 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">1092</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Снятие мягкого зубного налета и полирование (один зуб)</div>
                                </div>
                                <div class="td"><div class="prices__num">70 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">1093</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Профессиональная гигиена аппаратом AIR-FLOW (1 зуб)</div>
                                </div>
                                <div class="td"><div class="prices__num">140 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">1071</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Рекомендация врача-стоматолога по подбору зубной щетки</div>
                                </div>
                                <div class="td"><div class="prices__num">520 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">1073</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Рекомендация врача-стоматолога по подбору зубной пасты</div>
                                </div>
                                <div class="td"><div class="prices__num">575 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="rengen" class="prices-block__item">
                        <div class="prices-block__title">Рентген</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">30</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Исследование на цифровом ортопантомографе Оrthophos (ортопантомограмма, ТРГ, ППН)</div>
                                </div>
                                <div class="td"><div class="prices__num">950 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">39</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Диагностика методом конусно-лучевой компьютерной томографии</div>
                                </div>
                                <div class="td"><div class="prices__num">3 450 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">36</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Контрольный снимок после лечения</div>
                                </div>
                                <div class="td"><div class="prices__num">300 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">34</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Компьютерная визиография при постановке диагноза</div>
                                </div>
                                <div class="td"><div class="prices__num">450 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">31</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Распечатка снимка  на электронном  носителе</div>
                                </div>
                                <div class="td"><div class="prices__num">250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">33</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Распечатка снимка на бумажном носителе</div>
                                </div>
                                <div class="td"><div class="prices__num">250 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">32*</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Измерение параметров костной ткани в области 1 зуба </div>
                                </div>
                                <div class="td"><div class="prices__num">85 руб.</div></div>
                            </div>
                        </div>
                    </li>
                    <li id="prochie" class="prices-block__item">
                        <div class="prices-block__title">Прочие</div>
                        <div class="table">
                            <div class="trow trow--header">
                                <div class="td td--header">Код услуги</div>
                                <div class="td td--header">Наименование услуги</div>
                                <div class="td td--header">Цена</div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3131</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Адгезивный мост при отсутствии одного зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">20 700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3034</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Установка стекловолоконной ленты (1 см) в реставрации зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">950 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3035</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Объемное восстановление зуба</div>
                                </div>
                                <div class="td"><div class="prices__num">9 200 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3600</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Эстетико-функциональное восстановление зуба с разрушением одной поверхности</div>
                                </div>
                                <div class="td"><div class="prices__num">3 700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3601</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Эстетико-функциональное восстановление зуба с разрушением двух поверхностей</div>
                                </div>
                                <div class="td"><div class="prices__num">4 700 руб.</div></div>
                            </div>
                            <div class="trow">
                                <div class="td">
                                    <div class="prices__name">3602</div>
                                </div>
                                <div class="td">
                                    <div class="prices__name">Эстетико-функциональное восстановление зуба с разрушением трех поверхностей</div>
                                </div>
                                <div class="td"><div class="prices__num">6 650 руб.</div></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="section section-form pb_330">
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
                                                    <use xlink:href="/svg/sprite.svg#checkbox"></use>
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
 