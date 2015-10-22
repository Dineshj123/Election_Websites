<?php
session_start();
$user=111114098;
$_SESSION['user']=111114098;
echo "Welcome  ".$user; 
$check=substr($_SESSION['user'],1,2);
if($check!=10){header('Location:others.php');}
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