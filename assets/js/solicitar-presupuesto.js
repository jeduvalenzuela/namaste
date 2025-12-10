jQuery(document).ready(function ($) {
    $('.enviar').on('click', function (e) {
        e.preventDefault();

        $.ajax({
            url: my_ajax_object.ajax_url,
            method: 'POST',
            data: {
                action: 'registrar_presupuesto',
                nonce: my_ajax_object.nonce1,
            },
            beforeSend: function () {
                alert('Processing request...');
            },
            success: function (response) {
                if (response.success) {
                    alert('Budget registered successfully!');
                    window.location.href = response.redirect_url; // Redirect to thank you page
                } else {
                    alert('There was an error: ' + response.data);
                }
            },
            error: function () {
                alert('An unexpected error occurred. Please try again.');
            },
        });
    });
});
