<?php
/**
 * Autores: Pedro Gatica Guajardo, Kimberly Soazo Lara
 * Fecha Creacion: 28 junio 2021
 * Perfil
 */
session_start();

if (!isset($_SESSION["nick_usuario"])) {
    header("Location: http://localhost:8000/views/academia.html");
}
?>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

             
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="card">

                    <div class="card-body">
                        <div class="tab-content">

                            <div class="active tab-pane" id="informacion" >

                                <h1 align="center">Informacion de la Cuenta</h1>

                                <div class="table-wrapper">

                                    <div class="tab-pane" id="timeline">
                                        <div class="timeline timeline-inverse">
                                        </div>
                                    </div>
                                    
                                    <form >
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Nick</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nick" name="nick" value="<?php echo $_SESSION["nick_usuario"]; ?>" placeholder="nombre usuario">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Nombre Completo</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" value="<?php echo $_SESSION["nombre_completo"]; ?>"placeholder="apellidos usuario">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $_SESSION["correo_usuario"]; ?>"placeholder="direccion">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Clave</label>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $_SESSION["password_usuario"]; ?>"placeholder="email">
                                                    <input type="hidden" id="codigo" name="codigo" value="<?php echo $_SESSION["id_usuario"]; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger" href="javascript:;" onclick="modificarusuario($('#nombre').val(), $('#apellido').val(), $('#direccion').val(), $('#email').val(), $('#clave').val(), $('#codigo').val());return false;">Modificar</button>
   
                                                </div>

                                            </div>
                                        </form>
                                    <div id="resultado"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>