<?php
/**
 * Autores: Pedro Gatica Guajardo, Kimberly Soazo Lara
 * Fecha Creacion: 28 junio 2021
 * Perfil
 */

session_start();
require_once '../../conexion/db.php';

if (!isset($_SESSION["nick_usuario"])) {
    header("Location: http://localhost:8000/views/academia.html");
}

$codigo = $_SESSION["id_usuario"];


$SQL = "select productos.nombre, productos.descripcion, productos.material, productos.costo, tipo_producto.nombre_tipo, tipo_producto.descripcion_tipo  from productos 
inner join tipo_producto on tipo_producto.id_tipo = productos.id_tipo";
$resultado = mysqli_query($conexion, $SQL);

$i = 0;

?>
<div class="container gallery-container">
        
        <h1 class="page-description text-center">CURSOS EDUCLETA</h1>
        
        
            <div class="row">
            <?php
            foreach ($resultado as $row) {
                $i++;
            ?>


                
                    <div class="col-sm-3 col-md-4 ">
                            <div align="center">
                                <img src="../../img/logo_edu-300x150.png" width="300" height="300" HSPACE="10" VSPACE="10" style="padding:20px;" alt="CURSO 1">
                            </div>

                            <div align="center">
                                <input style="background-color: mediumvioletred; color: white; font-weight: bold;" type="submit" value="<?php echo $nombre = $row['nombre']; ?>"  />
                            </div>
                            
                            <div>
                            <form action="pagar.php" method="POST">
                                <p><b>Descripcion:</b> <?php echo $descripcion = $row['descripcion']; ?></p>
                                <p><b>Material:</b> <?php echo $material = $row['material']; ?> </p>
                                <p><b>Precio:</b> <?php echo $costo = $row['costo']; ?> UF Por Hora </p>
                                
                                <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo; ?>">
                                <input type="hidden" id="costo" name="costo" value="<?php echo $costo; ?>">
                           
                            <input style="background-color: limegreen; color: linen; font-weight: bold;" type="submit" value="COMPRAR" />
                            
                            </div>
                            </form>
                    </div>
                
                
                    
        
               


    <?php 

                if($i == 3){
                    ?>
                    </div>
                    <br><br>
                    <div class="row">
                    <?php
                    $i = 0;
                }



        } ?>







