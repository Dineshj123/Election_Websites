<?php

/*session_start();
$user=111114098;
$_SESSION['user']=111114098;
echo "Welcome  ".$user; 
$check=substr($_SESSION['user'],1,2);
if($check!=10){header('Location:others.php');}
*/

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
		<br/><br/>
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