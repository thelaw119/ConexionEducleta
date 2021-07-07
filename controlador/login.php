<?php
/**
 * Autores: Pedro Gatica Guajardo, Kimberly Soazo Lara
 * Fecha Creacion: 28 junio 2021
 * Login
 */
session_start();
require_once '../conexion/db.php';


$nick = $_POST["nick"];
$clave = $_POST["password"];


$SQL = "select usuarios.id_usuario, usuarios.nick_usuario, usuarios.nombre_completo, usuarios.correo_usuario, usuarios.password_usuario,perfiles.id_perfil, perfiles.nombre_perfil from usuarios 
inner join perfiles on perfiles.id_perfil = usuarios.id_perfil where usuarios.nick_usuario = '$nick' and usuarios.password_usuario = '$clave'";


$consulta = mysqli_query($conexion, $SQL);

if($consulta->num_rows > 0){

    $row = $consulta->fetch_assoc();
    $codigo_usuario = $row['id_usuario'];
    $nick_usuario = $row['nick_usuario'];
    $nombre_completo = $row['nombre_completo'];
    $correo_usuario = $row['correo_usuario'];
    $password_usuario = $row['password_usuario'];
    $codigo_perfil = $row['id_perfil'];
    $perfil = $row['nombre_perfil'];
    

    
    if($codigo_perfil == 1){
        $_SESSION['nick_usuario'] = $nick_usuario;
        $_SESSION['nombre_completo'] = $nombre_completo;
        $_SESSION['correo_usuario'] = $correo_usuario;
        $_SESSION['password_usuario'] = $password_usuario;
        $_SESSION['nombre_perfil'] = $perfil;
        $_SESSION['id_usuario'] = $codigo_usuario;
        header("Location:http://192.168.100.2/conexioneducleta/vista/admin/admin.php");
    }else{
        $_SESSION['nick_usuario'] = $nick_usuario;
        $_SESSION['nombre_completo'] = $nombre_completo;
        $_SESSION['correo_usuario'] = $correo_usuario;
        $_SESSION['password_usuario'] = $password_usuario;
        $_SESSION['nombre_perfil'] = $perfil;
        $_SESSION['id_usuario'] = $codigo_usuario;
        header("Location:http://192.168.100.2/conexioneducleta/vista/cliente/cliente.php");
    } 
    
}else{
    echo "<div class='alert alert-warning alert-dismissible'>
                  <button type=button class='close data-dismiss=alert aria-hidden=true'>&times;</button>
                  <h5><i class='icon fas fa-info'></i> Advertencia!</h5>
                  Usuario o contraseña incorrectas!.
                </div>";
    //header("Location:http://localhost:8000/views/academia.html");
    header("Location:http://192.168.100.2/conexioneducleta/index.php");
    
}

 
   

mysqli_free_result($consulta);
mysqli_close($conexion);

 ?>