function modificaradmin(nombre_completo, correo, password, codigo) {
    let parametros = {
        "nombre_completo": nombre_completo,
        "correo": correo,
        "password": password,
        "codigo": codigo
    };
    $.ajax({
        data: parametros,
        url: 'http://192.168.100.2/conexioneducleta/controlador/modificar_admin.php',
        type: 'post', 
        beforeSend: function () {
            $("#resultado").html('<div class="loading" align="center"><img src="../../img/loading/cargando.svg" alt="loading" /><br/>Un momento, por favor...</div>');
        },
        success: function (response) {
            $("#resultado").html(response);
        }
    });
}