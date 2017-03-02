<?php

/**
* Меню
**/
register_nav_menu ( 'menu' , 'Main menu' );

register_nav_menu ( 'menu_footer' , 'Footer menu' );


add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size ();

 /**
* Добавляем виджеты
**/
register_sidebar( array(
	'name'          => 'Sidebar',
	'id'            => 'sidebar',
	'before_widget' => '<div class="top_news_text">',
	'after_widget'  => '</div>',
	'before_title'  => '<h5>',
	'after_title'   => '</h5>',
	) );

 /**
* Стили и скрипты
**/

function register_styles() {
	wp_register_style('bootstrap', get_template_directory_uri() . '/libs/bootstrap/bootstrap-grid-3.3.1.min.css');
	wp_enqueue_style('bootstrap');

	wp_register_style('font-awesome', get_template_directory_uri() . '/libs/font-awesome-4.2.0/css/font-awesome.min.css');
	wp_enqueue_style('font-awesome');

	wp_register_style('fancybox', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.css');
	wp_enqueue_style('fancybox');

	wp_register_style('animate', get_template_directory_uri() . '/libs/animate.css-master/animate.min.css');
	wp_enqueue_style('animate');

	wp_register_style('owl', get_template_directory_uri() . '/libs/owl-carousel/css/owl.carousel.min.css');
	wp_enqueue_style('owl');

	wp_register_style('owl-theme', get_template_directory_uri() . '/libs/owl-carousel/css/owl.theme.default.css');
	wp_enqueue_style('owl-theme');

	wp_register_style('owl-theme', get_template_directory_uri() . '/libs/owl-carousel/css/owl.theme.default.css');
	wp_enqueue_style('owl-theme');

	wp_register_style('fonts', get_template_directory_uri() . '/css/fonts.css');
	wp_enqueue_style('fonts');

	wp_register_style('main_my', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('main_my');

	wp_register_style('media_my', get_template_directory_uri() . '/css/media.css');
	wp_enqueue_style('media_my');

	wp_register_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style');

}

add_action ( 'wp_enqueue_scripts' , 'register_styles' );

function load_my_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery' , get_template_directory_uri() . '/libs/jquery/jquery-3.1.1.min.js' );
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'jquery-mousewheel' , get_template_directory_uri() . '/libs/jquery-mousewheel/jquery.mousewheel.min.js' , array ( 'jquery' ) , null , false );
	wp_enqueue_script( 'jquery-mousewheel' );

	wp_register_script( 'fancybox' , get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.pack.js' , array ( 'jquery' ) , null , false  );
	wp_enqueue_script( 'fancybox' );

	wp_register_script( 'owl' , get_template_directory_uri() . '/libs/owl-carousel/js/owl.carousel.min.js' , array ( 'jquery' ) , null , false  );
	wp_enqueue_script( 'owl' );

	wp_register_script( 'common_my' , get_template_directory_uri() . '/libs/common/common.js' , array ( 'jquery' ) , null , false  );
	wp_enqueue_script( 'common_my' );

}

add_action ( 'wp_enqueue_scripts' , 'load_my_scripts' );