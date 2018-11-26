<?php
	session_start();

	if (isset($_POST['login'])) {

		include '../config.php';

		$usuario = $_POST['Usuario'];
		$password = $_POST['Pass'];
		$sql = "SELECT * FROM user WHERE (username = '$usuario') AND (password = '$password')";
		$resultado = mysqli_query($conexion, $sql) or die("Error en consulta");
		$row = mysqli_num_rows($resultado);


		if($row == 1){
			$_SESSION["usuario"] = $_POST['Usuario'];
            $usuario_activo = $_SESSION['usuario'];
            $sql_usuario_activo = "SELECT activo FROM user WHERE (username = '$usuario_activo') ";
            $resultado_usuario_activo = mysqli_query($conexion, $sql_usuario_activo) or die("Error en consulta 2");
            $administrador = mysqli_fetch_array($resultado_usuario_activo);
            if ($administrador['activo'] == 1)
            {

                header("Location: ../index.php");
            }
            else
            {
			while ($columna = mysqli_fetch_array($resultado))
            {
            	$_SESSION["id_usuario"] = $columna['id_user'];

            }
			header("Location:../feed.php");
            }

		}
		else{
			$_SESSION["mensaje"] = "Usuario / contraseña incorrecto ";
			header("Location: ../index.php");
		}

	}
	else{
		header("Location: ../index.php");
	}

?>
