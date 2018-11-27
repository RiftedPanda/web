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

    <title></title>
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <meta charset="utf-8">
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
                $sql = "SELECT * FROM users WHERE (username = '$usuario') ";
                $resultado = mysqli_query($conexion, $sql) or die("Error en consulta");   
                

                while ($columna = mysqli_fetch_array($resultado)) 
                {
                    echo "<form class='form form-vertical' action='../account/editar_perfil.php' method='POST' enctype='multipart/form-data'>";
                    echo "<input name='id_usuario' value='".$columna['id']."' hidden> ";
                    
                  echo "<h4 class='line-head'>Perfil ".$columna['username']."</h4>";

                  echo "<form class='form form-vertical' action='../account/editar_perfil.php' method='POST' enctype='multipart/form-data'>";
                    


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
                          echo "<label>Password</label>";
                          echo "<input class='form-control' value='".$columna['password']."' type='text' name='password'>";
                        echo "</div>";

                      echo "<div class='col-md-15'>";
                        echo "<div class='col-md-12  mb-20'>";
                          echo "<label>Nombre</label>";
                          echo "<input class='form-control' value='".$columna['fullname']."' type='text' name='fullname'>";
                        echo "</div>";
                    

                        echo "<div class='col-md-12 mb-20'>";
                          echo "<label>Apodo</label>";
                          echo "<input class='form-control' value='".$columna['nickname']."' type='text' name='nickname'>";
                        echo "</div>";
                    


                        echo "<div class='clearfix'></div>";
                        echo "<div class='col-md-12 mb-20'>";
                          echo "<label>Email</label>";
                          echo "<input class='form-control' value='".$columna['email']."' type='email' name='email'>";
                        echo "</div>";
                  
                         
                        echo "<input type='text' id='rutaFoto' value='".$columna['foto']."' hidden>";
                     

                        echo "<div class='clearfix'></div>";
                        

                        echo "<div class='col-md-12 mb-20'>";
                          echo "<label>Facebook</label>";
                          echo "<input class='form-control' value='".$columna['facebook']."' type='text' name='Facebook'>";
                        echo "</div>";
                        echo "<div class='clearfix'></div>";
                        
                        echo "<div class='col-md-12 mb-20'>";
                          echo "<label>Twitter</label>";
                          echo "<input class='form-control' value='".$columna['twitter']."' type='text' name='twitter'>";
                        echo "</div>";
                            
                            echo "<div class='clearfix'></div>";
                          echo "<div class='col-md-12 mb-20'>";
                          echo "<label>instagram</label>";
                          echo "<input class='form-control' value='".$columna['instagram']."' type='text' name='instagram'>";
                        echo "</div>";      
                    
                        echo "<div class='clearfix'></div>";
                            echo "<div class='col-md-12 mb-20'>";
                          echo "<label>Deviantart</label>";
                          echo "<input class='form-control' value='".$columna['deviantart']."' type='text' name='deviantart'>";
                        echo "</div>"; 
                                
                            echo "<div class='clearfix'></div>";
                            echo "<div class='col-md-12 mb-20'>";
                          echo "<label>Tumblr</label>";
                          echo "<input class='form-control' value='".$columna['tumblr']."' type='text' name='tumblr'>";
                        echo "</div>"; 
                            
                            echo "<div class='clearfix'></div>";
                            echo "<div class='col-md-12 mb-20'>";
                          echo "<label>Patreon</label>";
                          echo "<input class='form-control' value='".$columna['patreon']."' type='text' name='patreon'>";
                        echo "</div>"; 
                        
                            echo "<div class='clearfix'></div>";
                            echo "<div class='col-md-12 mb-20'>";
                          echo "<label>Descripción</label>";
                          echo "<input class='form-control' value='".$columna['description']."' type='text' name='description'>";
                        echo "</div>"; 
                    
                        echo "<div class='col-md-12 mb-20'>";
                          echo "<label>Fecha Nacimiento</label>";
                          echo "<div class='input-group'>";
                            echo "<div class='input-group-addon'>";
                              echo "<i class='fa fa-calendar'></i>";
                            echo "</div>";
                            echo "<input class='form-control' value='".$columna['birthday']."' id='demoDate' name='birthday' placeholder='MM/DD/YYYY' type='text'/>";
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