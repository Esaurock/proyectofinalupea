<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="vistas/librerias/dist/bootstrap/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/librerias/loginestilos.css">
  <title>Login</title>
</head>
<body>

  <div class="container">
    <div class="row justify-content-center pt-5 mt-5 m-1">
      <div class="col-md-6 col-lg-5 col-sm-8 col-xl-4 formulario">
       <form action="loguear.php" method="post">

         <div class="form-group text-center pt-3">
          <h2 class="text-light"> INICIAR SESION</h2>
        </div>
        <div class="form-group mx-sm-4 pt-3">
          <input type="text" class="form-control textinv" name="usuario" placeholder="Ingrese su Usuario" required="">
        </div>
        <div class="form-group mx-sm-4 pb-3">
          <input type="password" class="form-control textinv" name="contra" placeholder="Ingrese su Contraseña" required="">
        </div>
        <div class="form-group mx-sm-4 pb-2">
          <input type="submit" class="btn btn-block ingresar text-light" name="" value="INGRESAR">
        </div>
        
        <div class="form-group mx-sm-4 text-right">
          <span class=""><a class="olvide" href="index.php">Regresar</a></span>
        </div>

        <div class="form-group mx-sm-2 pb-3">
          <?php if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-danger" role="alert">
              <b><?=$_SESSION['message']; ?></b>
            </div>
            <?php session_unset(); } ?> 
          </div>

          <div class="alert alert-danger" hidden >Error de usuario o Contraseña</div>
        </form>
      </div>
    </div>
    </div>  