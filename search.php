
<?php
	include 'build/php/connectionsearch.php';
	include 'build/php/consultasearch.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="image/png" href="favicon1.png"/>
<!--===============================================================================================-->
<link rel="stylesheet" href="build/css/bootstrap.min.css">
<link rel="stylesheet" href="build/css/profile.css">
<link rel="stylesheet" href="build/css/register4.css">
<title>Perfil</title>
</head>
<body>
	<!--  INICIA EL CONTENIDO ****************************************************************************** -->

<header>
  <div class="fixed-top">
    <div class="iconforexit m-3">
      <a href="index.php"><img src="build/images/profile/utilities/exit.png" ></a>
    </div>
  </div>
    <div class="row">
      <div class="col">
        <div class="space">
        </div>
      </div>
    </div>
</header>

<main>
  <div class="container">
      <div class="row">
          <div class="col-12 col-xl-7">
            <div class="module px-4 m-3 bg-white border border-primary rounded">
              <div class="row mb-3 justify-content-center">
                <div class="col-12 text-center">
                  <!-- -->
                </div>
              </div>
              <!-- -->
							<?php
								if (isset($_POST['submit-search'])) {
									$search = mysqli_real_escape_string($conn, $_POST['search']);
									$sql = "SELECT * FROM users WHERE nickname LIKE '%$search%' OR fullname LIKE '%$search%' OR username LIKE '%$search%' ";
									$result = mysqli_query($conn, $sql);
									$queryResult = mysqli_num_rows($result);

									echo "¡Se encontraron ".$queryResult." resultados!";
									if ($queryResult > 0) {
										while ($row = mysqli_fetch_assoc($result)) {
											echo "<a href='searchprofile.php?title=".$row['nickname']."&name=".$row['fullname']."'>";
											$nickname = $row['nickname'];
											$username = $row['username'];
											//$foto = $row['foto'];
											$fullname = $row['fullname'];
										}
									} else{
										echo "<br>¡No se encontraron resultados para esta búsqueda!";
											$nickname = "";
											$username = "";
											//$foto =  "";
											$fullname = "";
									}
								 }
								 /*<img width="30%" height="30%" src='<?php echo $foto;?>'>*/

							?>
								<div class='user-box'>
									<h3><?php echo $nickname; ?></h3>
									<h3><?php echo $username; ?></h3>

									<p><?php echo $fullname; ?></p>
								</div></a>

            </div>
          </div>
          <div class="col">

          </div>
      </div>
  </div>

</main>




<!-- -->
 <script type="text/javascript" src="build/js/jquery-3.3.1.slim.min.js"></script>
 <script type="text/javascript" src="build/js/popper.min.js"></script>
 <script type="text/javascript" src="build/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="build/js/scripts.js"></script>
 </body>
 </html>
