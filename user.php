
<?php
	include 'build/php/connectionsearch.php';
	include 'build/php/consultasearch.php';
?>


	<h1>User Page</h1>

	<div class="user-container">
		<?php
			$title = mysqli_real_escape_string($conn, $_GET['title']);
			$name = mysqli_real_escape_string($conn, $_GET['name']);
			$sql = "SELECT * FROM users WHERE nickname='$title' AND fullname='$name'";
			$result = mysqli_query($conn, $sql);
			$queryResults = mysqli_num_rows($result);

			if ($queryResults > 0) {
			 	while ($row = mysqli_fetch_assoc($result)) {
		 			$nickname = $row['nickname'];
		 			$foto = $row['foto'];
		 			$fullname = $row['fullname'];
			 	}
			 } else {
			 	# code...
			 }

		?>
		<div class='user-box'>
			<h3><?php echo $nickname; ?></h3>
			<img width="30%" height="30%" src='<?php echo $foto; ?>'>
			<p><?php echo $fullname; ?></p>
		</div>;

	</div>

</body>
</html>
