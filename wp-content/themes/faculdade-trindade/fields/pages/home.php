<?php

	add_action( 'cmb2_admin_init', 'metaboxes_home' );

	function metaboxes_home() {

		// Método de especificação de página
		$homePage = get_page_by_path( 'home', OBJECT, 'page' );

		$post_id;

		if (isset($_GET['post'])) {
			$post_id = $_GET['post'];
		}else if(isset($_POST['post_ID'])) {
			$post_id = $_POST['post_ID'];
		}
		if( !isset( $post_id ) ) return;

		if($homePage && $homePage->ID != $post_id){
			return;
		}

		// Metabox Cabeçalho
		$header = new_cmb2_box( array(
			'id'            => 'header',
			'title'         => __( 'Cabeçalho' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$header_btns = $header->add_field( array(
			'name'			=> __( 'Botões no cabeçalho' ),
			'id'            => 'header_btns',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$header->add_group_field( $header_btns, array(
			'name'       => __( 'Link do item' ),
			'id'         => 'wsg_header_btns_link',
			'type' => 'text',
		) );
		$header->add_group_field( $header_btns, array(
			'name'       => __( 'Texto do item' ),
			'id'         => 'wsg_header_btns_texto',
			'type' => 'text',
		) );

		// Metabox Banner
		$banner = new_cmb2_box( array(
			'id'            => 'banners',
			'title'         => __( 'Banner' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );
		$banner->add_field( array(
			'name'       => __( 'Imagem de fundo da seção' ),
			'desc'       => __( 'Tamanho recomendado <strong>1920x800</strong>' ),
			'id'         => 'wsg_banner_img_bg',
			'type' => 'file',
			'preview_size' => array( 1920/5, 800/5 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$banner->add_field( array(
			'name'       => __( 'Sobretítulo da seção' ),
			'id'         => 'wsg_banner_sobretitulo',
			'type'       => 'text',
		) );
		$banner->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_banner_titulo',
			'type'       => 'text',
		) );
		$banner->add_field( array(
			'name'       => __( 'Texto da seção' ),
			'id'         => 'wsg_banner_texto',
			'type'       => 'wysiwyg',
		) );
		$banner->add_field( array(
			'name'       => __( 'Texto destacado da seção' ),
			'id'         => 'wsg_banner_texto_destacado',
			'type'       => 'text',
		) );
		$banner->add_field( array(
			'name'       => __( 'Link do botão 1 da seção' ),
			'id'         => 'wsg_banner_btn_link_1',
			'type'       => 'text',
		) );
		$banner->add_field( array(
			'name'       => __( 'Texto do botão 1 da seção' ),
			'id'         => 'wsg_banner_btn_texto_1',
			'type'       => 'text',
		) );

		$banner->add_field( array(
			'name'       => __( 'Iframe de vídeo da seção' ),
			'id'         => 'wsg_banner_video',
			'type'       => 'textarea_code',
		) );


		// Metabox Listagem de Professores
		$professores_listagem = new_cmb2_box( array(
			'id'            => 'professores_listagem',
			'title'         => __( 'Listagem de Professores' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$professores_listagem->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_professores_listagem_titulo',
			'type'       => 'text',
		) );
		$professores_listagem->add_field( array(
			'name'       => __( 'Subtítulo da seção' ),
			'id'         => 'wsg_professores_listagem_subtitulo',
			'type'       => 'text',
		) );
		$professores_listagem->add_field( array(
			'name'    => __( 'Listagem de professores' ),
			'desc'    => __( 'Arraste os professores da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos professores na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_professores_listagem_na_home',
			'type'    => 'custom_attached_posts',
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => -1,
					'post_type'      => 'equipe192',
				),
			),
		) );
		$professores_listagem->add_field( array(
			'name'       => __( 'link do botão da seção' ),
			'id'         => 'wsg_professores_listagem_btn_link',
			'type'       => 'text',
		) );
		$professores_listagem->add_field( array(
			'name'       => __( 'Texto do botão da seção' ),
			'id'         => 'wsg_professores_listagem_btn_texto',
			'type'       => 'text',
		) );

		// Metabox Disciplinas
		$disciplinas = new_cmb2_box( array(
			'id'            => 'disciplinas',
			'title'         => __( 'Disciplinas' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$disciplinas->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_disciplinas_titulo',
			'type'       => 'text',
		) );
		$disciplinas->add_field( array(
			'name'       => __( 'Subtítulo da seção' ),
			'id'         => 'wsg_disciplinas_subtitulo',
			'type'       => 'text',
		) );
		$disciplinas->add_field( array(
			'name'    => __( 'Listagem de disciplinas' ),
			'desc'    => __( 'Arraste os disciplinas da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos disciplinas na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_disciplinas_na_home',
			'type'    => 'custom_attached_posts',
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => -1,
					'post_type'      => 'disciplinas192',
				),
			),
		) );


		// Metabox Chamada para ação
		$call_to_action = new_cmb2_box( array(
			'id'            => 'call_to_action',
			'title'         => __( 'Chamada para ação' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$call_to_action->add_field( array(
			'name'       => __( 'Imagem de fundo da seção' ),
			'desc'       => __( 'Tamanho recomendado <strong>1920x890</strong>' ),
			'id'         => 'wsg_action_img_bg',
			'type' => 'file',
			'preview_size' => array( 1920/1, 890/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$call_to_action->add_field( array(
			'name'       => __( 'Sobretítulo da seção' ),
			'id'         => 'wsg_call_to_action_sobretitulo',
			'type'       => 'text',
		) );
		$call_to_action->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_call_to_action_titulo',
			'type'       => 'text',
		) );
		$call_to_action->add_field( array(
			'name'       => __( 'Link do botão' ),
			'id'         => 'wsg_call_to_action_link',
			'type' => 'text',
		) );
		$call_to_action->add_field( array(
			'name'       => __( 'Texto do botão' ),
			'id'         => 'wsg_call_to_action_texto',
			'type' => 'text',
		) );
		$call_to_action->add_field( array(
			'name'       => __( 'Texto ao lado da imagem' ),
			'id'         => 'wsg_call_to_action_img_titulo',
			'type'       => 'text',
		) );
		$call_to_action->add_field( array(
			'name'       => __( 'Imagem da seção' ),
			'desc'       => __( 'Tamanho recomendado <strong>200x400</strong>' ),
			'id'         => 'wsg_action_img',
			'type' => 'file',
			'preview_size' => array( 200/1, 400/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );


		// Metabox Depoimentos
		$depoimentos = new_cmb2_box( array(
			'id'            => 'depoimentos',
			'title'         => __( 'Depoimentos' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$depoimentos->add_field( array(
			'name'       => __( 'Imagem da seção' ),
			'desc'       => __( 'Tamanho recomendado <strong>250x250</strong>' ),
			'id'         => 'wsg_depoimentos_img',
			'type' => 'file',
			'preview_size' => array( 250/1, 250/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$depoimentos->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_depoimentos_titulo',
			'type'       => 'text',
		) );
		$depoimentos->add_field( array(
			'name'    => __( 'Listagem de depoimentos' ),
			'desc'    => __( 'Arraste os depoimentos da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos depoimentos na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_depoimentos_na_home',
			'type'    => 'custom_attached_posts',
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => -1,
					'post_type'      => 'depoimentos192',
				),
			),
		) );

		// Metabox Cursos
		$cursos = new_cmb2_box( array(
			'id'            => 'cursos',
			'title'         => __( 'Cursos' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$cursos->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_cursos_titulo',
			'type'       => 'text',
		) );
		$cursos->add_field( array(
			'name'    => __( 'Listagem de cursos' ),
			'desc'    => __( 'Arraste os cursos da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos cursos na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_cursos_na_home',
			'type'    => 'custom_attached_posts',
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => -1,
					'post_type'      => 'cursos192',
				),
			),
		) );

	}

?>