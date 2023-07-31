<?php
/**
 * alpina_post_type class.
 *
 * @package  Alpina
 */

/**
 * Adicionamos uma ação no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_seguros' );
// add_action( 'init', 'create_post_type_depoimentos' );
// add_action( 'init', 'create_post_type_premios' );
// add_action( 'init', 'create_post_type_time' );
// add_action( 'init', 'create_post_type_projetos' );
add_action( 'init', 'create_post_type_vagas' );
// add_action( 'init', 'create_post_type_eventos' );
// add_action( 'init', 'create_post_type_iniciativas' );
// add_action( 'init', 'create_post_type_informacoes' );

/**
 * Esta é a função que é chamada pelo add_action()
 */

function create_post_type_seguros() {

    /**
     * Labels customizados para o tipo de post
     * 
     */
    $labels = array(
	    'name' => _x('Serviços', 'post type general name'),
	    'singular_name' => _x('Serviço', 'post type singular name'),
	    'add_new' => _x('Adicionar Novo', 'Serviço'),
	    'add_new_item' => __('Adicionar Novo Serviço'),
	    'edit_item' => __('Editar Serviço'),
	    'new_item' => __('Novo Serviço'),
	    'all_items' => __('Todos os Serviço'),
	    'view_item' => __('Ver Serviço'),
	    'search_items' => __('Pesquisar Serviço'),
	    'not_found' =>  __('Nenhum Serviço Encontrado'),
	    'not_found_in_trash' => __('Nenhum Serviço na Lixeira'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Serviço'
    );
    
    /**
     * Registamos o tipo de post projetos através desta função
     * passando-lhe os labels e parâmetros de controle.
     */
    register_post_type( 'seguros', array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'has_archive' => 'servicos',
	    'rewrite' => array(
		 'slug' => 'servicos',
		 'with_front' => false,
	    ),
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => false,
	    'menu_position' => null,
			'menu_icon' => 'dashicons-shield-alt',
	    'supports' => array('title','revisions')
	    )
    );
    
}

// function create_post_type_depoimentos() {

// 	/**
// 	 * Labels customizados para o tipo de post
// 	 * 
// 	 */
// 	$labels = array(
// 		'name' => _x('Depoimentos', 'post type general name'),
// 		'singular_name' => _x('Depoimento', 'post type singular name'),
// 		'add_new' => _x('Adicionar Novo', 'Depoimento'),
// 		'add_new_item' => __('Adicionar Novo Depoimento'),
// 		'edit_item' => __('Editar Depoimento'),
// 		'new_item' => __('Novo Depoimentos'),
// 		'all_items' => __('Todos os Depoimentos'),
// 		'view_item' => __('Ver Depoimento'),
// 		'search_items' => __('Pesquisar Depoimentos'),
// 		'not_found' =>  __('Nenhum Depoimento Encontrado'),
// 		'not_found_in_trash' => __('Nenhum Depoimento na Lixeira'),
// 		'parent_item_colon' => '',
// 		'menu_name' => 'Depoimentos'
// 	);
	
// 	/**
// 	 * Registamos o tipo de post projetos através desta função
// 	 * passando-lhe os labels e parâmetros de controle.
// 	 */
// 	register_post_type( 'depoimentos', array(
// 		'labels' => $labels,
// 		'public' => true,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_menu' => true,
// 		'has_archive' => 'depoimentos',
// 		'rewrite' => array(
// 	 'slug' => 'depoimentos',
// 	 'with_front' => false,
// 		),
// 		'capability_type' => 'post',
// 		'has_archive' => true,
// 		'hierarchical' => false,
// 		'menu_position' => null,
// 		'menu_icon' => 'dashicons-format-quote',
// 		'supports' => array('title','revisions')
// 		)
// 	);
	
// }

// function create_post_type_premios() {

