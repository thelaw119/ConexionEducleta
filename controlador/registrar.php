<?php
/**
 * Autores: Pedro Gatica Guajardo, Kimberly Soazo Lara
 * Fecha Creacion: 28 junio 2021
 * Registrar
 */
require_once '../conexion/db.php';


$nick = $_POST["nick"];
$nombre_completo = $_POST["nombre_completo"];
$correo = $_POST["correo"];
$password = $_POST["password"];


if($nick == '' || $nombre_completo == '' || $correo == '' || $password == ''){

    echo"<div class='alert alert-warning alert-dismissible'>
                      <button type=button class='close data-dismiss=alert aria-hidden=true'>&times;</button>
                      <h5><i class='icon fas fa-exclamation-triangle'></i> Advertencia!</h5>
                      Debe completar los datos.
                    </div>";
}else{

    $SQLCONSULTA = "select * from usuarios where correo_usuario = '$correo';";
    $resultado = mysqli_query($conexion, $SQLCONSULTA);

    if($resultado -> num_rows > 0){

        echo"<div class='alert alert-warning alert-dismissible'>
                      <button type=button class='close data-dismiss=alert aria-hidden=true'>&times;</button>
                      <h5><i class='icon fas fa-exclamation-triangle'></i> Advertencia!</h5>
                      Correo ya en USO!.
                    </div>";
    }else{

        $SQL = "INSERT INTO Usuarios(nick_usuario,nombre_completo,correo_usuario,password_usuario,id_perfil) values('$nick','$nombre_completo','$correo','$password',2)";
        $resultado = mysqli_query($conexion, $SQL);

        if ($resultado) {

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
                  <p>Nick: " . $nick . "</p>
                  <p>Clave: " . $password . "</p>
                  </body>
                  </html>";
  
          mail($to, $subject, $message, $headers);


          echo "<div class='alert alert-success alert-dismissible'>
                  <button type=button class='close data-dismiss=alert aria-hidden=true'>&times;</button>
                  <h5><i class='icon fas fa-check'></i> Registrado Exitosamente, fueron enviados sus datos de registro a su correo!</h5>
                  
                  <div>
                </div>";



          }else{
            echo "<div class='alert alert-danger alert-dismissible'>
                  <button type=button class='close data-dismiss=alert aria-hidden=true'>&times;</button>
                  <h5><i class='icon fas fa-ban'></i> ERROR!</h5>
                  Problemas al Registrar tus datos.
                </div>";
          }
        
    }
}

