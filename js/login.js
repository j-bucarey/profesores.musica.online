$(window).ready(function() {

    
    $('#formulario_login').on('submit', function(e) {

        e.preventDefault();

        let usuario = $('#txt_usuario').val();
        let pass = $('#txt_contrasena').val();

        $.post('controller/login.php', {usuario, pass}, function(data) {

            data = JSON.parse(data);

            if(data == 'true') {

                location.href = 'contenido.html';
                
            } else {

                swal.fire({
                    title: '¡Error!',
                    icon: 'error',
                    text: data
                });

            }
            

        });


    });
    
    
    
});