// 	/**
// 	 * Labels customizados para o tipo de post
// 	 * 
// 	 */
// 	$labels = array(
// 		'name' => _x('Prêmios', 'post type general name'),
// 		'singular_name' => _x('Prêmio', 'post type singular name'),
// 		'add_new' => _x('Adicionar Novo', 'Prêmio'),
// 		'add_new_item' => __('Adicionar Novo Prêmio'),
// 		'edit_item' => __('Editar Prêmio'),
// 		'new_item' => __('Novo Prêmios'),
// 		'all_items' => __('Todos os Prêmios'),
// 		'view_item' => __('Ver Prêmio'),
// 		'search_items' => __('Pesquisar Prêmios'),
// 		'not_found' =>  __('Nenhum Prêmio Encontrado'),
// 		'not_found_in_trash' => __('Nenhum Prêmio na Lixeira'),
// 		'parent_item_colon' => '',
// 		'menu_name' => 'Prêmios'
// 	);
	
// 	/**
// 	 * Registamos o tipo de post projetos através desta função
// 	 * passando-lhe os labels e parâmetros de controle.
// 	 */
// 	register_post_type( 'premios', array(
// 		'labels' => $labels,
// 		'public' => true,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_menu' => true,
// 		'has_archive' => 'premios',
// 		'rewrite' => array(
// 	 'slug' => 'premios',
// 	 'with_front' => false,
// 		),
// 		'capability_type' => 'post',
// 		'has_archive' => true,
// 		'hierarchical' => false,
// 		'menu_position' => null,
// 		'menu_icon' => 'dashicons-awards',
// 		'supports' => array('title','revisions')
// 		)
// 	);
	
// }


// function create_post_type_time() {

// 	/**
// 	 * Labels customizados para o tipo de post
// 	 * 
// 	 */
// 	$labels = array(
// 		'name' => _x('Time', 'post type general name'),
// 		'singular_name' => _x('pessoa', 'post type singular name'),
// 		'add_new' => _x('Adicionar Novo', 'pessoa'),
// 		'add_new_item' => __('Adicionar Novo pessoa'),
// 		'edit_item' => __('Editar pessoa'),
// 		'new_item' => __('Novo Time'),
// 		'all_items' => __('Todos os Time'),
// 		'view_item' => __('Ver pessoa'),
// 		'search_items' => __('Pesquisar Time'),
// 		'not_found' =>  __('Nenhum pessoa Encontrado'),
// 		'not_found_in_trash' => __('Nenhum pessoa na Lixeira'),
// 		'parent_item_colon' => '',
// 		'menu_name' => 'Time'
// 	);
	
// 	/**
// 	 * Registamos o tipo de post projetos através desta função
// 	 * passando-lhe os labels e parâmetros de controle.
// 	 */
// 	register_post_type( 'time', array(
// 		'labels' => $labels,
// 		'public' => true,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_menu' => true,
// 		'has_archive' => 'time',
// 		'rewrite' => array(
// 	 'slug' => 'time',
// 	 'with_front' => false,
// 		),
// 		'capability_type' => 'post',
// 		'has_archive' => true,
// 		'hierarchical' => false,
// 		'menu_position' => null,
// 		'menu_icon' => 'dashicons-groups',
// 		'supports' => array('title','revisions')
// 		)
// 	);
	
// }

// function create_post_type_projetos() {

// 	/**
// 	 * Labels customizados para o tipo de post
// 	 * 
// 	 */
// 	$labels = array(
// 		'name' => _x('Projetos Sociais', 'post type general name'),
// 		'singular_name' => _x('Projeto Social', 'post type singular name'),
// 		'add_new' => _x('Adicionar Novo', 'Projeto Social'),
// 		'add_new_item' => __('Adicionar Novo Projeto Social'),
// 		'edit_item' => __('Editar Projeto Social'),
// 		'new_item' => __('Novo Projetos Sociais'),
// 		'all_items' => __('Todos os Projetos Sociais'),
// 		'view_item' => __('Ver Projeto Social'),
// 		'search_items' => __('Pesquisar Projetos Sociais'),
// 		'not_found' =>  __('Nenhum Projeto Social Encontrado'),
// 		'not_found_in_trash' => __('Nenhum Projeto Social na Lixeira'),
// 		'parent_item_colon' => '',
// 		'menu_name' => 'Projetos Sociais'
// 	);
	
