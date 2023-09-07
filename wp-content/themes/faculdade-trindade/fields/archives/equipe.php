<?php

	add_action( 'cmb2_admin_init', 'metaboxes_equipe' );

	function metaboxes_equipe() {
		$equipe_item = new_cmb2_box( array(
			'id'            => 'equipe_item',
			'title'         => __( 'Detalhes do professor(a)' ),
			'object_types'  => array( 'equipe192', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );

		$equipe_item->add_field( array(
			'name'       => __( 'Imagem do professor(a)' ),
			'desc'       => __( 'Tamanho recomendado <strong>280x338</strong>' ),
			'id'         => 'wsg_equipe_item_img',
			'type' => 'file',
			'preview_size' => array( 280/1, 338/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$equipe_item->add_field( array(
			'name'       => __( 'Resumo do professor(a)' ),
			'id'         => 'wsg_equipe_item_resumo',
			'type'       => 'wysiwyg',
		) );
		$equipe_item->add_field( array(
			'name'       => __( 'Link de saiba mais do professor(a)' ),
			'id'         => 'wsg_equipe_item_link',
			'type'       => 'text',
		) );

	}

?>