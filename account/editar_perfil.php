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
        $twitter = $_POST['twitter'];
        $instagram = $_POST['instagram'];
        $deviantart = $_POST['deviantart'];
        $tumblr = $_POST['tumblr'];
        $patreon = $_POST['patreon'];
        $description = $_POST['description'];


		$foto=$_FILES["foto"]["name"];
	    $ruta=$_FILES["foto"]["tmp_name"];
	    $destino="../build/images/Users/Images_users/".$foto;

	    #Valido si el email ya existe
	    $sql_email = "SELECT * FROM users WHERE email = '$email' AND id != '$id_usuario' ";
		$resultado_email = mysqli_query($conexion, $sql_email) or die("Error en consulta");
		$row = mysqli_num_rows($resultado_email);
		$_SESSION["alerta"] = True;
		if($row == 1){
			$_SESSION["mensaje_alerta"] = "<div class='alert alert-dismissible alert-danger'> <button class='close' type='button' data-dismiss='alert'>×</button>  El correo <strong>".$email."</strong> ya existe</div>";
			header("Location: profile.php");

		}else{
			#Se guarda los cambios del perfil
			$sql_editar = "UPDATE users SET fullname = '$nombre',password = '$password', nickname = '$nickname', email = '$email', Facebook = '$Facebook', birthday = '$fecha_nacimiento',twitter ='$twitter',instagram='$instagram',deviantart='$deviantart',tumblr = '$tumblr', patreon = '$patreon', description = '$description' WHERE id = '$id_usuario'";
			$resultado = mysqli_query($conexion, $sql_editar) or die("Error en consulta 2");

			#Se valida si se cambio la foto de perfil
			if ($foto != ""){
		    	copy($ruta,$destino);
		    	$sql_editar_foto = "UPDATE users SET foto = '$destino' WHERE id = '$id_usuario'  ";
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
