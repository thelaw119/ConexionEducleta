<?php

/**
 * Autores: Pedro Gatica Guajardo, Kimberly Soazo Lara
 * Fecha Creacion: 06 julio 2021
 * Cerrar Sesion
 */

session_start();
session_destroy();

header("Location:http://192.168.100.2/conexioneducleta/index.php");


?>