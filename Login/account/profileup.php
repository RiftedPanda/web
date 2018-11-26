<?php

  session_start();

  if(isset($_SESSION['usuario'])){
    echo "";
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

    <title>Upjobs</title>
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      
      <?php include'../base.php' ?> 

      <div class="content-wrapper">
        <div class="row user">
          <style>
            .kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
                margin: 0;
                padding: 0;
                border: none;
                box-shadow: none;
                text-align: center;
            }
            .kv-avatar {
                display: inline-block;
            }
            .kv-avatar .file-input {
                display: table-cell;
                width: 213px;
            }
            .kv-reqd {
                color: red;
                font-family: monospace;
                font-weight: normal;
            }
            /*.kv-file-content img{width: 160px; height: 160px;}*/
            .file-default-preview img{width: 160px; height: 160px;}
            .file-footer-buttons, .kv-file-zoom, .file-upload-indicator{display: none;}
          </style>
          <div class="col-md-12">
            <div class="card ">
              <div id="kv-avatar-errors-1" style="width:100%;display:none"></div>
              <?php 
                include '../config.php';

                if(isset($_SESSION["alerta"])){

                  if ($_SESSION["alerta"]) {
                    echo $_SESSION["mensaje_alerta"];                    
                  }
                  $_SESSION["alerta"] = False;
                }

                $usuario = $_SESSION['usuario'];
                $sql = "SELECT * FROM usuarios WHERE (usuario = '$usuario') ";
                $resultado = mysqli_query($conexion, $sql) or die("Error en consulta");   
                

                while ($columna = mysqli_fetch_array($resultado)) 
                {
                  echo "<h4 class='line-head'>Perfil ".$columna['usuario']."</h4>";

                  echo "<form class='form form-vertical' action='../account/editar_perfil.php' method='POST' enctype='multipart/form-data'>";
                    echo "<input name='id_usuario' value='".$columna['id']."' hidden> ";


                    echo "<div class='row'>";

                      echo "<div class='col-md-4 text-center'>";
                        echo "<div class='kv-avatar'>";
                            echo "<div class='file-loading'>";
                                echo "<input id='avatar-1' name='foto' id='foto' type='file'>";
                            echo "</div>";
                        echo "</div>";
                        echo "<div class='kv-avatar-hint'><small>Seleccione imagen < 1500 KB</small></div>";
                      echo "</div>";

                      echo "<div class='col-md-8'>";
                        echo "<div class='col-md-12  mb-20'>";
                          echo "<label>Nombre</label>";
                          echo "<input class='form-control' value='".$columna['nombre']."' type='text' name='nombre'>";
                        echo "</div>";

                        echo "<div class='col-md-12 mb-20'>";
                          echo "<label>Apellidos</label>";
                          echo "<input class='form-control' value='".$columna['apellidos']."' type='text' name='apellidos'>";
                        echo "</div>";

                        echo "<div class='clearfix'></div>";
                        echo "<div class='col-md-12 mb-20'>";
                          echo "<label>Email</label>";
                          echo "<input class='form-control' value='".$columna['email']."' type='email' name='email'>";
                        echo "</div>";
                  
                         
                        echo "<input type='text' id='rutaFoto' value='".$columna['foto']."' hidden>";
                     

                        echo "<div class='clearfix'></div>";
                        

                        echo "<div class='col-md-12 mb-20'>";
                          echo "<label>Telefono</label>";
                          echo "<input class='form-control' value='".$columna['telefono']."' type='number' name='telefono'>";
                        echo "</div>";
                        echo "<div class='clearfix'></div>";

                        echo "<div class='col-md-12 mb-20'>";
                          echo "<label>Fecha Nacimiento</label>";
                          echo "<div class='input-group'>";
                            echo "<div class='input-group-addon'>";
                              echo "<i class='fa fa-calendar'></i>";
                            echo "</div>";
                            echo "<input class='form-control' value='".$columna['nacimiento']."' id='demoDate' name='nacimiento' placeholder='MM/DD/YYYY' type='text'/>";
                          echo "</div>";
                        echo "</div>";

                        echo "<div class='form-group col-md-12 mb-20'>";
                          echo "<label class='control-label'>Estado</label>";
                          echo "<div class='toggle-flip'>";
                            echo "<label>";
                            
                            if($columna['estado'] ==1){
                              echo "<input  type='checkbox' name='estado'><span class='flip-indecator' data-toggle-on='DISPONIBLE' data-toggle-off='OCUPADO'></span>";
                            }else{
                              echo "<input checked='checked' type='checkbox' name='estado'><span class='flip-indecator' data-toggle-on='DISPONIBLE' data-toggle-off='OCUPADO'></span>";
                            }
                            echo "</label>";
                          echo "</div>";
                        echo "</div>";

                        echo "<div class='col-md-12'>";
                          echo "<button class='btn btn-primary' ><i class='fa fa-fw fa-lg fa-check-circle'></i> Guardar cambios</button>";
                        echo "</div>";

                      echo "</div>";
                    echo "</div>";

                  echo "</form>";
                }
              ?>
            </div>
          </div>
        </div>
       
      </div>
      
    </div>
    <style type="text/css">
      .toggle-flip input[type="checkbox"] + .flip-indecator{
          width: 86px !important;
      }
    </style>
    <script>
      var btnCust = ''; 
      var rutaFoto = $("#rutaFoto").val();
      $("#avatar-1").fileinput({
          overwriteInitial: true,
          maxFileSize: 1500,
          showClose: false,
          showCaption: false,
          browseLabel: '',
          removeLabel: '',
          browseIcon: '<i class="fa fa-folder-open"></i>',
          removeIcon: '<i class="fa fa-times"></i>',
          removeClass: 'btn btn-danger ',
          removeTitle: 'Cancelar o resetear cambios',
          elErrorContainer: '#kv-avatar-errors-1',
          msgErrorClass: 'alert alert-block alert-danger',
          defaultPreviewContent: '<img src="'+rutaFoto+'" alt="Tu foto de perfil">',
          layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
          allowedFileExtensions: ["jpg", "png", "gif"]
      });

     
    </script>

    <!-- Javascripts-->
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/pace.min.js"></script>
    <script src="../js/main.js"></script>
    <script type="text/javascript" src="../js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="../js/plugins/bootstrap-datepicker.min.js"></script>

    <script>
      $('#demoDate').datepicker({
        format: "yyyy/mm/dd",
        autoclose: true,
        todayHighlight: true
      });

      

    </script>

  </body>
</html>