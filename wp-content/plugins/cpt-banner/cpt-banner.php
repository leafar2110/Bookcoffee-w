<?php
/*
Plugin Name: CPT Banner
Plugin URI:
Description: Plugin para modulo de Banner
Version:
Author: Victor Diaz
Author URI:
License:
License URI:
*/
if ( ! function_exists('banner') ) {

// Register Custom Post Type
function banner() {

	$labels = array(
		'name'                  => _x( 'Banner', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Banner', 'text_domain' ),
		'name_admin_bar'        => __( 'Banner', 'text_domain' ),
		'archives'              => __( 'Archivos de Banner', 'text_domain' ),
		'attributes'            => __( 'Atributos de Banner', 'text_domain' ),
		'parent_item_colon'     => __( 'Item de Banner', 'text_domain' ),
		'all_items'             => __( 'Todos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir Nuevo Banner', 'text_domain' ),
		'add_new'               => __( 'Añadir Nuevo Banner', 'text_domain' ),
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
		'insert_into_item'      => __( 'Insertar en Banner', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en Banner', 'text_domain' ),
		'items_list'            => __( 'Listado de Banner', 'text_domain' ),
		'items_list_navigation' => __( 'Listado Navegable de Banner', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de Lista de Banner', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Banner', 'text_domain' ),
		'description'           => __( 'Banner', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title','editor','thumbnail'),
		'taxonomies'            => array( 'tipo_Banner' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 3,
		'menu_icon'             => 'dashicons-admin-collapse',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'banner', $args );

}
add_action( 'init', 'banner', 0 );

}

//Register Custom Taxonomy
function tipo_Banner() {

	$labels = array(
		'name'                       => _x( 'Tipo de Banner', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'tipo de Banner', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'tipo de Banner', 'text_domain' ),
		'all_items'                  => __( 'Todos los tipo de Banner', 'text_domain' ),
		'parent_item'                => __( 'tipo de Banner Padre', 'text_domain' ),
		'parent_item_colon'          => __( 'tipo de Banner:', 'text_domain' ),
		'new_item_name'              => __( 'nuevo tipo de Banner', 'text_domain' ),
		'add_new_item'               => __( 'Añadir Nuevo tipo de Banner', 'text_domain' ),
		'edit_item'                  => __( 'Editar tipo de Banner', 'text_domain' ),
		'update_item'                => __( 'Actualizar tipo de Banner', 'text_domain' ),
		'view_item'                  => __( 'Ver tipo de Banner', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Agregar o Remover tipo de Banner', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'tipo de Banner Populares', 'text_domain' ),
		'search_items'               => __( 'Buscar tipo de Banner', 'text_domain' ),
		'not_found'                  => __( 'No Encontrado', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Lista de tipo de Banner', 'text_domain' ),
		'items_list_navigation'      => __( 'Listado Navegable de tipo de Banner', 'text_domain' ),
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
	register_taxonomy( 'tipo_Banner', array( 'banner' ), $args );

}
add_action( 'init', 'tipo_Banner', 0 );