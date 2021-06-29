/**
 * Autores: Pedro Gatica Guajardo, Kimberly Soazo Lara
 * Fecha Creacion: 28 junio 2021
 * Menu Cliente
 */
/*function perfil(id) {

    var recarga = 2500;

    $.ajax({
        type: "post",
        data: 'id=' + id,
        url: "http://192.168.100.2/conexioneducleta/vista/cliente/perfil.php",
        beforeSend: function () {
            $('#contenido').html('<div class="loading" align="center"><img src="../img/loading/cargando.gif" alt="loading" /><br/>Un momento, por favor...</div>');

        },

        success: function (data) {
            setTimeout(function () {
                $('#contenido').html(data);
            }, recarga
                    );
        }
    });
}*/

function perfil(codigo) {
    var detener = 2500;

    $.ajax({
        type: "post",
        data: 'codigo=' + codigo,
        url: "http://192.168.100.2/conexioneducleta/vista/cliente/perfil.php",
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