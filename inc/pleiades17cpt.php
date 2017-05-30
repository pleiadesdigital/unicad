<?php

/*====================================================
		pleiades17 Custom Post Types
====================================================*/
function pleiades17_custom_post_types() {
	// SERVICIOS POST TYPE
	$labels = array(
		'name'                => 'Servicios',
		'singular_name'       => 'Servicio',
		'menu_name'           => 'Servicios',
		'name_admin_bar'			=> 'Servicio',
		'add_new'             => 'Add New',
		'add_new_item'				=> 'Add New Servicio',
		'new_item'            => 'New Servicio',
		'edit_item'           => 'Edit Servicio',
		'view_item'           => 'View Servicio',
		'all_items'						=> 'All Servicios',
		'search_items'        => 'Search Servicios',
		'parent_item_colon'   => 'Parent Servicios:',
		'not_found'           => 'No Servicio Found.',
		'not_found_in_trash'  => 'No Servicios Found In Trash.',
	);
	$args = array(
		'labels'              => $labels,
		'public'							=> true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-id-alt',
		'query_var'           => true,
		'rewrite'             => array('slug' => 'servicios'),
		'capability_type'     => 'post', //page
		'has_archive'         => false, //false
		'hierarchical'        => true, //true
		'supports'            => array('title', 'editor', 'thumbnail','excerpt','page-attributes')
	);
	register_post_type('servicios', $args);

	// SLIDER POST TYPE
	$labels = array(
		'name'					=> __('Slider'),
		'query_var'			=> true,
		'hierarchical'	=> true,
		'singular_name'	=> __('Panel')
	);
	$args = array(
		'labels'					=> $labels,
		// 'taxonomies'			=> array('category'),
		'public'					=> true,
		'has_archive'			=> false,
		'capability_type'	=> 'post',
		'menu_icon'				=> get_template_directory_uri() . '/slider/images/admin_marquee_icon.png',
		'rewrite'					=> array(
			'slug' => 'learnmore',
			'with_front' => false
		),
		'supports'				=> array('title', 'editor', 'thumbnail')
	);
	register_post_type('slider_panel', $args);

} //pleiades17_custom_post_types()
add_action('init', 'pleiades17_custom_post_types');

/*====================================================
	pleiades17 Custom Taxonomies
====================================================*/

function pleaides17_custom_taxonomies() {
	// add new heirarchical taxonomy
	$labels = array(
		'name'									=> 'Grados',
		'singular_name'					=> 'Grado',
		'search_items'					=> 'Search Grados',
		'all_items'							=> 'All Grados',
		'parent_item'						=> 'Parent Grado',
		'parent_item_colon'			=> 'Parent Grado: ',
		'edit_item'							=> 'Edit Grado',
		'update_item'						=> 'Update Grado',
		'add_new_item'					=> 'Add new Grado',
		'new_item_name'					=> 'New Grado Name',
		'menu_name'							=> 'Grados',
	);
	$args = array(
		'hierarchical'					=> true,
		'labels'								=> $labels,
		'show_ui'								=> true,
		'show_admin_column'			=> true,
		'query_var'							=> true,
		'rewrite'								=>  array('slug' => 'grado'),
	);
	register_taxonomy('grado', array('servicios'), $args);
} //pleaides17_custom_taxonomies()
add_action('init', 'pleaides17_custom_taxonomies');