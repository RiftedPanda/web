<?php
	$sql = "SELECT * FROM users";
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
