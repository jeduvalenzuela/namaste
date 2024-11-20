<?php
/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

// Función para registrar las taxonomías personalizadas
function custom_register_taxonomies() {
    $labels = array(
        'name' => __('Categorías de images'),
        'singular_name' => __('Categoría de image'),
        'search_items' => __('Buscar Categorías de images'),
        'all_items' => __('Todas las Categorías de images'),
        'parent_item' => __('Categoría Principal de image'),
        'parent_item_colon' => __('Categoría Principal de image:'),
        'edit_item' => __('Editar Categoría de image'),
        'update_item' => __('Actualizar Categoría de image'),
        'add_new_item' => __('Agregar Nueva Categoría de image'),
        'new_item_name' => __('Nuevo Nombre de Categoría de image'),
        'menu_name' => __('Categorías de images'),
    );

    $args = array(
        'hierarchical' => true, // Como categorías, no etiquetas
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'image-category'),
        'show_in_rest' => true, // Habilita Gutenberg editor
    );

    register_taxonomy('image_category', array('image'), $args);
}
add_action('init', 'custom_register_taxonomies'); // Registra las taxonomías en la inicialización de WordPress

// Función para registrar el tipo de entrada personalizado "image" and "partner"
function custom_register_post_type() {
    $labels = array(
        'name' => __('sliders'),
        'singular_name' => __('slider'),
        'add_new' => __('Agregar Nuevo slider'),
        'add_new_item' => __('Agregar Nuevo slider'),
        'edit_item' => __('Editar slider'),
        'new_item' => __('Nuevo slider'),
        'view_item' => __('Ver slider'),
        'search_items' => __('Buscar sliders'),
        'not_found' => __('No se encontraron sliders'),
        'not_found_in_trash' => __('No se encontraron sliders en la papelera'),
        'menu_name' => __('sliders'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports' => array('title'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'slider'),
        'menu_icon' => 'dashicons-images-alt2', // Icono del menú (opcional)
        'show_in_rest' => true, // Habilita Gutenberg editor
    );

    register_post_type('slider', $args);

    $labels2 = array(
        'name' => __('partners'),
        'singular_name' => __('partner'),
        'add_new' => __('Agregar Nuevo partner'),
        'add_new_item' => __('Agregar Nuevo partner'),
        'edit_item' => __('Editar partner'),
        'new_item' => __('Nuevo partner'),
        'view_item' => __('Ver partner'),
        'search_items' => __('Buscar partners'),
        'not_found' => __('No se encontraron partners'),
        'not_found_in_trash' => __('No se encontraron partners en la papelera'),
        'menu_name' => __('partners'),
    );

    $args2 = array(
        'labels' => $labels2,
        'public' => true,
        'supports' => array('title'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'partner'),
        'menu_icon' => 'dashicons-images-alt2', // Icono del menú (opcional)
        'show_in_rest' => true, // Habilita Gutenberg editor
    );

    register_post_type('partner', $args2);

    $labels1 = array(
        'name' => __('images'),
        'singular_name' => __('image'),
        'add_new' => __('Agregar Nuevo image'),
        'add_new_item' => __('Agregar Nuevo image'),
        'edit_item' => __('Editar image'),
        'new_item' => __('Nuevo image'),
        'view_item' => __('Ver image'),
        'search_items' => __('Buscar images'),
        'not_found' => __('No se encontraron images'),
        'not_found_in_trash' => __('No se encontraron images en la papelera'),
        'menu_name' => __('images'),
    );

    $args1 = array(
        'labels' => $labels1,
        'public' => true,
        'supports' => array('title'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'image'),
        'menu_icon' => 'dashicons-images-alt2', // Icono del menú (opcional)
        'show_in_rest' => true, // Habilita Gutenberg editor
    );

    register_post_type('image', $args1);
}
add_action('init', 'custom_register_post_type'); // Registra el tipo de entrada personalizado en la inicialización de WordPress
function registrar_mi_menu() {
    register_nav_menu('menu-principal', __('Menú Principal'));
}
add_action('init', 'registrar_mi_menu');

/**
 * wp_enqueue_scripts
 */
function my_enqueue_scripts() {
    // Encolar jQuery si no está ya encolado
    if (!wp_script_is('jquery')) {
        wp_enqueue_script('jquery');
    }

    // Encolar un script personalizado que dependa de jQuery
    //wp_enqueue_script('my-custom-script', get_template_directory_uri() . '/js/my-custom-script.js', array('jquery'), null, true);

    // Encolar un script con soporte para AJAX
    wp_localize_script('my-custom-script', 'my_ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('my_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');