
<?php
	include '/build/php/connectionsearch.php';
	include '/build/php/consultasearch.php';
?>


	<h1>User Page</h1>

	<div class="user-container">
		<?php
			$title = mysqli_real_escape_string($conn, $_GET['title']);
			$date = mysqli_real_escape_string($conn, $_GET['date']);
			$sql = "SELECT * FROM users WHERE u_nickname='$title' AND u_date='$date'";
			$result = mysqli_query($conn, $sql);
			$queryResults = mysqli_num_rows($result);

			if ($queryResults > 0) {
			 	while ($row = mysqli_fetch_assoc($result)) {
		 			$nick = $row['u_nickname'];
		 			$img = $row['u_image'];
		 			$text = $row['u_text'];
		 			$name = $row['u_name'];
		 			$datetime = $row['u_date'];
			 	}
			 } else {
			 	# code...
			 }

		?>
		<div class='user-box'>
			<h3><?php echo $nick; ?></h3>
			<img width="30%" height="30%" src='<?php echo $img; ?>'>
			<p><?php echo $text; ?></p>
			<p><?php echo $name; ?></p>
			<p><?php echo $datetime; ?></p>
		</div>;

	</div>

</body>
</html>
