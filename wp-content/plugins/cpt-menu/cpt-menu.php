<?php
/*
Plugin Name: CPT Menu
Plugin URI:
Description: Plugin para modulo de menu
Version:
Author: Victor Diaz
Author URI:
License:
License URI:
*/
if ( ! function_exists('menus') ) {

// Register Custom Post Type
function menus() {

	$labels = array(
		'name'                  => _x( 'Menu', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Menu', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Menu', 'text_domain' ),
		'name_admin_bar'        => __( 'Menu', 'text_domain' ),
		'archives'              => __( 'Archivos de Menus', 'text_domain' ),
		'attributes'            => __( 'Atributos de Menus', 'text_domain' ),
		'parent_item_colon'     => __( 'Item de Menus', 'text_domain' ),
		'all_items'             => __( 'Todos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir Nuevo Menu', 'text_domain' ),
		'add_new'               => __( 'Añadir Nuevo Menu', 'text_domain' ),
		'new_item'              => __( 'Nuevo', 'text_domain' ),
		'edit_item'             => __( 'Editar', 'text_domain' ),
		'update_item'           => __( 'Actualizar', 'text_domain' ),
		'view_item'             => __( 'Ver', 'text_domain' ),
		'view_items'            => __( 'Ver Todos', 'text_domain' ),
		'search_items'          => __( 'Buscar', 'text_domain' ),
		'not_found'             => __( 'No Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar Imagen Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar Imagen Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagen Destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en Menu', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en Menu', 'text_domain' ),
		'items_list'            => __( 'Listado de Menus', 'text_domain' ),
		'items_list_navigation' => __( 'Listado Navegable de Menus', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de Lista de Menus', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Menu', 'text_domain' ),
		'description'           => __( 'Menu', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title','editor','thumbnail'),
		'taxonomies'            => array( 'tipo_Menus' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 3,
		'menu_icon'             => 'dashicons-carrot',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'menus', $args );

}
add_action( 'init', 'menus', 0 );

}

//Register Custom Taxonomy
function tipo_Menus() {

	$labels = array(
		'name'                       => _x( 'Tipo de Menus', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'tipo de Menus', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'tipo de Menus', 'text_domain' ),
		'all_items'                  => __( 'Todos los tipo de Menus', 'text_domain' ),
		'parent_item'                => __( 'tipo de Menus Padre', 'text_domain' ),
		'parent_item_colon'          => __( 'tipo de Menus:', 'text_domain' ),
		'new_item_name'              => __( 'nuevo tipo de Menus', 'text_domain' ),
		'add_new_item'               => __( 'Añadir Nuevo tipo de Menus', 'text_domain' ),
		'edit_item'                  => __( 'Editar tipo de Menus', 'text_domain' ),
		'update_item'                => __( 'Actualizar tipo de Menu', 'text_domain' ),
		'view_item'                  => __( 'Ver tipo de Menu', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Agregar o Remover tipo de Menu', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'tipo de Menus Populares', 'text_domain' ),
		'search_items'               => __( 'Buscar tipo de Menus', 'text_domain' ),
		'not_found'                  => __( 'No Encontrado', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Lista de tipo de Menus', 'text_domain' ),
		'items_list_navigation'      => __( 'Listado Navegable de tipo de Menus', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'tipo_Menus', array( 'menus' ), $args );

}
add_action( 'init', 'tipo_Menus', 0 );