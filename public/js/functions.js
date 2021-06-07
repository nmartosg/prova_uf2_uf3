window.onload = function() { init(); };

function init() {

    var script_tag = document.getElementById('functions')
    var user_id = script_tag.getAttribute("user-id");
    var user_name = script_tag.getAttribute("user-name");
    var user_rol = script_tag.getAttribute("rol_user");


    var respuestaCorrecta = '';
    Echo.private('chat')
        .listen('NewMessageNotification', (e) => {
            $('#MensajeAdmin').html(e.message.messages);
            // $('#formularioResposta').attr("class", e.message.suma);
            respuestaCorrecta = e.message.suma;


        });


    $(document).on('click', '#send', function(e) {
        e.preventDefault();

        var num1 = Math.floor((Math.random() * (9 + 1) + 1));
        var num2 = Math.floor((Math.random() * (9 + 1) + 1));
        var mensaje = num1 + ' + ' + num2;
        var suma = num1 + num2;


        $.post("https://dawjavi.insjoaquimmir.cat/nmartos/prova_uf2_uf3/public/mensaje/send", {
            mensaje: mensaje,
            suma: suma,
            _token: $("meta[name='csrf-token']").attr("content")
        })

    });



    $(document).on('click', '#sendrespuesta', function(e) {
        e.preventDefault();
        let envio = $('#MensajeAdmin').html()
        let mensaje = $('#respuesta').val();
        if (mensaje != "" && envio != '...') {
            if (mensaje == respuestaCorrecta) {

                Echo.private('chat')
                    .whisper('typing', {
                        name: 'L\'usuari ' + user_name + ' SI sap sumar',
                    });
            } else {

                Echo.private('chat')
                    .whisper('typing', {
                        name: 'L\'usuari ' + user_name + ' NO sap sumar',
                    });
            }

        }
        $('#respuesta').val("");

    });

    if (user_rol == 1) {
        Echo.private('chat')
            .listenForWhisper('typing', (e) => {
                alert(e.name)
            });
    }



}