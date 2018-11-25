<?php
  session_start();
  $_SESSION['message'] = '';
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "web";
   $tbl_name = "users";
  $connection = new mysqli($server, $username, $password, $dbname);
  if ($connection->connect_error) {
      die("La conexion ha fallado: " . $connection->connect_error);
  }
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //two passwords are equal to each other
    if ($_POST['password'] == $_POST['confirmpassword']) {

      $username = $connection->real_escape_string($_POST['username']);
      $email = $connection->real_escape_string($_POST['email']);
      $password = md5($_POST['password']);//md5 hash password
      $fullname = $connection->real_escape_string($_POST['fullname']);
      $foto_path = $connection->real_escape_string('build/images/users/images_users/'.$_FILES['foto']['name']);

      //make sure file type is image

      if (preg_match("!image!",$_FILES['foto']['type'])) {
        //copy image to img/folder
        if (copy($_FILES['foto']['tmp_name'], $foto_path)) {
          $_SESSION['username'] = $username;
          $_SESSION['fullname'] = $fullname;
          $_SESSION['foto'] = $foto_path;

          $searchUser = "SELECT * FROM $tbl_name
          WHERE username = '$_POST[username]'";
          $searchEmail = "SELECT * FROM $tbl_name
          WHERE email = '$_POST[email]'";
          $result = $connection->query($searchUser);
          $count = mysqli_num_rows($result);

          if ($count == 1) {
            $_SESSION['message'] = "Este nombre de usuario ya existe, porfavor elige otro!";
          }
          else
          {
            $count = 0;
            $result = $connection->query($searchEmail);
            $count = mysqli_num_rows($result);
            if ($count == 1) {
              $_SESSION['message'] = "Este correo ya esta en uso, porfavor utiliza otro!";
            }
            else
            {
              $sql = "INSERT INTO users (username, email, password,fullname, foto)"."VALUES('$username','$email','$password','$fullname','$foto_path')";

              //if the query is succesful, redirect to welcome.php page, done!
              if ($connection->query($sql) === true) {
                $_SESSION['message'] = "Registro completo! Se añadio $username a la base de datos!";
                header("location: profile.php");
              }
              else{
                $_SESSION['message'] = "Usuario no pudo ser añadido!";
              }
            }
          }
        }
        else{
          $_SESSION['message'] = "Archivo no se pudo subir!";
        }
      }
      else{
        $_SESSION['message'] = "Porfavor solo usa imagenes GIF, JPG or PNG !";
      }
    }
    else{
      $_SESSION['message'] = "Contraseñas no coinciden!";
    }
  }


  mysqli_close($connection);


?>
<!-- HTML -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="build/css/bootstrap.min.css">
<link rel="stylesheet" href="build/css/register3.css" type="text/css">
<title>Registro</title>
</head>
<body>
  <!--  INICIA EL CONTENIDO ****************************************************************************** -->
<header>
  <div class="fixed-top">
    <div class="iconforexit m-3">
      <a href="#"><img src="build/images/register/exiticon.svg"></a>
    </div>
  </div>
    <div class="row">
      <div class="col">
        <div class="space">
        </div>
      </div>
    </div>
</header>
<main>
  <div class="container">
      <div class="row">
          <div class="col-12 col-xl-7">
            <div class="module px-4 m-3 bg-white border border-primary rounded">
              <div class="row">
                <div class="iconcancel mt-3 ml-1   justify-content-left">
                  <a href="#"><img src="build/images/register/exiticon.svg"></a>
                </div>
              </div>
              <div class="row mb-3 justify-content-center">
                <div class="col-12 text-center">
                  <h1>Crea una cuenta</h1>
                </div>
              </div>
              <form class="form" action="register.php" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
                <div class="form-group row ">
                  <label for="username1" class="col-sm-3 col-form-label rounded"> Usuario: </label>
                  <div class="col-12 col-md-4">
                    <input class="form-control" id="username1" type="text" placeholder="Nombre Usuario" name="username" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email1" class="col-sm-3 col-form-label rounded"> Email: </label>
                  <div class="col-12 col-md-4">
                      <input class="form-control" id="email1" type="email" placeholder="Email" name="email" required />
                  </div>

                </div>
                <div class="form-group row">
                  <label for="pass1" class="col-sm-3 bg-success col-form-label rounded">Contraseña: </label>
                  <div class="col-12 col-md-4">
                    <input class="form-control" id="pass1" type="password" placeholder="Contraseña" name="password" autocomplete="new-password" required />
                  </div>

                </div>
                <div class="form-group row">
                    <label for="pass2" class="col-sm-3 col-form-label rounded bg-white"></label>
                  <div class="col-12 col-md-4">
                    <input class="form-control" id="pass2" type="password" placeholder="Confirmar" name="confirmpassword" autocomplete="new-password" required />
                  </div>

                </div>
                <div class="form-group row">
                  <label for="full1" class="col-sm-3 bg-info col-form-label rounded"> Usuario: </label>
                  <div class="col-12 col-md-4">
                    <input class="form-control" id="full1" type="text" placeholder="Nombre Completo" name="fullname" required />
                  </div>

                </div>
                <div class="form-group row text-center">
                  <div class="avatar"><label class="col-sm-4 text-black bg-white col-form-label rounded">Selecciona tu avatar: </label><input type="file" name="foto" accept="image/*" required /></div>
                </div>
                <div class="form-group row justify-content-center">
                  <button type="submit" class="btn btn-primary"> Registrarse </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col">

          </div>
      </div>
  </div>

</main>

<!-- TERMINA EL CONTENIDO *************************************************************************************  -->
<!-- Scripts /////////////////////// -->
<script type="text/javascript" src="build/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="build/js/popper.min.js"></script>
<script type="text/javascript" src="build/js/bootstrap.min.js"></script>
<script type="text/javascript" src="build/js/scripts.js"></script>
</body>
</html>
