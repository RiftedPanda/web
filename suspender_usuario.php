<?php
	session_start();
	

	if (isset($_POST['id_usuario'])) {
		
		include '../config.php';
		$id_usuario = $_POST['id_usuario'];	
		$activo = $_POST['activo'];				
		$_SESSION["alerta"] = True;
		if ($activo == 0) {
			$activo = 1;
			$_SESSION["mensaje_alerta"] = "<div class='alert alert-dismissible alert-success'>  <button class='close' type='button' data-dismiss='alert'>×</button>El usuario fue suspendido correctamente. </div>";
		}
		elseif ($activo == 1) {
			$activo = 0;
			$_SESSION["mensaje_alerta"] = "<div class='alert alert-dismissible alert-success'>  <button class='close' type='button' data-dismiss='alert'>×</button>El usuario fue activado correctamente. </div>";
		}		
		
		
		#Se guarda los cambios del usuario
		$sql_editar = "UPDATE users SET  activo = '$activo' WHERE id = '$id_usuario'  ";
		$resultado = mysqli_query($conexion, $sql_editar) or die("Error en consulta");
		header("Location: lista-usuarios.php");
	}
	else{		
		header("Location: ../index.php");		
	}	

?>