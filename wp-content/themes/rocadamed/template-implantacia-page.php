<!-- 
    Template name: Страница имплантация
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
                <h1 class="title title--service">Имплантация зубов</h1>
                <div class="specialists__text">
                    <div class="specialists__text-left">
                        <svg class="quotes quotes-blue">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                        </svg>
                    </div>
                   <div><?php echo $redux_demo['implantacia-frist-text'] ?></div>
                </div>
                <div class="service__btns">
                    <div class="hero-btn sign-up">КОНСУЛЬТАЦИЯ</div>
                    <a href="/ceny#implantacia" class="service-btn">ЦЕНЫ</a>
                    <a href="#doctors" class="service-btn scroll-btn">ВРАЧИ</a>
                </div>
            </div>
        </section>
        <section id="doctors" class="section doctors">
            <div class="container">
                <h2 class="section-title-s section-title-s-mb-50"><?php echo $redux_demo['implantacia-second-title'] ?></h2>
                <div class="doctors__content">
                    <div class="doctors__col">
                        <div class="specialists__text">
                            <div class="specialists__text-left">
                                <svg class="quotes quotes-blue">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                                </svg>
                            </div>
                           <div>
                              <p><?php echo $redux_demo['implantacia-second-text'] ?></p>
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
                <h2 class="section-title-s section-title-s-mb-50"><?php echo $redux_demo['implantacia-works-title'] ?></h2>
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
                               <?php echo $redux_demo['implantacia-works-text'] ?>
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
                                   
                                    <?php
                                    global $post;
                                    $news_args = array(
                                        'publish' => true,
                                        'category_name' => 'works-implantacia',
                                    );
                                    $myposts = get_posts($news_args);
                                    foreach( $myposts as $post ){
                                        setup_postdata( $post );
                                        ?>
                                        <li class="reviews-slider__item">
                                            <div class="reviews-slider__content">
                                                <div class="reviews-slider__ava">
                                                    <img src="<?php echo get_template_directory_uri() ?>/imgs/pictures/small_img_img_doctors_1_3.jpg" alt="" class="reviews-slider__img">
                                                </div>
                                                <div class="reviews-slider__info">
                                                    <div class="reviews-slider__title"><?php the_title(); ?></div>
                                                    <div class="reviews-slider__row">
                                                        <div class="reviews-slider__col">
                                                            <div>Срок лечения</div>
                                                            <div><?php echo get_post_meta( $post->ID, 'period', true );?></div>
                                                        </div>
                                                        <div class="reviews-slider__col">
                                                            <div>Сумма лечения</div>
                                                            <div><span><?php echo get_post_meta( $post->ID, 'amount', true );?></span> руб.</div>
                                                        </div>
                                                    </div>
                                                    <div class="reviews-slider__photos">
                                                        <?php
                                                            if ( get_post_meta( get_the_ID(), 'pictures', false ) ){
                                                                $image_array = get_post_meta( get_the_ID(), 'pictures', false );
                                                            }
                                                            if ( $image_array ) {
                                                            
                                                                foreach ( $image_array as $image ) {
                                                                    
                                                                    $thumbimg = wp_get_attachment_image( $image['ID'], 'thumbnail');
                                                                    $fullimg = pods_image_url( $image['ID'], 'large');
                                                                    echo    '<div class="reviews-slider__photo-wrap">
                                                                                <div class="reviews-slider__photo">
                                                                                    <a href="'.  $fullimg . '" data-fancybox="gallery-service-photos" data-caption="Caption for single image">
                                                                                        <img src="'.  $fullimg . '" alt="" class="reviews-slider__img">
                                                                                    </a>
                                                                                </div>
                                                                            </div>';
                                                                }
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php 
                                    }
                                    wp_reset_postdata();
                                    ?>

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
                <div class="section-title-s section-title-s-mb-50">Основные этапы имплантации</div>
                <ul class="stages__list">
                <?php
                    for ($i=0; $i < count($redux_demo['implatacia-opt-slides']) ; $i++) { 
                        ?>
                            <li class="stages__item">
                                <div class="stage">
                                <div class="stage-left">
                                        <div class="stage__pic">
                                            <img src="<?php echo $redux_demo['implatacia-opt-slides'][$i]['image']?>" alt="<?php echo $redux_demo['implatacia-opt-slides'][$i]['title'] ?>" class="stage__img">
                                        </div>
                                    </div>
                                    <div class="stage__desc">
                                        <div class="stage__title"><?php echo $redux_demo['implatacia-opt-slides'][$i]['title'] ?></div>
                                        <div class="stage__text"><?php echo $redux_demo['implatacia-opt-slides'][$i]['description'] ?></div>
                                    </div>
                                </div>
                            </li>
                        <?
                    }
                    ?>
                </ul>
                <div class="stages-subtitle">В зависимости от клинической ситуации необходимо проведение:</div>
                <div class="stages-text"></div>
                <ul class="additional-list">
                    <li class="additional__item">
                        <a href="/2020/02/27/cинус-лифтинг/" class="additional__link">Синус-лифтинг</a>
                    </li>
                    <li class="additional__item">
                        <a href="/2020/02/20/костная-пластика/" class="additional__link">Костная пластика</a>
                    </li>
                    <li class="additional__item">
                        <a href="/2020/03/10/наращивание-десны/" class="additional__link">Наращивание десны</a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="warranty" class="section warranty">
            <div class="container">
                <div class="section-title-s section-title-s-mb-50"><?php echo $redux_demo['advantages-title'] ?></div>
                <div class="implantation">
                    <ul class="implantation__list">
                        <?php
                            for ($i=0; $i < count($redux_demo['implantacia-opt-multitext']) ; $i++) { 
                                ?>
                                    <li class="implantation__item">
                                        <div class="implantation__text">
                                            <div class="implantation__title"><?php echo $redux_demo['implantacia-opt-multitext'][$i] ?></div>
                                            <div class="implantation__desc"></div>
                                        </div>
                                    </li>
                                <?
                            }
                            ?>
                       </ul>
                </div>
            </div>
        </section>
        <section id="advice" class="section advice advice--white">
            <div class="container">
                <h1 class="section-title-s section-title-s_white"><?php echo $redux_demo['implantacia-doctor-recomendation-title'] ?></h1>
                <div class="advice__text">
                    <div class="advice__col">
                        <svg class="quotes">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                        </svg>
                    </div>
                    <div class="advice__col">
                        <p><?php echo $redux_demo['implantacia-doctor-recomendation-text'] ?></p>
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
                    <div class="doctor-advice__title">Более подробную информацию о правилах ухода вам расскажет врач на индивидуальной консультации.</div>
                  
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