<?php

  session_start();

  if(isset($_SESSION['usuario'])){
    header("Location: profile.php"); 
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
    <link rel="stylesheet" type="text/css" href="../fonts/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Iniciar Sesión - UpJobs</title>
  </head>
  <body>

    <section class="material-half-bg">
      <div class="cover"></div>
    </section>

    <section class="login-content">

      <div class="logo">
        <img src=" alt="Iniciar Sesión - UpJobs" title="Iniciar Sesión - UpJobs" height="120" width="120">
      </div>

      <div class="login-box">
        <form class="login-form" action="checklogin.php" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>INICIAR SESIÓN</h3>
          <?php

            if(isset($_SESSION['mensaje'])){
              echo "<p style='color: red;'>". $_SESSION['mensaje'] . "</p>";
              session_destroy();
            }

          ?>

          <div class="form-group">
            <label class="control-label">USUARIO</label>
            <input class="form-control" type="text" placeholder="Usuario" name="usuario" required autofocus>
          </div>

          <div class="form-group">
            <label class="control-label">CONTRASEÑA</label>
            <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
          </div>
          <input type="text" name="login" hidden>
          <div class="form-group">
            <div class="utility">
              <p  class="semibold-text mb-0">¿A ún no tienes una cuenta?</p>
              <p class="semibold-text mb-0"><a href="signup.php">Registrate</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" ><i class="fa fa-sign-in fa-lg fa-fw"></i>INICIAR SESIÓN</button>
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
</html>