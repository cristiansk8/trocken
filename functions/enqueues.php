<?php

function bst_enqueues() {

	/* Styles */
	/*
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/css/vendors/bootstrap.min.css', false, '3.3.4', null);
	wp_enqueue_style('bootstrap-css');
*/ 

  	wp_register_style('bst-css', get_template_directory_uri() . '/assets/css/vendors/bst.css', false, null);
	wp_enqueue_style('bst-css');

	wp_register_style('slick-css', get_template_directory_uri() . '/assets/css/vendors/slick.css', false, null);
	wp_enqueue_style('slick-css');

	wp_register_style('slick-theme-css', get_template_directory_uri() . '/assets/css/vendors/slick-theme.css', false, null);
	wp_enqueue_style('slick-theme-css');

	wp_register_style('animate-css', get_template_directory_uri() . '/assets/css/vendors/animate.css', false, null);
	wp_enqueue_style('animate-css');

	wp_register_style('home-css', get_template_directory_uri() . '/assets/css/vendors/home.css', false, null);
	wp_enqueue_style('home-css');


	wp_register_style('estiloMenus', get_template_directory_uri() . '/assets/css/style_personalizados/estiloMenus.css', false, null);
	wp_enqueue_style('estiloMenus');

	wp_register_style('estiloLading', get_template_directory_uri() . '/assets/css/style_personalizados/lading/estiloLading.css', false, null);
	wp_enqueue_style('estiloLading');

	wp_register_style('estiloCaracteristicas', get_template_directory_uri() . '/assets/css/style_personalizados/caracteriticas/estiloCaracteristicas.css', false, null);
	wp_enqueue_style('estiloCaracteristicas');

	wp_register_style('estiloVideos', get_template_directory_uri() . '/assets/css/style_personalizados/video/estiloVideos.css', false, null);
	wp_enqueue_style('estiloVideos');

	wp_register_style('estiloUbicacion', get_template_directory_uri() . '/assets/css/style_personalizados/ubicacion/ubicacion.css', false, null);
	wp_enqueue_style('estiloUbicacion');

	wp_register_style('general-css', get_template_directory_uri() . '/assets/css/style_personalizados/general.css', false, null);
	wp_enqueue_style('general-css');

	wp_register_style('galeria-css', get_template_directory_uri() . '/assets/css/style_personalizados/galeria/galeria.css', false, null);
	wp_enqueue_style('galeria-css');
	
		


	/* Scripts */

	wp_enqueue_script( 'jquery' );
	/* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
	https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */

  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', false, null, true);
	wp_enqueue_script('modernizr');
 /*
  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');
*/
	wp_register_script('bst-js', get_template_directory_uri() . '/js/bst.js', false, null, true);
	wp_enqueue_script('bst-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}







}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);
