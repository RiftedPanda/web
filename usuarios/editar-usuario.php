<?php

  session_start();

  if(isset($_SESSION['usuario'])){
    include '../config.php';
    $usuario = $_SESSION['usuario'];
    $sql = "SELECT usertype FROM users WHERE (username = '$usuario') ";
    $resultado = mysqli_query($conexion, $sql) or die("Error en consulta"); 
    $administrador = mysqli_fetch_array($resultado);
    $administrador['usertype'];
    if ($administrador == 0) {
      header("Location: ../index.php"); 
    }
  }
  else{
    header("Location: ../index.php"); 
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../fonts/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/fileinput.min.css" />
    <script src="../js/jquery-3.2.1.min.js"></script>    
    <script src="../js/fileinput.min.js"></script>

    <title>Ediatr Usuario </title>
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      
      <?php 
        include'../base.php';
        include '../config.php';
        $id_usuario = $_GET['id']; 
        $activo = $_GET['ac']; 
        $titulo ="";
        if ($activo =="1") {
          $titulo = "Activar";
        }elseif ($activo =="0") {
          $titulo = "Suspender";
        }
       ?> 

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-power-off"></i> <?php echo $titulo; ?> Usuario</h1>            
          </div>          
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
             
              <form class='form form-vertical text-center' action='suspender_usuario.php' method='POST'>
                <?php 
                  echo "<input value='".$id_usuario."' name='id_usuario' hidden>";
                  echo "<input value='".$activo."' name='activo' hidden>";
                ?>                
                <h3>¿Seguro que deseas <?php echo $titulo; ?> a este usuario?</h3>
                <br>
                <button class='btn btn-primary' ><i class='fa fa-fw fa-lg fa-check-circle'></i> Si, estoy seguro</button>
                <a class='btn btn-default' href="lista-usuarios.php">Cancelar</a>
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <!-- Javascripts-->
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/pace.min.js"></script>
    <script src="../js/main.js"></script>

  </body>
</html>