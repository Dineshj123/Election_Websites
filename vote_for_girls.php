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
<br>
<div id="header" class="page-header">
Candidates
</div>

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
$name=$_SESSION['user'];
$user=$_SESSION['user'];
if(!$user){header('Location:login.php');}
$_SESSION['category']='girls';
$i=1;
$sqli="select * from `votecollection` where `voter`='$name' and `category`='girls'";
$resi=mysqli_query($dbcon,$sqli);
$arr=mysqli_num_rows($resi);
if($arr){header('Location:Thankyou.php');}
else{
$sql="select * from `candidates` where `category`='girls'";
$res=mysqli_query($dbcon,$sql);
while($arr=mysqli_fetch_array($res))
{
	$name=$arr['name'];
	$rollno=$arr['rollno'];
	echo "<div class='jumbotron' id='header1'>";
	$temp=$arr['profilepic'];
	echo "<div id=\"box\">";
	echo "<img src=\"$temp\" width='100' height='100' alt='fault'>";
	echo "</div>";
	echo "<div id='contentbox'>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:".$arr['name'];
	echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manifestation:".$arr['content'];
	echo "<br><br>";
	echo "<form id='form' name='form' action='vote.php' method='POST'>";
	echo "<input type='hidden' id='vals' name='vals' value='$name'>";
	echo "<input type='hidden' id='rollvals' name='rollvals' value='$rollno'>";
	echo "<input type='submit' name='voteme' id='voteme' value='VOTE FOR HER'>";
	echo "</form>";
	echo "</div>";
	echo "</div>";
}
}
?>
</body>
</html>