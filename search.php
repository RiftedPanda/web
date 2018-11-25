
<?php
	include '/build/php/connectionsearch.php';
	include '/build/php/consultasearch.php';
?>


<h1>Search Page</h1>
<div class="user-container">
	<?php
		if (isset($_POST['submit-search'])) {
		 	$search = mysqli_real_escape_string($conn, $_POST['search']);
		 	$sql = "SELECT * FROM users WHERE u_nickname LIKE '%$search%' OR u_text LIKE '%$search%' OR u_name LIKE '%$search%' OR u_date LIKE '%$search%'";
		 	$result = mysqli_query($conn, $sql);
		 	$queryResult = mysqli_num_rows($result);

		 	echo "There are ".$queryResult." results!";
		 	if ($queryResult > 0) {
		 		while ($row = mysqli_fetch_assoc($result)) {
		 			echo "<a href='user.php?title=".$row['u_nickname']."&date=".$row['u_date']."'>";
		 			$nick = $row['u_nickname'];
		 			$img = $row['u_image'];
		 			$text = $row['u_text'];
		 			$name = $row['u_name'];
		 			$datetime = $row['u_date'];
		 		}
		 	} else{
		 		echo "There are no results matching your search!";
		 			$nick = "";
		 			$img =  "";
		 			$text = "";
		 			$name = "";
		 			$datetime = "";
		 	}
		 }

	?>
		<div class='user-box'>
			<h3><?php echo $nick; ?></h3>
			<img width="30%" height="30%" src='<?php echo $img; ?>'>
			<p><?php echo $text; ?></p>
			<p><?php echo $name; ?></p>
			<p><?php echo $datetime; ?></p>
		</div></a>
</div>
