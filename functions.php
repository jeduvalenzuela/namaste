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




// Procesar el formulario de registro personalizado
function custom_register_user() {
    if (isset($_POST['username'], $_POST['firstname'], $_POST['lastname'], $_POST['new_email'], $_POST['new_email_confirm'])) {
        $username = sanitize_text_field($_POST['username']);
        $firstname = sanitize_text_field($_POST['firstname']);
        $lastname = sanitize_text_field($_POST['lastname']);
        $new_email = sanitize_email($_POST['new_email']);
        $new_email_confirm = sanitize_email($_POST['new_email_confirm']);
        
        // Verifica si los correos electrónicos coinciden
        if ($new_email !== $new_email_confirm) {
            // Mostrar un error si los correos no coinciden
            wp_die('Los correos electrónicos no coinciden.');
        }

        // Verifica si el correo ya está registrado
        if (email_exists($new_email)) {
            wp_die('El correo electrónico ya está registrado.');
        }

        // Crear la contraseña aleatoria
        $password = wp_generate_password();

        // Crear el nuevo usuario en WordPress
        $user_id = wp_create_user($username, $password, $new_email);

        // Verifica si el usuario fue creado correctamente
        if (is_wp_error($user_id)) {
            wp_die('Hubo un error al registrar al usuario.');
        }

        // Actualizar los campos del perfil del usuario (nombre y apellido)
        wp_update_user([
            'ID' => $user_id,
            'first_name' => $firstname,
            'last_name' => $lastname
        ]);

        // Asignar el rol de cliente de WooCommerce
        $user = get_user_by('ID', $user_id);
        $user->set_role('customer');

        // Enviar correo electrónico con la contraseña
        wp_mail($new_email, 'Bienvenido a nuestro sitio', 'Tu contraseña es: ' . $password);

        // Redirigir al usuario a la página de éxito o al login
        wp_redirect(home_url('/mi-cuenta')); // Redirigir al login o página que desees
        exit;
    }
}

// Registrar la acción para procesar el formulario
add_action('admin_post_nopriv_custom_register_user', 'custom_register_user');
add_action('admin_post_custom_register_user', 'custom_register_user');


///Order processing
add_action('woocommerce_before_cart', function () {
    if (isset($_POST['generate_order']) && is_user_logged_in()) {
        $cart = WC()->cart;

        if (!$cart->is_empty()) {
            // Crear pedido
            $user_id = get_current_user_id();
            $order = wc_create_order(['customer_id' => $user_id]);

            foreach ($cart->get_cart() as $cart_item_key => $cart_item) {
                $order->add_product(
                    $cart_item['data'],
                    $cart_item['quantity'],
                    [
                        'subtotal' => $cart_item['line_subtotal'],
                        'total' => $cart_item['line_total']
                    ]
                );
            }

            // Asignar dirección de facturación y envío
            $user = wp_get_current_user();
            $address = [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->user_email,
                'phone' => get_user_meta($user_id, 'billing_phone', true),
                'address_1' => get_user_meta($user_id, 'billing_address_1', true),
                'city' => get_user_meta($user_id, 'billing_city', true),
                'postcode' => get_user_meta($user_id, 'billing_postcode', true),
                'country' => get_user_meta($user_id, 'billing_country', true),
            ];
            $order->set_address($address, 'billing');
            $order->set_address($address, 'shipping');

            // Finalizar pedido
            $order->calculate_totals();
            $order->update_status('pending', 'Solicitud de presupuesto generada desde el carrito.');

            // Limpiar carrito
            $cart->empty_cart();

            // Redirigir al carrito con parámetro
            $redirect_url = home_url('/presupuesto/?ver_orden=' . $order->get_id());
            wp_redirect($redirect_url);
            exit;
        } else {
            // Carrito vacío
            $redirect_url = home_url('/presupuesto/?ver_orden=false');
            wp_redirect($redirect_url);
            exit;
        }
    }
});

