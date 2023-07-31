<?php
/**
 * alpina_post_type class.
 *
 * @package  Alpina
 */

add_action( 'init', 'create_custom_taxonomy_eventos', 0 );
add_action( 'init', 'create_custom_taxonomy_informacoes', 0 );
add_action( 'init', 'create_custom_taxonomy_seguros', 0 );
add_action( 'init', 'create_custom_taxonomy_procurados', 0 );

//create a custom taxonomy 
function create_custom_taxonomy_eventos() {
 
  $labels = array(
    'name' => _x( 'tipo-evento', 'taxonomy general name' ),
    'singular_name' => _x( 'tipo-evento', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar Categoria' ),
    'all_items' => __( 'Todas Categorias' ),
    'parent_item' => __( 'Item pai de Categoria' ),
    'parent_item_colon' => __( 'Parent Categoria:' ),
    'edit_item' => __( 'Edit Categoria' ), 
    'update_item' => __( 'Atualizar Categoria' ),
    'add_new_item' => __( 'Adicionar nova Categoria' ),
    'new_item_name' => __( 'New Categoria Name' ),
    'menu_name' => __( 'Tipo de evento' ),
  ); 	
 
  register_taxonomy('tipo-evento',array('eventos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tipo-evento' ),
  ));
}

//create a custom taxonomy 
function create_custom_taxonomy_informacoes() {
 
  $labels = array(
    'name' => _x( 'Tipo', 'taxonomy general name' ),
    'singular_name' => _x( 'Tipo', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar Categoria' ),
    'all_items' => __( 'Todas Categorias' ),
    'parent_item' => __( 'Item pai de Categoria' ),
    'parent_item_colon' => __( 'Parent Categoria:' ),
    'edit_item' => __( 'Edit Categoria' ), 
    'update_item' => __( 'Atualizar Categoria' ),
    'add_new_item' => __( 'Adicionar nova Categoria' ),
    'new_item_name' => __( 'New Categoria Name' ),
    'menu_name' => __( 'Tipo da dúvida' ),
  ); 	
 
  register_taxonomy('tipo',array('informacoes'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tipo-duvida' ),
  ));
}

//create a custom taxonomy 
function create_custom_taxonomy_seguros() {
 
  $labels = array(
    'name' => _x( 'Tipos de Seguro', 'taxonomy general name' ),
    'singular_name' => _x( 'Tipo de Seguro', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar Categoria' ),
    'all_items' => __( 'Todas Categorias' ),
    'parent_item' => __( 'Item pai de Categoria' ),
    'parent_item_colon' => __( 'Parent Categoria:' ),
    'edit_item' => __( 'Editar Categoria' ), 
    'update_item' => __( 'Atualizar Categoria' ),
    'add_new_item' => __( 'Adicionar nova Categoria' ),
    'new_item_name' => __( 'New Categoria Name' ),
    'menu_name' => __( 'Tipos de Seguro' ),
  ); 	
 
  register_taxonomy('tipo-seguro',array('seguros'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tipo-seguro' ),
  ));
}

//create a custom taxonomy 
function create_custom_taxonomy_procurados() {
 
  $labels = array(
    'name' => _x( 'Seguros mais procurados', 'taxonomy general name' ),
    'singular_name' => _x( 'Seguro mais procurado', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar Categoria' ),
    'all_items' => __( 'Todas Categorias' ),
    'parent_item' => __( 'Item pai de Categoria' ),
    'parent_item_colon' => __( 'Pai da Categoria:' ),
    'edit_item' => __( 'Editar Categoria' ), 
    'update_item' => __( 'Atualizar Categoria' ),
    'add_new_item' => __( 'Adicionar nova Categoria' ),
    'new_item_name' => __( 'Novo nome de categoria' ),
    'menu_name' => __( 'Seguros mais procurados' ),
  ); 	
 
  register_taxonomy('seguros-procurados',array('seguros'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'seguros-procurados' ),
  ));
}

