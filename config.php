<?php
  	$user = "root";
	$password ="";
	$servidor = "localhost";
	$basededatos= "weeb";
	$conexion = mysqli_connect($servidor, $user, $password) or die("No se ha podido conectar");
	$db= mysqli_select_db($conexion, $basededatos) or die("Error base de datos");
?>
