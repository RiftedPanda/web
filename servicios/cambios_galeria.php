 <?php

  session_start();

  if(isset($_SESSION['usuario'])){
    include '../config.php';
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
    <script type="text/javascript" src="../js/plugins/select2.min.js"></script>

    <script src="../ckeditor/ckeditor.js"></script>
    <script src="../ckeditor/samples/js/sample.js"></script>
    <script src="../ckfinder/ckfinder.js"></script>
    <title>Editar Galeria</title>
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
            .galeria { background: #E5E5E5; margin: 10px 0; border: 1px solid #b3b3b3; padding: 10px 0; border-radius: 4px;}
            .kv-avatar{    background: #fff; }
          </style>
          <div class="card ">
            <h3 class="card-title line-head"><i class="fa fa-briefcase"></i> &nbsp;Agregar imagenes</h3>
              <div class="row">
                <div class="col-lg-12 box">
                  <div class="box-content">
                    <?php

                      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                      $charactersLength = strlen($characters);
                      $codigoGaleria = '';
                      for ($i = 0; $i < 10; $i++) {
                          $codigoGaleria .= $characters[rand(0, $charactersLength - 1)];
                      }

                        $id_usuario=$_SESSION["usuario"];
                        $sql = "SELECT * FROM user WHERE (username = '$usuario') ";
                        $resultado = mysqli_query($conexion, $sql) or die("Error en consulta");   
                        while ($columna = mysqli_fetch_array($resultado)) 
                {

                
                      echo "<form action='checkgaleria.php' method='post' enctype='multipart/form-data'>";
                        echo "<input name='username' value='$id_usuario' hidden>";
                      /*  echo "<input name='codigo_galeria' value='$codigoGaleria' hidden>"; */
                        echo "<input name='id_usuario' value='".$columna['id']."' hidden > ";

                        
                        $categorias = "SELECT * FROM categories";
                        $resultado_categorias = mysqli_query($conexion, $categorias) or die("Error en consulta");
                        
                        echo "<div class='form-group'>";
                          echo "<label class='control-label'>Categoria</label>";
                          echo "<select class='form-control' id='demoSelect' name='categoria'>";
                              echo "<optgroup label='Selecciona una Categoria'>";
                              while ($categoria = mysqli_fetch_array($resultado_categorias)) 
                              {       
                                 
                               echo "<option value='".$categoria['Id']."-".$categoria['namecat']."'>".$categoria['namecat']."</option>";  
                                  
                              }
                            
                           echo "<option value='otro' disabled>Otro</option>";
                          echo "</select>";

                        echo "</div>"; 

                         echo "<div class='form-group'>";
                            echo "<label class='control-label'>Imagenes</label>";
                          echo "</div>";
                          
                          echo "<div class='row galeria'>";

                            echo "<div class='col-md-3 text-center'>";
                              echo "<div class='kv-avatar'>";
                                  echo "<div class='file-loading'>";
                                      echo "<input id='imagen1' name='imagen1' type='file' required>";
                                  echo "</div>";
                                  echo "<div class='kv-avatar-hint'><small>Seleccione imagen < 1500 KB</small></div>";
                              echo "</div>";
                              
                            echo "</div>"; 

                            echo "<div class='col-md-3 text-center'>";
                              echo "<div class='kv-avatar'>";
                                  echo "<div class='file-loading'>";
                                      echo "<input id='imagen2' name='imagen2' type='file' required>";
                                  echo "</div>";
                                  echo "<div class='kv-avatar-hint'><small>Seleccione imagen < 1500 KB</small></div>";
                              echo "</div>";                              
                            echo "</div>";     

                            echo "<div class='col-md-3 text-center'>";
                              echo "<div class='kv-avatar'>";
                                  echo "<div class='file-loading'>";
                                      echo "<input id='imagen3' name='imagen3' type='file' required>";
                                  echo "</div>";
                                  echo "<div class='kv-avatar-hint'><small>Seleccione imagen < 1500 KB</small></div>";
                              echo "</div>";                              
                            echo "</div>";     

                            echo "<div class='col-md-3 text-center'>";

                              echo "<div class='kv-avatar'>";
                                  echo "<div class='file-loading'>";
                                      echo "<input id='imagen4' name='imagen4' type='file' required>";
                                  echo "</div>";
                                  echo "<div class='kv-avatar-hint'><small>Seleccione imagen < 1500 KB</small></div>";
                              echo "</div>";                              
                            echo "</div>";                                                                          
                          echo "</div>";

                        echo "<div class='form-group'>";
                          echo "<button class='btn btn-primary icon-btn'><i class='fa fa-fw fa-lg fa-check-circle'></i>Agregar</button> &nbsp;&nbsp;&nbsp;";
                          echo "<a class='btn btn-default icon-btn' href='../account/profile.php'><i class='fa fa-fw fa-lg fa-times-circle'></i>Cancelar</a>";
                        echo "</div>";                    
                      echo "</form>";
                        }
                    ?>
                  </div>
                  
                </div>
              </div>       
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script type="text/javascript">
      var btnCust = ''; 
      var btnCust = ''; 
      $("#imagen1").fileinput({
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
          defaultPreviewContent: '<img src="" alt="Imagen 1">',
          layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
          allowedFileExtensions: ["jpg", "png", "gif"]
      });

      var btnCust = ''; 
      $("#imagen2").fileinput({
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
          defaultPreviewContent: '<img src="" alt="Imagen 2">',
          layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
          allowedFileExtensions: ["jpg", "png", "gif"]
      });

      var btnCust = ''; 
      $("#imagen3").fileinput({
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
          defaultPreviewContent: '<img src="" alt="Imagen 3">',
          layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
          allowedFileExtensions: ["jpg", "png", "gif"]
      });

      var btnCust = ''; 
      $("#imagen4").fileinput({
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
          defaultPreviewContent: '<img src="" alt="Imagen 4">',
          layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
          allowedFileExtensions: ["jpg", "png", "gif"]
      });

      $('#demoSelect').select2();

      $('#otraCategoria').hide();
      $("#demoSelect").change(function(){
        if($(this).val() == 'otro'){
          $('#otraCategoria').show(500);
        }else{
          $('#otraCategoria').hide(500);
        }
      });

       window.onload = function(){
        editorDescripcion = CKEDITOR.replace("descripcion");
        CKFinder.setupCKEditor(editorDescripcion, 'http://localhost/UpJobs/ckfinder')
      }   

    </script>

    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/pace.min.js"></script>
    <script src="../js/main.js"></script>

    <script type="text/javascript" src="../js/plugins/select2.min.js"></script>

    

  </body>
</html>