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

// Función para registrar el tipo de entrada personalizado "image" and "sponsor"
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

    $labels3 = array(
        'name' => __('sponsors'),
        'singular_name' => __('sponsor'),
        'add_new' => __('Agregar Nuevo sponsor'),
        'add_new_item' => __('Agregar Nuevo sponsor'),
        'edit_item' => __('Editar sponsor'),
        'new_item' => __('Nuevo sponsor'),
        'view_item' => __('Ver sponsor'),
        'search_items' => __('Buscar sponsors'),
        'not_found' => __('No se encontraron sponsors'),
        'not_found_in_trash' => __('No se encontraron sponsors en la papelera'),
        'menu_name' => __('sponsors'),
    );

    $args3 = array(
        'labels' => $labels3,
        'public' => true,
        'supports' => array('title'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'sponsor'),
        'menu_icon' => 'dashicons-images-alt2', // Icono del menú (opcional)
        'show_in_rest' => true, // Habilita Gutenberg editor
    );

    register_post_type('sponsor', $args3);

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
        'nonce'    => wp_create_nonce('my_nonce'),
        'nonce1'    => wp_create_nonce('solicitar_presupuesto_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

function enqueue_custom_slider_script() {
    if (is_product()) {
        wp_enqueue_script('custom-slider-script', get_stylesheet_directory_uri() . '/woocommmerce/js/custom-slider.js', array('jquery'), null, true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_slider_script');

add_action( 'woocommerce_cart_loaded_from_session', function( $cart ) {
    foreach ( $cart->get_cart() as $cart_item_key => $cart_item ) {
        $product = $cart_item['data'];
        $quantity = $cart_item['quantity'];

        // Log para depuración
        error_log( "Producto cargado: " . $product->get_name() . " - Cantidad: " . $quantity );
    }
}, 10 );

add_action( 'woocommerce_before_calculate_totals', function( $cart ) {
    if ( ! is_admin() && ! wp_doing_ajax() && isset( $_POST['cart'] ) ) {
        $cart_data = $_POST['cart'];
        error_log( "Datos del carrito recibidos: " . print_r( $cart_data, true ) );
    }
}, 10, 1 );

add_action( 'woocommerce_cart_updated', function() {
    // Aquí puedes realizar acciones después de que el carrito se actualice.
    error_log( "Carrito actualizado correctamente." );
} );



add_action('wp_ajax_registrar_presupuesto', 'registrar_presupuesto');
add_action('wp_ajax_nopriv_registrar_presupuesto', 'registrar_presupuesto');

function registrar_presupuesto() {
    check_ajax_referer('solicitar_presupuesto_nonce', 'nonce');

    if (!WC()->cart->get_cart_contents_count()) {
        wp_send_json_error('El carrito está vacío.');
    }

    $order = wc_create_order();

    foreach (WC()->cart->get_cart() as $cart_item) {
        $product = $cart_item['data'];
        $quantity = $cart_item['quantity'];

        $order->add_product($product, $quantity);
    }

    // Añadir datos del cliente (opcional)
    $order->set_address([
        'first_name' => 'Cliente',
        'last_name'  => 'Anonimo',
        'email'      => 'cliente@ejemplo.com',
    ], 'billing');

    // Guardar la orden
    $order->calculate_totals();
    $order->update_status('on-hold', 'Presupuesto solicitado desde el carrito.');

    // Vaciar el carrito
    WC()->cart->empty_cart();

    // Enviar respuesta AJAX con redirección
    wp_send_json_success(['redirect_url' => home_url('/gracias-por-tu-solicitud')]);
}
