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
                alert('Procesando solicitud...');
            },
            success: function (response) {
                if (response.success) {
                    alert('¡Presupuesto registrado correctamente!');
                    window.location.href = response.redirect_url; // Redirige a la página de gracias
                } else {
                    alert('Hubo un error: ' + response.data);
                }
            },
            error: function () {
                alert('Hubo un error inesperado. Por favor, inténtelo de nuevo.');
            },
        });
    });
});
