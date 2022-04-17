<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "moviesly";

$con = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
$id = 0;
if (isset($_POST['id'])) {
	$id = mysqli_real_escape_string($con, $_POST['id']);
}

if ($id > 0) {

	// Check record exists
	$checkRecord = mysqli_query($con, "SELECT * FROM movies WHERE id=" . $id);
	$totalrows = mysqli_num_rows($checkRecord);

	if ($totalrows > 0) {
		// Delete record
		$query = "UPDATE movies SET watched=1 WHERE id=".$id;
		mysqli_query($con, $query);
		echo 1;
		exit;
	}
} else {
	echo 0;
	exit;
}

echo 0;
exit;