// 	/**
// 	 * Registamos o tipo de post projetos através desta função
// 	 * passando-lhe os labels e parâmetros de controle.
// 	 */
// 	register_post_type( 'projetos', array(
// 		'labels' => $labels,
// 		'public' => true,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_menu' => true,
// 		'has_archive' => 'projetos',
// 		'rewrite' => array(
// 	 'slug' => 'projetos',
// 	 'with_front' => false,
// 		),
// 		'capability_type' => 'post',
// 		'has_archive' => true,
// 		'hierarchical' => false,
// 		'menu_position' => null,
// 		'menu_icon' => 'dashicons-smiley',
// 		'supports' => array('title','revisions')
// 		)
// 	);
	
// }

function create_post_type_vagas() {

	/**
	 * Labels customizados para o tipo de post
	 * 
	 */
	$labels = array(
		'name' => _x('Parceiros', 'post type general name'),
		'singular_name' => _x('Vaga', 'post type singular name'),
		'add_new' => _x('Adicionar Novo', 'Parceiro'),
		'add_new_item' => __('Adicionar Novo Parceiro'),
		'edit_item' => __('Editar Parceiro'),
		'new_item' => __('Novo Parceiro'),
		'all_items' => __('Todos os Parceiro'),
		'view_item' => __('Ver Parceiro'),
		'search_items' => __('Pesquisar Parceiro'),
		'not_found' =>  __('Nenhum Parceiro Encontrado'),
		'not_found_in_trash' => __('Nenhum Vaga na Lixeira'),
		'parent_item_colon' => '',
		'menu_name' => 'Parceiro'
	);
	
	/**
	 * Registamos o tipo de post projetos através desta função
	 * passando-lhe os labels e parâmetros de controle.
	 */
	register_post_type( 'vagas', array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'has_archive' => 'vagas',
		'rewrite' => array(
	 'slug' => 'vagas',
	 'with_front' => false,
		),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'menu_icon' => 'dashicons-id-alt',
		'supports' => array('title','revisions')
		)
	);
	
}


// function create_post_type_eventos() {

// 	/**
// 	 * Labels customizados para o tipo de post
// 	 * 
// 	 */
// 	$labels = array(
// 		'name' => _x('Eventos', 'post type general name'),
// 		'singular_name' => _x('Evento', 'post type singular name'),
// 		'add_new' => _x('Adicionar Novo', 'Evento'),
// 		'add_new_item' => __('Adicionar Novo Evento'),
// 		'edit_item' => __('Editar Evento'),
// 		'new_item' => __('Novo Eventos'),
// 		'all_items' => __('Todos os Eventos'),
// 		'view_item' => __('Ver Evento'),
// 		'search_items' => __('Pesquisar Eventos'),
// 		'not_found' =>  __('Nenhum Evento Encontrado'),
// 		'not_found_in_trash' => __('Nenhum Evento na Lixeira'),
// 		'parent_item_colon' => '',
// 		'menu_name' => 'Eventos'
// 	);
	
// 	/**
// 	 * Registamos o tipo de post projetos através desta função
// 	 * passando-lhe os labels e parâmetros de controle.
// 	 */
// 	register_post_type( 'eventos', array(
// 		'labels' => $labels,
// 		'public' => true,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_menu' => true,
// 		'has_archive' => 'eventos',
// 		'rewrite' => array(
// 	 'slug' => 'eventos',
// 	 'with_front' => false,
// 		),
// 		'capability_type' => 'post',
// 		'has_archive' => true,
// 		'hierarchical' => false,
// 		'menu_position' => null,
// 		'menu_icon' => 'dashicons-clock',
// 		'supports' => array('title','revisions')
// 		)
// 	);
	
