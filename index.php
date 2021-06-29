<html>

<head>
  <title>LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/login.css" rel="stylesheet" id="bootstrap-css">
  <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/Login.js"></script>

</head>

<body style="background: #98b3b1;">
  <canvas class="background"></canvas>
  <script src="js/particles.min.js"></script>

  <div class="jumbotron d-flex align-items-center" style="background-color:transparent!important;margin-top: 10%;">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <img class="img-responsive" src="img/logo_edu.png">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Iniciar Sesión
                <!--<center><img style="width: 200px" src="../img/transparente.png" alt=""></center>-->
              </h3>
            </div>
            <div class="panel-body">
              <form action="http://192.168.100.2/conexioneducleta/controlador/login.php" method="POST">
                <fieldset>
                  <div class="form-group">
                    <input class="form-control" type="text" name="nick" placeholder="Nick" value="">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" value="">
                  </div>
                  <input class="btn btn-lg btn-success btn-block" type="submit" value="Ingresar">
                <!--  <input class="btn btn-lg btn-success btn-block" type="submit" href="javascript:;" onclick="Ingreso($('#nick').val(), $('#password').val());return false;" value="Iniciar Sesión">-->
                  <a class="btn btn-lg btn-danger btn-block" href="http://192.168.100.2/conexioneducleta/registrar.php"
                    style="background-color:#8a1252!important;">Registro</a>

                </fieldset>
              </form>

            </div>
            <div  id="resultado"></div>
          </div>
        </div>
      </div>
    </div>

  </div>

</body>
<script>
  window.onload = function () {
    Particles.init({
      selector: '.background',
      color: '#ffffff',
      maxParticles: 130,
      connectParticles: true,
      responsive: [
        {
          breakpoint: 768,
          options: {
            maxParticles: 0
          }
        }, {
          breakpoint: 375,
          options: {
            maxParticles: 0
          }
        }
      ]
    });
  };
</script>

</html>