<?php

add_theme_support('post-thumbnails');

function optionVideoRegister(){
	$nomeSingular = 'Video';
	$nomePlural = 'Videos';
	$description = 'Videos da webserie Triggers';

	$labels = array(
		'name' => $nomePlural,
		'name_singular' => $nomeSingular,
		'add_new_item' => 'Adicionar novo Video'
	);

	$supports = array(
		'title',
		'editor',
		'thumbnail'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'description' => $description,
		'menu_icon' => 'dashicons-video-alt',
		'supports' => $supports
	);

	register_post_type('videos', $args);	
};

add_action('init', 'optionVideoRegister');

function mainMenuRegister(){
	register_nav_menu('header-menu', 'main-menu');
};

add_action('init', 'mainMenuRegister');


function getCustomTitle(){
	bloginfo('name');
	if( !is_home() ) echo ' | ';
	the_title();
};

function registerVideoTaxonomy(){
	$nomeSingular = 'Tipo do Vídeo';
	$nomePlural = 'Tipos do Vídeo';

	$labels = array(
		'name' => $nomePlural,
		'singular_name' => $nomeSingular,
		'edit_item' => 'Editar o tipo do '.$nomeSingular,
		'add_new_item' => 'Adicionar novo tipo de '.$nomeSingular
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'hierarchical' => true
	);

	register_taxonomy('tipo', 'videos', $args);
};

add_action('init', 'registerVideoTaxonomy');

function preenche_conteudo_infos_video(){ 
	get_template_part( 'partials/admin', 'video_meta_box' );
}


function registerMetaBox(){
	add_meta_box(
		'video-infos',
		'Dados do Video',
		'preenche_conteudo_infos_video',
		'videos',
		'advanced',
		'high'
	);	
}

add_action('add_meta_boxes','registerMetaBox');


function updateVideoMetas( $post_id ){
	if (isset($_POST['video_link'])){
		update_post_meta( $post_id, 'video_link', sanitize_text_field($_POST['video_link']));
	}

	if (isset($_POST['video_data'])){
		update_post_meta( $post_id, 'video_data', sanitize_text_field($_POST['video_data']));
	}

	if (isset($_POST['video_location'])){
		update_post_meta( $post_id, 'video_location', sanitize_text_field($_POST['video_location']));
	}

	if (isset($_POST['video_director'])){
		update_post_meta( $post_id, 'video_director', sanitize_text_field($_POST['video_director']));
	}	
}
add_action('save_post','updateVideoMetas');