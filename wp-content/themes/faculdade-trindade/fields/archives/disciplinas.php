<?php

	add_action( 'cmb2_admin_init', 'metaboxes_disciplinas' );

	function metaboxes_disciplinas() {
		$disciplina_item = new_cmb2_box( array(
			'id'            => 'disciplina_item',
			'title'         => __( 'Detalhes da disciplina' ),
			'object_types'  => array( 'disciplinas192', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );


		$disciplina_item->add_field( array(
			'name'       => __( 'Imagem da disciplina' ),
			'desc'       => __( 'Tamanho recomendado <strong>100x100</strong>' ),
			'id'         => 'wsg_disciplina_item_img',
			'type' => 'file',
			'preview_size' => array( 100/1, 100/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );

		$disciplina_item->add_field( array(
			'name'       => __( 'Resumo da disciplina' ),
			'id'         => 'wsg_disciplina_item_resumo',
			'type' => 'wysiwyg',
		) );


	}

?>