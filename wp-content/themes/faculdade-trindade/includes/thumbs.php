<?php

	// tamanhos dinâmicos para thumbs
	function tamanhos_thumbs(){

		// Ativando suporte para imagem destacada
		add_theme_support('post-thumbnails');
		add_image_size( '1920x890', 1920, 890, true );
		add_image_size( '1920x800', 1920, 800, true );
		add_image_size( '550x550', 550, 550, true );
		add_image_size( '280x338', 280, 338, true );
		add_image_size( '200x400', 200, 400, true );
		add_image_size( '100x100', 100, 100, true );
		add_image_size( '64x64', 64, 64, true );
		add_image_size( '50x50', 50, 50, true );
	}
	add_action('after_setup_theme', 'tamanhos_thumbs');

?>