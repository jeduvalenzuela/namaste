<?php
/* Template Name: Custom Checkout */
get_header();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generate_order'])) {
    // Lógica para crear el pedido
    $order_created = false; // Cambiar a true si la orden se genera correctamente

    // Crear la orden de WooCommerce
    $order = wc_create_order();
    
    if ($order) {
        $cart_items = WC()->cart->get_cart();
        
        foreach ($cart_items as $cart_item_key => $cart_item) {
            $order->add_product($cart_item['data'], $cart_item['quantity']); // Añadir productos al pedido
        }

        // Calcular totales y finalizar el pedido
        $order->calculate_totals();

        // Obtener el ID del pedido
        $order_id = $order->get_id();

        // Marcar como creado el pedido
        $order_created = true;

        // Vaciar el carrito después de crear el pedido
        WC()->cart->empty_cart();

        $send_method = $_POST['sent_method'];

        $data_order = wc_get_order($order_id); // Obtén el pedido

        if ($data_order) {
            // Obtén el objeto del usuario
            $user = $data_order->get_user();

            // Obtén el nombre de usuario mostrado (el nombre que se establece en el perfil)
            $customer_name = $user->get_display_name();
            // Obtener el correo electrónico del cliente
            $customer_email = $user->user_email;

            // Obtener lista de productos
            $products = [];
            foreach ($data_order->get_items() as $item_id => $item) {
                $product_name = preg_replace('/[\r\n]+/', ' ', $item->get_name()); // Eliminar saltos de línea en nombres
                $product_quantity = $item->get_quantity(); // Cantidad solicitada
                $product_total = $item->get_total(); // Precio total del producto
                $products[] = [
                    'name' => $product_name,
                    'quantity' => $product_quantity,
                    'total' => $product_total
                ];
            }
        }
        

        if (isset($send_method) && $send_method === 'whatsapp') {
            // Redirigir al detalle del pedido
            $phone_number = '5492804341440'; // Reemplaza con el número de WhatsApp
            
            // Crear el mensaje
            $message = "Hola,\nQuiero solicitar un presupuesto para los siguientes ítems: \n";
            foreach ($products as $product) {
                $message .=  $product['quantity'] . " - " . $product['name'] . " - $" . $product['total'] . ". \n";
            }
            $message .= "Atte, \n" . $customer_name . ". \n";
            $message .= "Solicitud n: " . $order_id;

            // Codificar el mensaje de forma consistente
            $encoded_message = str_replace(
                [
                    ' ', "\n", '$', ',', ':', '(', ')', 'á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ'
                ],
                [
                    '%20', '%0A', '%24', '%2C', '%3A', '%28', '%29', '%C3%A1', '%C3%A9', '%C3%AD', '%C3%B3', '%C3%BA', 
                    '%C3%81', '%C3%89', '%C3%8D', '%C3%93', '%C3%9A', '%C3%B1', '%C3%91'
                ],
                $message
            );

            error_log('Mensaje de WhatsApp: ' . $encoded_message);

            // Generar la URL de redirección
            $redirect_url = 'https://wa.me/' . $phone_number . '?text=' . $encoded_message;
            wp_redirect($redirect_url);
            exit;
        }else{
            // Crear el mensaje
            $message = "Hola,\nQuiero solicitar un presupuesto para los siguientes ítems: \n";
            foreach ($products as $product) {
                $message .=  $product['quantity'] . " - " . $product['name'] . " - $" . $product['total'] . ". \n";
            }
            $message .= "Atte, \n" . $customer_name . ". \n";
            $message .= "Solicitud n: " . $order_id;

            $to = 'j.eduvalenzuela@gmail.com'; // Dirección de correo del destinatario
            $subject = 'Solicitud de presupuesto - Orden #' . $order_id;

            // Definir los encabezados para el correo
            $headers = [
                'Content-Type: text/plain; charset=UTF-8',
                'From: ' . $customer_email,
                'Reply-To: ' . $customer_email
            ];
            
            // Enviar el correo
            wp_mail($to, $subject, $message, $headers);

            // Redirigir al detalle del pedido
            $redirect_url = home_url(  '/presupuesto/?ver-orden=' . $order_id . '&sent_method=' . $send_method );
            wp_redirect($redirect_url);
            exit;
        }

        
    } else {
                
        $redirect_url = home_url(  '/presupuesto/?ver-orden=false' );
        wp_redirect($redirect_url);
        exit;
    }
}


get_footer();
