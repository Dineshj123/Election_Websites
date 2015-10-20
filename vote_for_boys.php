<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydatabase";
$dbcon = @mysqli_connect($servername, $username, $password, $dbname);

if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<html>
<head>
	<title>Vote_for_boys</title>
</head>
<body>
	<div id="container_slide">
	
	</div>
</body>
</html>