<?php

  session_start();
  
  if(isset($_SESSION['usuario'])){
    echo "<script> window.location='profile.php'; </script>";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->

<script type="text/javascript">
  (function() {
    var po = document.createElement('script');
    po.type = 'text/javascript'; po.async = true;
    po.src = 'https://plus.google.com/js/client:plusone.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);
  })();
  </script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="../account/checksignup.php" method="post">
					<span class="login100-form-title p-b-49">
						Registro
						 <?php

				            if(isset($_SESSION['mensaje'])){
				              echo "<p style='color: red;'>". $_SESSION['mensaje'] . "</p>";
				              session_destroy();
				            }

				          ?>
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Usuario es requerido">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="Usuario" placeholder="Ingrese su usuario">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email es requerido">
						<span class="label-input100">Email</span>
						<input class="input100" type="Email" name="Email" placeholder="Ingrese su email">
						<span class="focus-input100" data-symbol="&#xf200;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Contraseña es requerida"> 
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="Pass" placeholder="Ingrese su Contraseña">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
						
						</a>
					</div>

					 <input type="text" name="registro" hidden>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Registrarse
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							o registrate usando
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<button class="g-signin login100-social-item bg3 " 
							data-scope="https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email"
							data-requestvisibleactions="http://schemas.google.com/AddActivity"
							data-clientId="1022621130028-punpkh9voicguoelqup86tcmec2d78o8.apps.googleusercontent.com"
							data-accesstype="online"
							data-callback="mycoddeSignIn"
							data-theme="dark"
							data-cookiepolicy="single_host_origin">
							<i class="fa fa-google"></i>
						</button>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Ya tienes cuenta?
						</span>

						<a href="../index.php" class="txt2">
							Ingresa aquí!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	var gpclass = (function(){
	
	//Defining Class Variables here
	var response = undefined;
	return {
		//Class functions / Objects
		
		mycoddeSignIn:function(response){
			// The user is signed in
			if (response['access_token']) {
			
				//Get User Info from Google Plus API
				gapi.client.load('plus','v1',this.getUserInformation);
				
			} else if (response['error']) {
				// There was an error, which means the user is not signed in.
				//alert('There was an error: ' + authResult['error']);
			}
		},
		
		getUserInformation: function(){
			var request = gapi.client.plus.people.get( {'userId' : 'me'} );
			request.execute( function(profile) {
				var email = profile['emails'].filter(function(v) {
					return v.type === 'account'; // Filter out the primary email
				})[0].value;
				var fName = profile.displayName;
				$("#inputFullname").val(fName);
				$("#inputEmail").val(email);
			});
		}

	
	}; //End of Return
	})();
	
	function mycoddeSignIn(gpSignInResponse){
		gpclass.mycoddeSignIn(gpSignInResponse);
	}
	</script>
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>