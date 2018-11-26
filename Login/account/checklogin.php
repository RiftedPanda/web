<?php
	session_start();
	
	if (isset($_POST['login'])) {

		include '../config.php';
		
		$usuario = $_POST['Usuario'];
		$password = $_POST['Pass'];
		$sql = "SELECT * FROM user WHERE (username = '$usuario') AND (password = '$password') ";
		$resultado = mysqli_query($conexion, $sql) or die("Error en consulta");		
		$row = mysqli_num_rows($resultado);

		if($row == 1){
			$_SESSION["usuario"] = $_POST['Usuario'];
			while ($columna = mysqli_fetch_array($resultado)) 
            {
            	$_SESSION["id_usuario"] = $columna['id'];
            }
			header("Location: profile.php");					
		}
		else{
			$_SESSION["mensaje"] = "Usuario o contraseña es incorrecto";
			header("Location: ../index.php");
		}		
	}
	else{		
		header("Location: ../index.php");		
	}

?>