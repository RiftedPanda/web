<?php

  session_start();
  
  if(isset($_SESSION['usuario'])){
    echo "<script> window.location='profile.php'; </script>";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registrate - UpJobs</title>
  </head>
  <body>

    <section class="material-half-bg">
      <div class="cover"></div>
    </section>

    <section class="login-content">

      <div class="logo">
        <img src="" alt="" title="Iniciar Sesión - UpJobs" height="120" width="120">
      </div>

      <div class="login-box">
        <form class="login-form" action="checksignup.php" method="post">

          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>REGISTRATE</h3>
          <?php

            if(isset($_SESSION['mensaje'])){
              echo "<p style='color: red;'>". $_SESSION['mensaje'] . "</p>";
              session_destroy();
            }

          ?>

          <div class="form-group">
            <label class="control-label">Usuario</label>
            <input class="form-control" type="text" placeholder="Usuario" name="usuario" required autofocus>
          </div>

          <div class="row mb-20">
            <div class="col-md-6">
              <label>Nombre</label>
                  <input class="form-control" type="text" name="nombre" placeholder="Nombre" required>
            </div>

            <div class="col-md-6">
              <label>Apellidos</label>
                  <input class="form-control" type="text" name="apellidos" placeholder="Apellidos" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control" type="email" name="email" placeholder="Email" required>
          </div>

          <div class="form-group">
            <label class="control-label">Contraseña</label>
            <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
          </div>


          <input type="text" name="signup" hidden>
          
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" ><i class="fa fa-sign-in fa-lg fa-fw"></i>Registrarme</button>
          </div>

        </form>

      </div>

    </section>
  </body>
  <!--scripts-->
  <script src="../js/jquery-2.1.4.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/plugins/pace.min.js"></script>
  <script src="../js/main.js"></script>

  <style type="text/css">
    .login-content .logo{    margin: 20px 0;}
    .login-box{margin-bottom: 40px !important;}
    .login-box .login-form{position: inherit !important;}
    .login-content .login-box{    min-width: 430px !important;}
  </style>
</html>