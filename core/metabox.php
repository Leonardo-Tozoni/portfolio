<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://metabox.io/docs/registering-meta-boxes/
 */


add_filter( 'rwmb_meta_boxes', 'alp_register_meta_seguros' );

/**
 * Register meta boxes
 *
 * Remember to change "alp" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function alp_register_meta_seguros( $meta_boxes )
{
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = '';

	// metabox seguros 
	$meta_boxes[] = array(
		'id'         => 'servicos',
		'title'      => __( 'Informações sobre o serviço:', 'man' ),
		'post_types' => array( 'seguros' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,

		'fields'     => array(
			// Heading
			array(
				'type' => 'heading',
				'name' => 'Vitrine do serviço',
				'desc' => 'Informações relacionadas a vititrine do serviço',
			),
			// IMAGE ADVANCED
			array(
				'name'             => __( 'Icone:', 'man' ),
				'id'               => "seguros_icone",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
				'desc'						=> 'icone em png com altura entre 17px e 22px'
			),
			// TEXT
			array(
				'name'  => __( 'Resumo sobre o serviço:', 'man' ),
				'id'    => "seguros_resumo",
				'type'  => 'textarea',
				'rows'  => 2
			),

			// Heading
			array(
				'type' => 'heading',
				'name' => 'Página serviço',
				'desc' => 'Informações da página do serviço',
			),
			// IMAGE ADVANCED
			array(
				'name'             => __( 'Icone para página do serviço:', 'man' ),
				'id'               => "seguros_icone-single",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
				'desc'						=> 'icone em png com altura de 42px aproximadamente'
			),
			// TEXT
			
			// TEXTAREA
			array(
				'name'  => __( 'Texto Inicial:', 'man' ),
				'id'    => "seguros_texto-inicial",
				'type'  => 'textarea',
				'rows'  => 3
			),
			// TEXTAREA
			array(
				'name'  => __( 'Sobre o seguro:', 'man' ),
				'id'    => "seguros_sobre",
				'type'  => 'wysiwyg',
				'options' => array(
					'textarea_rows' => 10,
				),
			),

			// // Heading
			// array(
			// 	'type' => 'heading',
			// 	'name' => 'Vantagens',
			// 	'desc' => 'vantagens deste seguro',
			// ),
			// // TEXTlist
			// array(
			// 	'name'  => __( 'Vantagens:', 'man' ),
			// 	'id'    => "seguros_vantagens",
			// 	'type'  => 'text_list',
			// 	'clone' => true,
			// 	'options' => array(
			// 		'Ex.: Atendimento especializado para uma contratação rápida e segura.'      => 'Vantagem:',
			// 	),
			// ),
			// // Heading
			// array(
			// 	'type' => 'heading',
			// 	'name' => 'Cobertura Básica',
			// ),
			// // Group
			array(
				'id'     => 'seguros_cobertura',
				'type'   => 'group',
				'clone'  => true,
				'sort_clone' => true,
				'fields' => array(
					// array(
					// 	'name' => 'Cobertura',
					// 	'id'   => 'seguros_cobertura-text',
					// 	'type' => 'text',
					// ),
					// array(
					// 	'name'             => __( 'Icone cobertura:', 'man' ),
					// 	'id'               => "seguros_cobertura-icone",
					// 	'type'             => 'image_advanced',
					// 	'max_file_uploads' => 1,
					// ),
					// array(
					// 	'name'             => __( 'Informações sobre:', 'man' ),
					// 	'id'               => "seguros_cobertura-sobre",
					// 	'type'             => 'textarea',
					// 	'rows' => 2,
					// )						
				),
			),

			// // Heading
			// array(
			// 	'type' => 'heading',
			// 	'name' => 'Cobertura Adicionais',
			// ),
			// // Group
			// array(
			// 	'id'     => 'seguros_adicionais',
			// 	'type'   => 'group',
			// 	'clone'  => true,
			// 	'sort_clone' => true,
			// 	'fields' => array(
			// 		array(
			// 			'name' => 'Cobertura',
			// 			'id'   => 'seguros_adicionais-text',
			// 			'type' => 'text',
			// 		),
			// 		array(
			// 			'name'             => __( 'Icone cobertura:', 'man' ),
			// 			'id'               => "seguros_adicionais-icone",
			// 			'type'             => 'image_advanced',
			// 			'max_file_uploads' => 1,
			// 		),
			// 		array(
			// 			'name'             => __( 'Informações sobre:', 'man' ),
			// 			'id'               => "seguros_adicionais-sobre",
			// 			'type'             => 'textarea',
			// 			'rows' => 2,
			// 		)						
			// 	),
			// ),


			// // Heading
			// array(
			// 	'type' => 'heading',
			// 	'name' => 'Assistências',
			// ),
			// // Group
			// array(
			// 	'id'     => 'seguros_assistencia',
			// 	'type'   => 'group',
			// 	'clone'  => true,
			// 	'sort_clone' => true,
			// 	'fields' => array(
			// 		array(
			// 			'name' => 'Assistência:',
			// 			'id'   => 'seguros_assistencia-text',
			// 			'type' => 'text',
			// 		),
			// 		array(
			// 			'name'             => __( 'Icone assistência:', 'man' ),
			// 			'id'               => "seguros_assistencia-icone",
			// 			'type'             => 'image_advanced',
			// 			'max_file_uploads' => 1,
			// 		),
			// 		array(
			// 			'name'             => __( 'Informações sobre:', 'man' ),
			// 			'id'               => "seguros_assistencia-sobre",
			// 			'type'             => 'textarea',
			// 			'rows' => 2,
			// 		)						
			// 	),
			// ),

			// // Heading
			// array(
			// 	'type' => 'heading',
			// 	'name' => 'Observações',
			// ),
			// // TEXTAREA
			// array(
			// 	'name'  => __( 'Observações:', 'man' ),
			// 	'id'    => "seguros_observacao",
			// 	'type'  => 'wysiwyg',
			// 	'options' => array(
			// 		'textarea_rows' => 5,
			// 	),
			// ),
			// // Link
			// array(
			// 	'name'  => __( 'Link do botão de observações:', 'man' ),
			// 	'id'    => "seguros_observacao-link",
			// 	'type'  => 'text'
			// ),

			// // Heading
			// array(
			// 	'type' => 'heading',
			// 	'name' => 'FAQ do Seguro',
			// ),
			// // TEXTlist
			// array(
			// 	'name'  => __( 'FAQ do seguro:', 'man' ),
			// 	'id'    => "seguros_faq",
			// 	'type'  => 'text_list',
			// 	'clone' => true,
			// 	'options' => array(
			// 		'Ex.: Cobertura de Replantio'      => 'Tema:',
			// 		'Ex.: Esta cobertura visa indenizar o replantio total ...' => 'Resposta:'
			// 	),
			// ),
			// // IMAGE ADVANCED
			// array(
			// 	'name'             => __( 'Primeira Imagem de fundo:', 'man' ),
			// 	'id'               => "seguros_imagem-fundo-1",
			// 	'type'             => 'image_advanced',
			// 	'max_file_uploads' => 1,
			// ),
			// // IMAGE ADVANCED
			// array(
			// 	'name'             => __( 'Segunda Imagem de fundo:', 'man' ),
			// 	'id'               => "seguros_imagem-fundo-2",
			// 	'type'             => 'image_advanced',
			// 	'max_file_uploads' => 1,
			// 	'desc'   => 'adicionar somente se houver a lista de vantagens deste seguro'
			// ),

		),
	);

	// metabox depoimentos 
	$meta_boxes[] = array(
		'id'         => 'depoimentos',
		'title'      => __( 'Informações sobre o depoimento:', 'man' ),
		'post_types' => array( 'depoimentos' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
				// IMAGE ADVANCED
				array(
					'name'             => __( 'Foto da pessoa:', 'man' ),
					'id'               => "depoimentos_imagem",
					'type'             => 'image_advanced',
					'max_file_uploads' => 1,
				),
				// TEXT
				array(
					'name'  => __( 'Profissão:', 'man' ),
					'id'    => "depoimentos_profissao",
					'type'  => 'text',
				),
				// select
				array(
					'name'    => __( 'Quantas estrelas:', 'man' ),
					'id'      => 'depoimentos_nota',
					'type'    => 'select',
					// Options of checkboxes, in format 'value' => 'Label'
					'options' => array(
							'1'       => '1 estrela',
							'2' => '2 estrelas',
							'3'        => '3 estrelas',
							'4'     => '4 estrelas',
							'5' => '5 estrelas',
					),
					'multiple' => false,
					'placeholder'     => 'Selecione uma nota:',
					// Display options in a single row?
					'inline' => true,
				),
				// TEXT
				array(
					'name'  => __( 'Depoimento:', 'man' ),
					'id'    => "depoimentos_text",
					'type'  => 'textarea',
					'rows'  => 10,
				),
		),
	);

	// metabox premios 
	$meta_boxes[] = array(
		'id'         => 'premios',
		'title'      => __( 'Informações sobre os Pêmios:', 'man' ),
		'post_types' => array( 'premios' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
				// TEXT
				array(
					'name'  => __( 'Prêmios do ano:', 'man' ),
					'id'    => "premios_items",
					'type'  => 'text_list',
					'clone' => true,
					'options' => array(
						'Ex.: Troféu expressão'      => 'Nome do prêmio'
					),
				)
		),
	);

	// metabox time 
	$meta_boxes[] = array(
		'id'         => 'time',
		'title'      => __( 'Informações sobre Quem faz parte da Mânica:', 'man' ),
		'post_types' => array( 'time' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
			// TEXT
			array(
				'name'  => __( 'Cargo:', 'man' ),
				'id'    => "time_cargo",
				'type'  => 'text',
			),
			// IMAGE ADVANCED
			array(
				'name'             => __( 'Foto do integrante do time:', 'man' ),
				'id'               => "time_imagem",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			)
		),
	);

	// metabox projetos 
	$meta_boxes[] = array(
		'id'         => 'projetos',
		'title'      => __( 'Informações sobre o Projeto Social:', 'man' ),
		'post_types' => array( 'projetos' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
			// TEXT
			array(
				'name'  => __( 'Resumo:', 'man' ),
				'id'    => "projetos_resumo",
				'type'  => 'textarea',
				'rows'   => 6
			)
		),
	);

	// metabox vagas 
	$meta_boxes[] = array(
		'id'         => 'vagas',
		'title'      => __( 'Informações sobre o Parceiro:', 'man' ),
		'post_types' => array( 'vagas' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
			// TEXT
			// array(
			// 	'name'  => __( 'Cidade/Estado:', 'man' ),
			// 	'id'    => "vagas_local",
			// 	'type'  => 'text',
			// 	'desc'  => 'Ex.: Carazinho/RS'
			// ),
			// IMAGE ADVANCED
			array(
				'name'             => __( 'Thumbnail do Parceiro:', 'man' ),
				'id'               => "vagas_imagem",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			)
		),
	);

	// metabox eventos 
	$meta_boxes[] = array(
		'id'         => 'eventos',
		'title'      => __( 'Informações sobre o Evento:', 'man' ),
		'post_types' => array( 'eventos' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
			// TEXT
			array(
				'name'  => __( 'Resumo sobre o evento:', 'man' ),
				'id'    => "eventos_resumo",
				'type'  => 'textarea',
				'rows'  => 6
			),
			// IMAGE ADVANCED
			array(
				'name'             => __( 'Background evento:', 'man' ),
				'id'               => "eventos_imagem",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			)
		),
	);

	// metabox iniciativas 
	$meta_boxes[] = array(
		'id'         => 'iniciativas',
		'title'      => __( 'Informações sobre Iniciativa:', 'man' ),
		'post_types' => array( 'iniciativas' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
			// TEXT
			array(
				'name'  => __( 'Texto sobre a Iniciativa:', 'man' ),
				'id'    => "iniciativas_resumo",
				'type'  => 'textarea',
				'rows'  => 6
			)
		),
	);

	// metabox informacoes 
	$meta_boxes[] = array(
		'id'         => 'informacoes',
		'title'      => __( 'Informações sobre Perguntas Frequentes:', 'man' ),
		'post_types' => array( 'informacoes' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
			// TEXT
			array(
				'name'  => __( 'Resposta:', 'man' ),
				'id'    => "informacoes_resposta",
				'type'  => 'wysiwyg',
				'rows'  => 5
			)
		),
	);

	return $meta_boxes;
}