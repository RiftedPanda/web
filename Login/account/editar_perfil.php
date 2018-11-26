<?php
	session_start();
	

	if (isset($_POST['id_usuario'])) {
		
		include '../config.php';
		$id_usuario = $_POST['id_usuario'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$fecha_nacimiento = $_POST['nacimiento'];
		
		
		
		$foto=$_FILES["foto"]["name"];
	    $ruta=$_FILES["foto"]["tmp_name"];
	    $destino="../fotos/".$foto;

	    #Valido si el email ya existe
	    $sql_email = "SELECT * FROM user WHERE email = '$email' AND id_user != '$id_usuario' ";
		$resultado_email = mysqli_query($conexion, $sql_email) or die("Error en consulta");		
		$row = mysqli_num_rows($resultado_email);
		$_SESSION["alerta"] = True;
		if($row == 1){
			$_SESSION["mensaje_alerta"] = "<div class='alert alert-dismissible alert-danger'> <button class='close' type='button' data-dismiss='alert'>×</button>  El correo <strong>".$email."</strong> ya existe</div>";
			header("Location: profile.php");
										
		}else{
			#Se guarda los cambios del perfil
			$sql_editar = "UPDATE usuarios SET fullname = '$nombre', nickname = '$apellidos', email = '$email', Facebook = '$telefono', birthday = '$fecha_nacimiento', estado = '$estado' WHERE id_user = '$id_usuario'  ";
			$resultado = mysqli_query($conexion, $sql_editar) or die("Error en consulta");

			#Se valida si se cambio la foto de perfil
			if ($foto != ""){
		    	copy($ruta,$destino);
		    	$sql_editar_foto = "UPDATE user SET foto = '$destino	' WHERE id_user = '$id_usuario'  ";
		    	$resultado_foto = mysqli_query($conexion, $sql_editar_foto) or die("Error en consulta");
		    }
			$_SESSION["mensaje_alerta"] = "<div class='alert alert-dismissible alert-success'>  <button class='close' type='button' data-dismiss='alert'>×</button>Los cambios se han guardado correctamente </div>";
			header("Location: profile.php");
		}
	    
	}
	else{		
		header("Location: profile.php");		
	}	

?>