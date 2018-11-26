
<?php
	include 'build/php/connectionsearch.php';
	include 'build/php/consultasearch.php';
?>


<h1>Search Page</h1>
<div class="user-container">
	<?php
		if (isset($_POST['submit-search'])) {
		 	$search = mysqli_real_escape_string($conn, $_POST['search']);
		 	$sql = "SELECT * FROM users WHERE nickname LIKE '%$search%' OR fullname LIKE '%$search%' ";
		 	$result = mysqli_query($conn, $sql);
		 	$queryResult = mysqli_num_rows($result);

		 	echo "There are ".$queryResult." results!";
		 	if ($queryResult > 0) {
		 		while ($row = mysqli_fetch_assoc($result)) {
		 			echo "<a href='profile.php?title=".$row['nickname']."&name=".$row['fullname']."'>";
					$nickname = $row['nickname'];
					$foto = $row['foto'];
					$fullname = $row['fullname'];
		 		}
		 	} else{
		 		echo "There are no results matching your search!";
		 			$nickname = "";
		 			$foto =  "";
		 			$fullname = "";
		 	}
		 }

	?>
		<div class='user-box'>
			<h3><?php echo $nickname; ?></h3>
			<img width="30%" height="30%" src='<?php echo $foto; ?>'>
			<p><?php echo $fullname; ?></p>
		</div></a>
</div>
