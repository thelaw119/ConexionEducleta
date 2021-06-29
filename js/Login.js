/**
 * Autores: Pedro Gatica Guajardo, Kimberly Soazo Lara
 * Fecha Creacion: 28 junio 2021
 * Login
 */

/*function Add(nick,nombre_completo,correo,password) {
    var nick = $("#nick").val();
    var nombre_completo = $("#nombre_completo").val();
    var correo = $("#correo").val();
    var password = $("#password").val();

            var dataString = "nick=" + nick + "&nombre_completo=" + nombre_completo + "&correo=" + correo + "&password=" + password;
            if ($.trim(nick).length > 0 & $.trim(nombre_completo).length > 0  & $.trim(correo).length > 0  & $.trim(password).length > 0) {
                $.ajax({
                    type: "POST",
                    url: "http://192.168.100.2/conexioneducleta/registrar.php",
                    data: dataString,
                    crossDomain: true,
                    cache: false,
                    beforeSend: function() {
                        $("#resultado").val('Loading...');
                    },
                    success: function(data) {
                        if (data == "success") {
                            alert("Data Sudah Masuk");
                            $("#insert").val('submit');
                        } else if (data == "error") {
                            alert("error");
                        }
                    }
                });
            }
            return false;
}*/


function Add(nick,nombre_completo,correo,password) {
    let parametros = {
        "nick": nick,
        "nombre_completo": nombre_completo,
        "correo": correo,
        "password": password
        
    };
    $.ajax({
        type: "POST",
        url: "http://192.168.100.2/conexioneducleta/controlador/registrar.php",
        data: parametros,
        beforeSend: function () {
            $("#resultado").html('Cargando');

        },
        success: function (response) { 
            $("#resultado").html(response);
            $('#nick').val('');
                $('#nombre_completo').val('');
                $('#correo').val('');
                $('#password').val(''); 
        
        }
    });
}

function Ingreso(nick,password) {
    let parametros = {
        "nick": nick,
        "password": password
        
    };
    $.ajax({
        type: "POST",
        url: "http://192.168.100.2/conexioneducleta/login.php",
        data: parametros,
        beforeSend: function () {
            $("#resultado").html('Cargando');

        },
        success: function (response) { 
            $("#resultado").html(response);
            $('#nick').val('');
            $('#password').val(''); 
        
        }
    });
}

