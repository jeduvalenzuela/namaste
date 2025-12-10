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

// Function to register custom taxonomies
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
        'hierarchical' => true, // Like categories, not tags
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'image-category'),
        'show_in_rest' => true, // Habilita Gutenberg editor
    );

    register_taxonomy('image_category', array('image'), $args);
}
add_action('init', 'custom_register_taxonomies'); // Register taxonomies on WordPress initialization

// Function to register custom post types "image" and "sponsor"
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
        'menu_icon' => 'dashicons-images-alt2', // Menu icon (optional)
        'show_in_rest' => true, // Enable Gutenberg editor
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
        'menu_icon' => 'dashicons-images-alt2', // Menu icon (optional)
        'show_in_rest' => true, // Enable Gutenberg editor
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
        'menu_icon' => 'dashicons-images-alt2', // Menu icon (optional)
        'show_in_rest' => true, // Enable Gutenberg editor
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
        'menu_icon' => 'dashicons-images-alt2', // Menu icon (optional)
        'show_in_rest' => true, // Enable Gutenberg editor
    );

    register_post_type('image', $args1);
}
add_action('init', 'custom_register_post_type'); // Register custom post type on WordPress initialization
function registrar_mi_menu() {
    register_nav_menu('menu-principal', __('Menú Principal'));
}
add_action('init', 'registrar_mi_menu');

/**
 * wp_enqueue_scripts
 */
function my_enqueue_scripts() {
    // Enqueue jQuery if not already enqueued
    if (!wp_script_is('jquery')) {
        wp_enqueue_script('jquery');
    }

    // Enqueue custom script that depends on jQuery
    //wp_enqueue_script('my-custom-script', get_template_directory_uri() . '/js/my-custom-script.js', array('jquery'), null, true);

    // Enqueue script with AJAX support
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

        // Debug log
        error_log( "Product loaded: " . $product->get_name() . " - Quantity: " . $quantity );
    }
}, 10 );

add_action( 'woocommerce_before_calculate_totals', function( $cart ) {
    if ( ! is_admin() && ! wp_doing_ajax() && isset( $_POST['cart'] ) ) {
        $cart_data = $_POST['cart'];
        error_log( "Cart data received: " . print_r( $cart_data, true ) );
    }
}, 10, 1 );

add_action( 'woocommerce_cart_updated', function() {
    // You can perform actions after the cart is updated here.
    error_log( "Cart updated successfully." );
} );




// Procesar el formulario de registro personalizado
function custom_register_user() {
    if (isset($_POST['username'], $_POST['firstname'], $_POST['lastname'], $_POST['new_email'], $_POST['new_email_confirm'])) {
        $username = sanitize_text_field($_POST['username']);
        $firstname = sanitize_text_field($_POST['firstname']);
        $lastname = sanitize_text_field($_POST['lastname']);
        $new_email = sanitize_email($_POST['new_email']);
        $new_email_confirm = sanitize_email($_POST['new_email_confirm']);
        
        // Check if emails match
        if ($new_email !== $new_email_confirm) {
            // Show error if emails don't match
            wp_die('The emails do not match.');
        }

        // Check if email is already registered
        if (email_exists($new_email)) {
            wp_die('The email address is already registered.');
        }

        // Create random password
        $password = wp_generate_password();

        // Create new user in WordPress
        $user_id = wp_create_user($username, $password, $new_email);

        // Check if user was created successfully
        if (is_wp_error($user_id)) {
            wp_die('There was an error registering the user.');
        }

        // Update user profile fields (first name and last name)
        wp_update_user([
            'ID' => $user_id,
            'first_name' => $firstname,
            'last_name' => $lastname
        ]);

        // Asignar el rol de cliente de WooCommerce
        $user = get_user_by('ID', $user_id);
        $user->set_role('customer');

        // Send email with password
        wp_mail($new_email, 'Welcome to our site', 'Your password is: ' . $password);

        // Redirect user to success page or login
        wp_redirect(home_url('/mi-cuenta')); // Redirect to login or desired page
        exit;
    }
}

// Register action to process the form
add_action('admin_post_nopriv_custom_register_user', 'custom_register_user');
add_action('admin_post_custom_register_user', 'custom_register_user');


//cart processing
add_action('template_redirect', 'custom_checkout_generate_order');
function custom_checkout_generate_order() {
    if (is_page('checkout') && isset($_GET['generate_order'])) {
        $user_id = get_current_user_id();
        if (!$user_id) {
            wp_die('Debes iniciar sesión para realizar una solicitud.');
        }

        // Check that cart is not empty
        if (WC()->cart->is_empty()) {
            wp_die('El carrito está vacío. No puedes realizar una solicitud.');
        }

        // Generar el pedido
        $order_id = wc_create_order(array(
            'customer_id' => $user_id,
        ));

        if (is_wp_error($order_id)) {
            wp_die('Hubo un problema al crear tu pedido. Por favor, intenta nuevamente.');
        }

        // Agregar productos del carrito al pedido
        foreach (WC()->cart->get_cart() as $cart_item) {
            $product = $cart_item['data'];
            $order = wc_get_order($order_id);
            $order->add_product($product, $cart_item['quantity']);
        }

        // Configurar datos del pedido
        $order->set_address(WC()->customer->get_billing(), 'billing');
        $order->set_address(WC()->customer->get_shipping(), 'shipping');
        $order->calculate_totals();
        $order->update_status('on-hold', 'Solicitud generada desde la URL personalizada.');

        // Vaciar el carrito
        WC()->cart->empty_cart();

        // Redirigir a la plantilla personalizada
        wp_redirect(add_query_arg('order_id', $order_id, home_url('/checkout-details')));
        exit;
    }
}

function cf7_populate_post_title($tag) {
    if ($tag['name'] !== 'titulo-post') {
        return $tag;
    }

    global $post;

    // Make sure we are on a valid post
    if (is_singular() && isset($post->ID)) {
        $tag['values'] = [get_the_title($post->ID)];
    }

    return $tag;
}
add_filter('wpcf7_form_tag', 'cf7_populate_post_title', 10, 2);

