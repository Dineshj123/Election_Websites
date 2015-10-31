<?php

session_start();
$user=$_SESSION['user']; 
if(!$user){header('Location:login.php');}
else{
$check=substr($_SESSION['user'],1,2);
$check2=substr($_SESSION['user'],5,2);
$check3=substr($_SESSION['user'],4,1);
if($check!=10&&$check2!=14&&$check3==1){header('Location:others.php');}
}

?>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Welcome Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel = "stylesheet" href = "election.css" />
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	
</head>
<body>
	<div class = "container-fluid">
		<p align="right"><?php echo "<span style='color:tomato;font-weight:300;font-family:Ubuntu'>HOWDY, ".$user."</span>"; ?>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-info" href='logout.php'>logout</a></p>
		<div class = "page-header" id = "header">
			CR Elections (ICE)
		</div>
		<a href="vote_for_boys.php">
			<div class = "jumbotron" id = "elect_boys">
				Vote for Boy CR
			</div>
		</a>
		<a href="vote_for_girls.php">
			<div class = "jumbotron" id = "elect_boys">
				Vote for girl CR
			</div>
		</a>

	</div>
</body>
</html>