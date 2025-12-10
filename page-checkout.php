<?php
/* Template Name: Custom Checkout */
get_header();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generate_order'])) {
    // Logic to create the order
    $order_created = false; // Change to true if order is generated correctly

    // Create WooCommerce order
    $order = wc_create_order();
    
    if ($order) {
        $cart_items = WC()->cart->get_cart();
        
        foreach ($cart_items as $cart_item_key => $cart_item) {
            $order->add_product($cart_item['data'], $cart_item['quantity']); // Add products to order
        }

        // Calcular totales y finalizar el pedido
        $order->calculate_totals();

        // Obtener el ID del pedido
        $order_id = $order->get_id();

        // Marcar como creado el pedido
        $order_created = true;

        // Clear cart after creating order
        WC()->cart->empty_cart();

        $send_method = $_POST['sent_method'];

        $data_order = wc_get_order($order_id); // Get the order

        if ($data_order) {
            // Get customer name
            $customer_name = trim($data_order->get_billing_first_name() . ' ' . $data_order->get_billing_last_name());
            $customer_email = $data_order->get_billing_email();
            // Get product list
            $products = [];
            foreach ($data_order->get_items() as $item_id => $item) {
                $product_name = preg_replace('/[\r\n]+/', ' ', $item->get_name()); // Remove line breaks in names
                $product_quantity = $item->get_quantity(); // Requested quantity
                $product_total = $item->get_total(); // Total price of product
                $products[] = [
                    'name' => $product_name,
                    'quantity' => $product_quantity,
                    'total' => $product_total
                ];
            }
        }

        // Create message
        $message = "Hello,\nI would like to request a budget for the following items: \n";
        foreach ($products as $product) {
            $message .=  $product['quantity'] . " - " . $product['name'] . " - $" . $product['total'] . ". \n";
        }
        $message .= "Best regards, \n" . $customer_name . ". \n";
        $message .= "Request number: " . $order_id;

        $to = 'j.eduvalenzuela@gmail.com'; // Recipient email address
        $subject = 'Budget Request - Order #' . $order_id;

        // Define headers for email
        $headers = [
            'Content-Type: text/plain; charset=UTF-8',
            'From: ' . $customer_email,
            'Reply-To: ' . $customer_email
        ];
        
        // Send email
        wp_mail($to, $subject, $message, $headers);

        if (isset($send_method) && $send_method === 'whatsapp') {
            // Redirect to order details
            $phone_number = '5492804341440'; // Replace with WhatsApp number

            // Encode message consistently
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

            // Generate redirect URL
            $redirect_url = 'https://wa.me/' . $phone_number . '?text=' . $encoded_message;
            wp_redirect($redirect_url);
            exit;
        }else{
                
            // Redirect to order details
            $redirect_url = home_url(  '/presupuesto/?ver-orden=' . $order_id . '&sent_method=' . $send_method );
            wp_redirect($redirect_url);
            exit;
        }

        
    } else {
        // If order was not created
        $order_created = false;
        echo '<p class="woocommerce-error">There was a problem creating your order. Try again.</p>';
    }
}


get_footer();
