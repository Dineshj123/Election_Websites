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
$rollno=$_POST['rollvals'];
$category=$_SESSION['category'];
$y=$_SESSION['user'];
$x=$_POST['vals'];
$sql="insert into `votecollection` (`id`,`voter`,`voted_for`,`category`,`rollno`) values('NULL','$y','$x','$category','$rollno')";
$res=mysqli_query($dbcon,$sql);
echo '<html>
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
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
			</head>
			<body>
				<div class = "container-fluid">
					<div class = "page-header" id = "header">
						Thank you for Voting!
					</div>
					<a href = "welcome.php">	
						<div class = "jumbotron" id = "elect_boys">
													
									Go back to Homepage.
							
						</div>
					</a>	
				</div>		
			</body>
		</html>';
?>