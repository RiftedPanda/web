<?php
	$sql = "SELECT * FROM users";
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
