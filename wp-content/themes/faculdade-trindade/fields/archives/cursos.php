<?php

	add_action( 'cmb2_admin_init', 'metaboxes_cursos' );

	function metaboxes_cursos() {

		// Detalhes do curso na home
		$cursos_item = new_cmb2_box( array(
			'id'            => 'cursos_item',
			'title'         => __( 'Detalhes do curso na home' ),
			'object_types'  => array( 'cursos192', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );

		$cursos_item->add_field( array(
			'name'       => __( 'Imagem do curso' ),
			'desc'       => __( 'Tamanho recomendado <strong>280x338</strong>' ),
			'id'         => 'wsg_cursos_item_img',
			'type' => 'file',
			'preview_size' => array( 280/1, 338/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$cursos_item->add_field( array(
			'name'       => __( 'Resumo do curso' ),
			'id'         => 'wsg_cursos_item_resumo',
			'type'       => 'wysiwyg',
		) );
		$cursos_item->add_field( array(
			'name'       => __( 'Link do curso' ),
			'id'         => 'wsg_cursos_item_link',
			'type'       => 'text',
		) );

	}

?>