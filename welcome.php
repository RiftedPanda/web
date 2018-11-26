
<?php session_start();  ?>
<!-- HTML ///////////////////////////////////////////////////////////////////////////////////////// -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="build/css/bootstrap.min.css">
<link rel="stylesheet" href="build/css/welcome.css" type="text/css">
<title>Bienvenid@</title>
</head>
<body>
  <!--  INICIA EL CONTENIDO ****************************************************************************** -->

<div class="body content">
	<div class="welcome">
		<div class="alert alert-success">
			<?= $_SESSION['message']?>
		</div>
		<span class="user"><img src='<?= $_SESSION['avatar']?>'></span><br />
		Welcome <span class="user"><?= $_SESSION['username']?><br />
		<span class="user"><?= $_SESSION['fullname']?><br />

		<?php
			$_SESSION['message'] = '';
  			$server = "localhost";
  			$username = "root";
  			$password = "";
  			$dbname = "accounts";
  			$connection = new mysqli($server, $username, $password, $dbname);
  			$sql = 'SELECT username, fullname, avatar FROM users';
  			$result = $connection->query($sql);//$result = mysqli_result_object
		?>

		<div id="registered">
			<span>All registered users</span>
			<?php
				while ($row = $result->fetch_assoc()) {
				 	echo "<div class='userlist'><span>$row[username]</span><br />";
				 	echo "<span>$row[fullname]</span><br />";
				 	echo "<img src='$row[avatar]'></div>";
				}
			?>
		</div>
		<!-- TERMINA EL CONTENIDO *************************************************************************************  -->
		<!-- Scripts /////////////////////// -->
		<script type="text/javascript" src="build/js/jquery-3.3.1.slim.min.js"></script>
		<script type="text/javascript" src="build/js/popper.min.js"></script>
		<script type="text/javascript" src="build/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="build/js/scripts.js"></script>
		</body>
		</html>
