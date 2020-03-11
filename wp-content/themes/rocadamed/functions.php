<?php
// Подключение стилей и скриптов

function rocada_clinic_scripts() {



    wp_enqueue_style( 'rocada-clinic-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' );
    wp_enqueue_style( 'rocada-clinic-twentytwenty', get_template_directory_uri() . '/css/twentytwenty.css' );
    wp_enqueue_style( 'rocada-clinic-OpenSans', get_template_directory_uri() . '/fonts/OpenSans/stylesheet.css' );
    wp_enqueue_style( 'rocada-clinic-Merriweather', get_template_directory_uri() . '/fonts/Merriweather/stylesheet.css' );
    wp_enqueue_style( 'rocada-clinic-slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
    wp_enqueue_style( 'rocada-clinic-slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
    wp_enqueue_style( 'rocada-clinic-slick-fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css' );
    wp_enqueue_style( 'rocada-clinic-main', get_template_directory_uri() . '/style.css' );
    

    // wp_enqueue_script( 
    //     'jquery', 
    //     'https://code.jquery.com/jquery-3.4.1.min.js', 
    //     array(), 
    //     '', 
    //     true );

    wp_enqueue_script( 
        'mask', 
        'https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js', 
        array('jquery'), 
        '', 
        true );
    wp_enqueue_script( 
        'fancybox', 
        'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', 
        array('jquery'), 
        '', 
        true );

    wp_enqueue_script( 
        'slick', 
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', 
        array('jquery'), 
        '', 
        true );
    
    wp_enqueue_script( 
        'event-move', 
        get_template_directory_uri() . '/js/jquery.event.move.js', 
        array('jquery'), 
        '', 
        true );
    wp_enqueue_script( 
        'twenty', 
        get_template_directory_uri() . '/js/jquery.twentytwenty.js', 
        array('jquery', 'event-move'), 
        '', 
        true );
    

    wp_enqueue_script( 
        'script', 
        get_template_directory_uri() . '/js/script.js', 
        array('jquery', 'slick'), 
        '', 
        true );

    wp_enqueue_script( 
        'ajax', 
        get_template_directory_uri() . '/js/ajax.js', 
        array('jquery'), 
        '', 
        true );
    
}

add_action( 'wp_enqueue_scripts', 'rocada_clinic_scripts' );

// Регистрация кастомного типа постов с врачами
add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('doctors', array(
		'labels'             => array(
			'name'               => 'Врачи', // Основное название типа записи
			'singular_name'      => 'Врач', // отдельное название записи типа Book
			'add_new'            => 'Добавить нового',
			'add_new_item'       => 'Добавить нового врача',
			'edit_item'          => 'Редактировать врача',
			'new_item'           => 'Новый врач',
			'view_item'          => 'Посмотреть врача',
			'search_items'       => 'Найти врача',
			'not_found'          =>  'Врачей не найдено',
			'not_found_in_trash' => 'В корзине врачей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Врачи'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array(
            'title',
            'editor',
            // 'author',
            'thumbnail',
            'excerpt',
            // 'comments'
            )
	) );
}


add_action('init', 'my_custom_works');
function my_custom_works(){
	register_post_type('works', array(
		'labels'             => array(
			'name'               => 'Клинические случаи', // Основное название типа записи
			'singular_name'      => 'Клинический случай', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый клинический случай',
			'edit_item'          => 'Редакsтировать клинический случай',
			'new_item'           => 'Новый врач клинический случай',
			'view_item'          => 'Посмотреть клинический случай',
			'search_items'       => 'Найти клинический случай',
			'not_found'          =>  'Клинических случаев не найдено',
			'not_found_in_trash' => 'В корзине клинических случаев не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Клинические случаи'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array(
            'title',
            // 'editor',
            // 'author',
            'thumbnail',
            // 'excerpt',
            // 'comments'
            )
	) );
}



// Поддержка картинок превью для постов
add_theme_support( 'post-thumbnails' );

if ( function_exists('add_image_size') ){
    add_image_size('doctor-slider', 200, 200, true);
}

// Поддержка меню
add_theme_support( 'menus' );

// redux framework
require get_template_directory() . '/inc/options-panel.php';

// обрезать количество символов для краткого описания записи
function the_truncated_post($symbol_amount) {
	$filtered = strip_tags( preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))) );
	echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...';
}