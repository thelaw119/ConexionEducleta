<?php
    /**
     * Autores: Pedro Gatica Guajardo, Kimberly Soazo Lara
     * Fecha Creacion: 28 junio 2021
     * Conexion
     */

    header("Access-Control-Allow-Origin: *");
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'educleta');

    $conexion = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($conexion == false){
        die("ERROR: Fallido Conexion BD." . mysqli_connect_error());
    }
?>