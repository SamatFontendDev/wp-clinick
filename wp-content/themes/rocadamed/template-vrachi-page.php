<!-- 
    Template name: Страница врачи
-->
<?php
get_header();
?>
    <section class="section doctors-page">
            <div class="container">
                <div class="breadcreams">
                    <a href="/" class="breadcreams__link">Главная /</a>
                    <a class="breadcreams__link breadcreams__link--not">Врачи</a>
                </div>
                <div class="section-title">Наши специалисты</div>
                <div class="specialists__text specialists__text_mb-80">
                    <div class="specialists__text-left">
                        <svg class="quotes quotes-blue">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/svg/sprite.svg#quotes"></use>
                        </svg>
                    </div>
                   <div>Врачи «Стоматологии Рокада-Мед» постоянно повышают квалификацию и осваивают новые методики лечения. Наша команда стоматологов всегда к вашим услугам!</div>
                </div>
            </div>
        </section>
        <section class="our-photo">
            <div class="container">
                <img class="doctoe-img" src="<?php echo get_template_directory_uri() ?>/imgs/pictures/doctors.jpeg" alt="">
            </div>
        </section>
        <section class="section pb_330">
            <div class="container">
                <div class="section-title">Сертификаты и специальности наших врачей</div>
                <ul class="doctors-list">
                    <?php
                        global $post;

                        $args = array(
                            'post_type' => 'doctors',
                            'publish' => true,
                            'posts_per_page' => 30,
                        );
                        get_posts();
                        $slider_docotrs = get_posts( $args );

                        foreach($slider_docotrs as $post) {
                            $desc = get_post_meta(get_the_ID(), 'doctor_desc', true);
                            $full_desc = get_post_meta(get_the_ID(), 'doctor_full_desc', true);
                            include(get_template_directory() . '/templates/content-doctor-page.php');
                        }

                        wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </section>
<?php
get_footer();
?>
 