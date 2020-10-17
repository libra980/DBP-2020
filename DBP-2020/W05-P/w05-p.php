<?php
	$db_host="localhost";
	$db_user="admin";
	$db_pw="admin";
	$db_name="homework";

	$link = mysqli_connect($db_host, $db_user, $db_pw, $db_name);

	if(mysqli_connect_error($link)) {
		echo "MariaDB connection Failed!!", "<br>";
		echo "error:", "mysqli_connect_error()";
	}else {
		echo "MariaDB connection Success!!", "<br><br>";
	}
	$query = "SELECT * FROM w05";
	$result = mysqli_query($link, $query);
	while( $row = mysqli_fetch_array($result)){

	
		$article = array(
			'name' => $row['name'],
			'title' => $row['title']
		);
		echo $article['name'], "	", $article['title'], "<br>";

	}

	mysqli_close($link);
?>
