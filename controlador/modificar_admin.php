<?php

/**
 * Autores: Pedro Gatica Guajardo, Kimberly Soazo Lara
 * Fecha Creacion: 06 julio 2021
 * Modificar Admin
 */
require_once '../conexion/db.php';

$nombre_completo = $_POST["nombre_completo"];
$correo = $_POST["correo"];
$password = $_POST["password"];
$codigo_cliente = $_POST["codigo"];



if ($nombre_completo == '' || $correo == '' || $password == '') {

echo"<div class='alert alert-warning alert-dismissible'>
                  <button type=button class='close data-dismiss=alert aria-hidden=true'>&times;</button>
                  <h5><i class='icon fas fa-exclamation-triangle'></i> Advertencia!</h5>
                  Debe completar los datos.
                </div>";

} else {

$SQL = "UPDATE usuarios SET nombre_completo = '$nombre_completo', correo_usuario = '$correo', password_usuario = '$password' WHERE id_usuario = '$codigo_cliente'";
$resultado = mysqli_query($conexion, $SQL);

if ($resultado == true) {


    $to = "$correo";
    $subject = "NUEVO USUARIO";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $message = "
            <html>
            <head>
            <title>NUEVO USUARIO</title>
            </head>
            <body>
            <h1>Tus datos Son:</h1>
            <p></p>
            <p>Nombre Completo: " . $nombre_completo ."</p>
            <p>Email: " . $correo . "</p>
            <p>Clave: " . $password . "</p>
            </body>
            </html>";

    mail($to, $subject, $message, $headers);


    echo "<div class='alert alert-success alert-dismissible'>
            <button type=button class='close data-dismiss=alert aria-hidden=true'>&times;</button>
            <h5><i class='icon fas fa-check'></i> Registrado Exitosamente, fueron enviados sus datos de registro a su correo!</h5>
            <h5><i class='icon fas fa-check'></i> Debe Cerrar sesion Para visualizar sus Cambios</h5>
            <a href='http://192.168.100.2/conexioneducleta/vista/admin/logout.php'>Cerrar Sesion</a>
            <div>
          </div>";


    } else {
        echo "<div class = 'alert alert-danger alert-dismissible'>
<button type = button class = 'close data-dismiss=alert aria-hidden=true'>&times;
</button>
<h5><i class = 'icon fas fa-ban'></i> Error!</h5>
Problemas al guardar tus datos.
</div>";
    }
}