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
    <script type="text/javascript" src="../js/plugins/select2.min.js"></script>

    <script src="../ckeditor/ckeditor.js"></script>
    <script src="../ckeditor/samples/js/sample.js"></script>
    <script src="../ckfinder/ckfinder.js"></script>
    <title>Editar Galeria</title>
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      
      <?php include'../base.php' ?> 
      <?php
      
    echo "<div class='form-group'>";
                            echo "<label class='control-label'>Imagenes</label>";
                          echo "</div>";
                          
                          echo "<div class='row galeria'>";

                            echo "<div class='col-md-3 text-center'>";
                              echo "<div class='kv-avatar'>";
                                  echo "<div class='file-loading'>";
                                      echo "<input id='imagen1' name='imagen1' type='file'>";
                                  echo "</div>";
                                  echo "<div class='kv-avatar-hint'><small>Seleccione imagen < 1500 KB</small></div>";
                              echo "</div>";
                              
                            echo "</div>"; 

                            echo "<div class='col-md-3 text-center'>";
                              echo "<div class='kv-avatar'>";
                                  echo "<div class='file-loading'>";
                                      echo "<input id='imagen2' name='imagen2' type='file'>";
                                  echo "</div>";
                                  echo "<div class='kv-avatar-hint'><small>Seleccione imagen < 1500 KB</small></div>";
                              echo "</div>";                              
                            echo "</div>";     

                            echo "<div class='col-md-3 text-center'>";
                              echo "<div class='kv-avatar'>";
                                  echo "<div class='file-loading'>";
                                      echo "<input id='imagen3' name='imagen3' type='file'>";
                                  echo "</div>";
                                  echo "<div class='kv-avatar-hint'><small>Seleccione imagen < 1500 KB</small></div>";
                              echo "</div>";                              
                            echo "</div>";     

                            echo "<div class='col-md-3 text-center'>";

                              echo "<div class='kv-avatar'>";
                                  echo "<div class='file-loading'>";
                                      echo "<input id='imagen4' name='imagen4' type='file'>";
                                  echo "</div>";
                                  echo "<div class='kv-avatar-hint'><small>Seleccione imagen < 1500 KB</small></div>";
                              echo "</div>";                              
                            echo "</div>";                                                                          
                          echo "</div>";

                          $codigo_galeria = $servicio['codigo_galeria'];                                       
                        }

                        $galeria = "SELECT * FROM galeria WHERE (codigo_galeria = '$codigo_galeria') ";
                        $resiultado_galeria = mysqli_query($conexion, $galeria) or die("Error en consulta");
                        $count = 1;
                        while ($galeria = mysqli_fetch_array($resiultado_galeria)) 
                        {
                          echo "<input id='ruta".$count."' value='".$galeria['imagen']."' hidden>";
                          echo "<input name='id_imagen".$count."' value='".$galeria['id']."' hidden>";
                          $count = $count + 1;
                        } 

                        echo "<div class='form-group'>";
                          echo "<button class='btn btn-primary icon-btn'><i class='fa fa-fw fa-lg fa-check-circle'></i>Guardar Cambios</button> &nbsp;&nbsp;&nbsp;";
                          echo "<a class='btn btn-default icon-btn' href='servicios.php'><i class='fa fa-fw fa-lg fa-times-circle'></i>Cancelar</a>";
                        echo "</div>";  
                        ?>


    <script type="text/javascript">


      var ruta1 = $("#ruta1").val();
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
          defaultPreviewContent: '<img src="'+ruta1+'" alt="">',
          layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
          allowedFileExtensions: ["jpg", "png", "gif"]
      });

      var ruta2 = $("#ruta2").val();
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
          defaultPreviewContent: '<img src="'+ruta2+'" alt="">',
          layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
          allowedFileExtensions: ["jpg", "png", "gif"]
      });

      var ruta3 = $("#ruta3").val();
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
          defaultPreviewContent: '<img src="'+ruta3+'" alt="">',
          layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
          allowedFileExtensions: ["jpg", "png", "gif"]
      });

      var ruta4 = $("#ruta4").val();
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
          defaultPreviewContent: '<img src="'+ruta4+'" alt="">',
          layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
          allowedFileExtensions: ["jpg", "png", "gif"]
      });

      window.onload = function(){
        editorDescripcion = CKEDITOR.replace("descripcion");
        CKFinder.setupCKEditor(editorDescripcion, 'http://localhost/UpJobs/ckfinder')
      }   

    </script>

    <!-- Javascripts-->
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/pace.min.js"></script>
    <script src="../js/main.js"></script>
    <!-- Include Date Range Picker -->
    
    

    

  </body>
</html>