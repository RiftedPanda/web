<?php
	session_start();
	

	if (isset($_POST['id_usuario'])) {
		
		include '../config.php';
		$id_usuario = $_POST['id_usuario'];	
		$categoria = $_POST['categoria'];
       
		$publicar = 0;
        $idcat = 2; 
		if ($categoria != "otro"){
			list($id_categoria, $nombre_categoria) = explode('-', $categoria);
         /*   $idcat = $columna['id_category']; */
		}

        
		
		$imagen1=$_FILES["imagen1"]["name"];
	    $ruta1=$_FILES["imagen1"]["tmp_name"];
	    $destino1="../build/images/Users/galeria/".$imagen1;
	    echo $imagen1;
	    copy($ruta1,$destino1);
    	$sql_imagen1 = "INSERT INTO gallery (id_user,Id, uniqueurl) VALUES ('$id_usuario','$id_categoria','$destino1')";
        echo $idcat;
    	$resultado1 = mysqli_query($conexion, $sql_imagen1) or die("Error en consulta1");

	    $imagen2=$_FILES["imagen2"]["name"];
	    $ruta2=$_FILES["imagen2"]["tmp_name"];
	    $destino2="../build/images/Users/galeria/".$imagen2;
	    echo $imagen2;
	    copy($ruta2,$destino2);
    	$sql_imagen2 = "INSERT INTO gallery (id_user,Id, uniqueurl) VALUES ('$id_usuario','$id_categoria', '$destino2')";
    	$resultado2 = mysqli_query($conexion, $sql_imagen2) or die("Error en consulta2");

	    $imagen3=$_FILES["imagen3"]["name"];
	    $ruta3=$_FILES["imagen3"]["tmp_name"];
	    $destino3="../build/images/Users/galeria/".$imagen3;
	    echo $imagen3;
	    copy($ruta3,$destino3);
    	$sql_imagen3 = "INSERT INTO gallery (id_user,Id, uniqueurl) VALUES ('$id_usuario','$id_categoria', '$destino3')";
    	$resultado3 = mysqli_query($conexion, $sql_imagen3) or die("Error en consulta3");

	    $imagen4=$_FILES["imagen4"]["name"];
	    $ruta4=$_FILES["imagen4"]["tmp_name"];
	    $destino4="../build/images/Users/galeria/".$imagen4;
	    echo $imagen4;
	    copy($ruta4,$destino4);
    	$sql_imagen4 = "INSERT INTO gallery (id_user,Id, uniqueurl) VALUES ('$id_usuario','$id_categoria', '$destino4')";
    	$resultado4 = mysqli_query($conexion, $sql_imagen4) or die("Error en consulta4");


		$_SESSION["alerta"] = True;
		$_SESSION["mensaje_alerta"] = "<div class='alert alert-dismissible alert-success'>  <button class='close' type='button' data-dismiss='alert'>×</button>Las imagenes se agregaron correctamente </div>";
		header("Location: ../account/profile.php");

	}
	else{		
		header("Location: ../index.php"); 	
	}	

?>