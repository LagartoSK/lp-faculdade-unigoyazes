<?php

	// Está função registra o posttype videos192
	function registrar_cpt_videos(){

		// Cursos
		register_post_type('cursos192',
			array(
				'labels' 			=> array(
					'name' 			=> __('Cursos'),
					'singular_name'	=> _x('curso', 'post type singular name'),
					'add_new'		=> _x('Novo curso', 'portfolio item'),
					'add_new_item'	=> _x('Adicionar novo curso', 'portfolio item'),
					'edit_item'		=> _x('Editar curso', 'portfolio item'),
				),
				'rewrite' 			=> array('slug' => 'cursos'),
				'public' 			=> true,
				'has_archive' 		=> true,
				'menu_icon' 		=> 'dashicons-admin-post',
				'supports' 			=> array('title', 'page-attributes'),
			)
		);
	}

	add_action('init', 'registrar_cpt_videos');



?>