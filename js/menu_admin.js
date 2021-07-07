/**
 * Autores: Pedro Gatica Guajardo, Kimberly Soazo Lara
 * Fecha Creacion: 06 junio 2021
 * Menu Cliente
 */



function perfil(codigo) {
    var detener = 2500;

    $.ajax({
        type: "post",
        data: 'codigo=' + codigo,
        url: "http://192.168.100.2/conexioneducleta/vista/admin/perfil.php",
        beforeSend: function () {
            $('#contenido').html('<div class="loading" align="center"><img src="../../img/loading/cargando.svg" alt="loading" /><br/>Un momento, por favor...</div>');

        },

        success: function (data) {
            setTimeout(function () {
                $('#contenido').html(data);
                
            }, detener
                    );
        }
    });
}

function cursos(codigo) {
    var detener = 2500;

    $.ajax({
        type: "post",
        data: 'codigo=' + codigo,
        url: "http://192.168.100.2/conexioneducleta/vista/cliente/cursos.php",
        beforeSend: function () {
            $('#contenido').html('<div class="loading" align="center"><img src="../../img/loading/cargando.svg" alt="loading" /><br/>Un momento, por favor...</div>');

        },

        success: function (data) {
            setTimeout(function () {
                $('#contenido').html(data);
                
            }, detener
                    );
        }
    });
}
 

function pedidos(codigo) {
    var detener = 2500;

    $.ajax({
        type: "post",
        data: 'codigo=' + codigo,
        url: "http://192.168.100.2/conexioneducleta/vista/admin/pedidos.php",
        beforeSend: function () {
            $('#contenido').html('<div class="loading" align="center"><img src="../../img/loading/cargando.svg" alt="loading" /><br/>Un momento, por favor...</div>');

        },

        success: function (data) {
            setTimeout(function () {
                $('#contenido').html(data);
                
            }, detener
                    );
        }
    });
}


function soporte(codigo) {
    var detener = 2500;

    $.ajax({
        type: "post",
        data: 'codigo=' + codigo,
        url: "http://192.168.100.2/conexioneducleta/vista/cliente/soporte.php",
        beforeSend: function () {
            $('#contenido').html('<div class="loading" align="center"><img src="../../img/loading/cargando.svg" alt="loading" /><br/>Un momento, por favor...</div>');

        },

        success: function (data) {
            setTimeout(function () {
                $('#contenido').html(data);
                
            }, detener
                    );
        }
    });
}