<?php
	//Bootstrap =======================================================
	wp_enqueue_style( 'crafter_bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.1', 'all');
	//=================================================================

	//Flickity =======================================================
	wp_enqueue_style( 'crafter_flickity', get_template_directory_uri() . '/css/flickity.css', array(), '1.1.1', 'all');
	//=================================================================

	//Jquery Fancybox =======================================================
	wp_enqueue_style( 'flipgallery_fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), '2.1.5', 'all');
	//=================================================================

	//Animate =======================================================
	wp_enqueue_style( 'flipgallery_animate', get_template_directory_uri() . '/css/jquery.animate.css', array(), '1.0.0', 'all');
	//=================================================================

	//PhotoSwipe =======================================================
	wp_enqueue_style( 'crafter_photo_swipe', get_template_directory_uri() . '/css/photoswipe.css', array(), '4.1.1', 'all');
	wp_enqueue_style( 'crafter_photo_swipe_default', get_template_directory_uri() . '/css/default-skin/default-skin.css', array(), '4.1.1', 'all');
	//=================================================================

	//Mark Font =======================================================
	wp_enqueue_style( 'crafter_triggers-font', get_template_directory_uri() . '/css/fonts/font.css', array(), '1.0', 'all');
	//=================================================================	

	//Google Font =======================================================
	wp_enqueue_style( 'crafter_google-font', '//fonts.googleapis.com/css?family=Ubuntu:300,400,700', array(), '1.0', 'all');
	//=================================================================

	wp_enqueue_style( 'crafter_style', get_stylesheet_uri() );

?>