// }

// function create_post_type_iniciativas() {

// 	/**
// 	 * Labels customizados para o tipo de post
// 	 * 
// 	 */
// 	$labels = array(
// 		'name' => _x('Iniciativas', 'post type general name'),
// 		'singular_name' => _x('Iniciativa', 'post type singular name'),
// 		'add_new' => _x('Adicionar Novo', 'Iniciativa'),
// 		'add_new_item' => __('Adicionar Novo Iniciativa'),
// 		'edit_item' => __('Editar Iniciativa'),
// 		'new_item' => __('Novo Iniciativas'),
// 		'all_items' => __('Todos os Iniciativas'),
// 		'view_item' => __('Ver Iniciativa'),
// 		'search_items' => __('Pesquisar Iniciativas'),
// 		'not_found' =>  __('Nenhum Iniciativa Encontrado'),
// 		'not_found_in_trash' => __('Nenhum Iniciativa na Lixeira'),
// 		'parent_item_colon' => '',
// 		'menu_name' => 'Iniciativas'
// 	);
	
// 	/**
// 	 * Registamos o tipo de post projetos através desta função
// 	 * passando-lhe os labels e parâmetros de controle.
// 	 */
// 	register_post_type( 'iniciativas', array(
// 		'labels' => $labels,
// 		'public' => true,
// 		'publicly_queryable' => true,
// 		'show_ui' => true,
// 		'show_in_menu' => true,
// 		'has_archive' => 'iniciativas',
// 		'rewrite' => array(
// 	 'slug' => 'iniciativas',
// 	 'with_front' => false,
// 		),
// 		'capability_type' => 'post',
// 		'has_archive' => true,
// 		'hierarchical' => false,
// 		'menu_position' => null,
// 		'menu_icon' => 'dashicons-edit-page',
// 		'supports' => array('title','revisions')
// 		)
// 	);
	
// }

// function create_post_type_informacoes() {

// 	/**
// 	 * Labels customizados para o tipo de post
// 	 * 
// 	 */
// 	$labels = array(
// 		'name' => _x('Perguntas Frequentes', 'post type general name'),
// 		'singular_name' => _x('Pergunta', 'post type singular name'),
// 		'add_new' => _x('Adicionar Novo', 'Pergunta'),
// 		'add_new_item' => __('Adicionar Novo Pergunta'),
// 		'edit_item' => __('Editar Pergunta'),
// 		'new_item' => __('Novo Perguntas Frequentes'),
// 		'all_items' => __('Todos os Perguntas Frequentes'),
// 		'view_item' => __('Ver Pergunta'),
// 		'search_items' => __('Pesquisar Perguntas Frequentes'),
// 		'not_found' =>  __('Nenhum Pergunta Encontrado'),
// 		'not_found_in_trash' => __('Nenhum Pergunta na Lixeira'),
// 		'parent_item_colon' => '',
// 		'menu_name' => 'Informações Importantes'
// 	);
	
// 	/**
// 	 * Registamos o tipo de post projetos através desta função
// 	 * passando-lhe os labels e parâmetros de controle.
// 	 */
// 	register_post_type( 'informacoes', array(
// 		'labels' => $labels,
// 		'public' => true,
// 		'publicly_queryable' => false,
// 		'show_ui' => true,
// 		'show_in_menu' => true,
// 		'has_archive' => 'informacoes',
// 		'rewrite' => array(
// 	 'slug' => 'informacoes',
// 	 'with_front' => false,
// 		),
// 		'capability_type' => 'post',
// 		'has_archive' => false,
// 		'hierarchical' => false,
// 		'menu_position' => null,
// 		'menu_icon' => 'dashicons-format-status',
// 		'supports' => array('title','revisions')
// 		)
// 	);
	
// }