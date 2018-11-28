<?php
	session_start();


	if (isset($_POST['registro'])) {

		include '../config.php';
		$usuario = $_POST['Usuario'];
		$email = $_POST['Email'];
		$password = $_POST['Pass'];
		$sql = "SELECT * FROM users WHERE username = '$usuario' OR email = '$email' ";
		$resultado = mysqli_query($conexion, $sql) or die("Error en consulta");
		$row = mysqli_num_rows($resultado);

		if($row == 1){
			$_SESSION["mensaje"] = "El usuario ya existe";
			header("Location: ../account/registro.php");
		}
		else{
			$_SESSION["Usuario"] = $usuario;
			$sql_registrar = "INSERT INTO users (username, email, password) VALUES ('$usuario', '$email', '$password')";
			$resultado_registro = mysqli_query($conexion, $sql_registrar) or die(header("Location: page-error.html"));
			header("Location: ../index.php");
		}
	}
	else{
		header("Location: ../index.php");

	}

?>
