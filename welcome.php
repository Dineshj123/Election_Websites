<?php
session_start();
$user=110114024;
echo "Welcome  ".$user; 

?>
<html>
<head>
	<title>Welcome Page</title>
	<style>
	#container a:hover{
		text-decoration:none;
	}
	</style>
	
</head>
<body>
	<div id="container">
	<a href="vote_for_boys.php">Click Here for electing boys CR...</a><br>
	<a href="vote_for_girls.php">Click Here for electing girls CR...</a>
	</div>
</body>
</html>