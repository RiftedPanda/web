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
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Lista de usuarios - Upjobs</title>
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      
      <?php include'../base.php' ?> 

      <div class="content-wrapper">
        
        <div class="page-title">
          <div>
            <h1><i class="fa fa-users"></i> Lista de Usuarios</h1>            
          </div>          
        </div>
        <div class="row">
          <div class="col-md-12">          
            <div class="card">
              <div class="card-body">
                <?php
                  if(isset($_SESSION["alerta"])){
                    if ($_SESSION["alerta"]) {
                      echo $_SESSION["mensaje_alerta"];                    
                    }
                    $_SESSION["alerta"] = False;
                  }
                ?>     
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Usuario</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Facebook</th>
                      <th>Estado</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $lista_usuarios = "SELECT * FROM users WHERE usertype = 0";
                      $resultado_lista_usuarios = mysqli_query($conexion, $lista_usuarios) or die("Error en consulta");
                      while ($usuario = mysqli_fetch_array($resultado_lista_usuarios)) 
                      {
                        $id_usuario = $usuario['id'];
                        
                        if($usuario['activo'] == 0){
                          $activo = "<span class='label label-success'>Activo</span>";
                          $color = "warning";
                        }else{
                          $activo = "<span class='label label-warning'>Suspendido</span>";
                          $color = "success";
                        }
                        echo "<tr>";
                          echo "<td>".$usuario['id']."</td>";
                          echo "<td>".$usuario['username']."</td>";
                          echo "<td>".$usuario['fullname']."</td>";
                          echo "<td>".$usuario['email']."</td>";
                          echo "<td>".$usuario['facebook']."</td>";
                          echo "<td>".$activo."</td>";
                          echo "<td><a class='btn btn-".$color."' href='editar-usuario.php?id=".$id_usuario."&ac=".$usuario['activo']."'><i class='fa fa fa-power-off'></i></a></td>";
                        echo "</tr>";
                      }
                    ?>
                  </tbody>
                </table>
              </div>
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="../js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
      $('#sampleTable').DataTable({
        "language":{
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
      });
    </script>

  </body>
</html>