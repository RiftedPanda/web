<?php
	session_start();


	if (isset($_POST['id_usuario'])) {

		include '../config.php';
		$id_usuario = $_POST['id_usuario'];
		$nombre = $_POST['fullname'];
		$nickname = $_POST['nickname'];
		$email = $_POST['email'];
		$Facebook = $_POST['Facebook'];
		$fecha_nacimiento = $_POST['birthday'];
        $username = $_POST['username'];
        $password = $_POST['password'];
		$estado = 1;
        $categoria = 2;
        $id = 0;
        $id_task = 1;
        $id_gallery = 1;

		$foto=$_FILES["foto"]["name"];
	    $ruta=$_FILES["foto"]["tmp_name"];
	    $destino="../build/images/Users/Images_users/".$foto;
			
	    #Valido si el email ya existe
	    $sql_email = "SELECT * FROM user WHERE email = '$email' AND id != '$id_usuario' ";
		$resultado_email = mysqli_query($conexion, $sql_email) or die("Error en consulta");
		$row = mysqli_num_rows($resultado_email);
		$_SESSION["alerta"] = True;
		if($row == 1){
			$_SESSION["mensaje_alerta"] = "<div class='alert alert-dismissible alert-danger'> <button class='close' type='button' data-dismiss='alert'>×</button>  El correo <strong>".$email."</strong> ya existe</div>";
			header("Location: profile.php");

		}else{
			#Se guarda los cambios del perfil
			$sql_editar = "UPDATE user SET fullname = '$nombre',password = '$password', nickname = '$nickname', email = '$email',id_category='$categoria',ID_gallery = '$id_gallery',id_task = '$id_task', Facebook = '$Facebook', birthday = '$fecha_nacimiento' WHERE id = '$id_usuario'  ";
			$resultado = mysqli_query($conexion, $sql_editar) or die("Error en consulta 2");

			#Se valida si se cambio la foto de perfil
			if ($foto != ""){
		    	copy($ruta,$destino);
		    	$sql_editar_foto = "UPDATE user SET foto = '$destino' WHERE id = '$id_usuario'  ";
		    	$resultado_foto = mysqli_query($conexion, $sql_editar_foto) or die("Error en consulta 1");
		    }
			$_SESSION["mensaje_alerta"] = "<div class='alert alert-dismissible alert-success'>  <button class='close' type='button' data-dismiss='alert'>×</button>Los cambios se han guardado correctamente </div>";
			header("Location: profile.php");
		}

	}
	else{
		header("Location: profile.php");
	}

?>
