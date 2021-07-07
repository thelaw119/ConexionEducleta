<?php

/**
 * Autores: Pedro Gatica Guajardo, Kimberly Soazo Lara
 * Fecha Creacion: 05 julio 2021
 * Cerrar Sesion
 */

session_start();
require_once '../../conexion/db.php';

if (!isset($_SESSION["nick_usuario"])) {
    header("Location: http://localhost:8000/views/academia.html");
}

$codigo = $_SESSION["id_usuario"];


$SQL = "select compras.id_compra, compras.descripcion_compra, compras.cantidad_compra, compras.fecha_compra, compras.estado_compra, compras.fecha_estado, productos.nombre, productos.costo, usuarios.nombre_completo, usuarios.correo_usuario  from compras 
inner join usuarios on usuarios.id_usuario = compras.id_usuario
inner join productos on productos.id_producto = compras.id_producto";

$resultado = mysqli_query($conexion, $SQL);


?>






<div class="container gallery-container">
    <div>

<?php 
if($resultado -> num_rows > 0){
?>

        <div class="row" align="Center">
            
            <h1 class="page-description text-center">LISTADO DE PEDIDOS</h1>
            
        </div>


        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>Fecha Compra</th>
                    <th>Nombre Producto</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>

                    
                    
                </tr>
            </thead> 

            <?php
            foreach ($resultado as $row) {

                ?>
                <tbody> 
                    <?php $estado = $row['estado_compra']; ?>
                    <tr>
                        <td><?php echo $row['id_compra']; ?></td>
                        <td><?php echo $row['fecha_compra']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td>
                        <?php 
                        
                        if($estado == 1){
                            echo 'Pendiente';
                        }else if($estado == 2){
                            echo 'Aceptado';
                        }else if($estado == 3){
                            echo 'Rechazado';
                        }
                        ?>
                        </td>
                        <td>
                        <?php echo '<a href="http://192.168.100.2/conexioneducleta/controlador/actualiza_estado.php?id='.$codigo.'"><img src="../../img/actualizar.png"/></a>' ?>
                        </td>
                        <td>
                        <?php echo '<a href="http://192.168.100.2/conexioneducleta/controlador/boleta.php?id='.$codigo.'"><img src="../../img/descarga.png"/></a>' ?>
                        </td>
                    </tr>           					 
                </tbody>
            <?php } ?>
        </table>

<?php }else{
    ?>

        <div class="row" align="Center">
            
            <h1 class="page-description text-center">NO EXISTEN COMPRAS NUEVAS</h1>
            
        </div>

    <?php }?>

    </div>  
</div> 