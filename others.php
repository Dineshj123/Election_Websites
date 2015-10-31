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
<?php
echo "You seem to be non ICE student. You can't vote but can see the results";
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydatabase";
$dbcon = @mysqli_connect($servername, $username, $password, $dbname);

if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
}

$display = "select * from `candidates`";
$res=mysqli_query($dbcon,$display);
while($arr=mysqli_fetch_array($res))
{
	echo "<br>";
	$name=$arr['name'];
	$rollno=$arr['rollno'];
	$sql="select * from `votecollection` where `voted_for`='$name' and `rollno`='$rollno'";
	$resi=mysqli_query($dbcon,$sql);
	$cnt=mysqli_num_rows($resi);
	$images=$arr['profilepic'];
	echo '<div class="jumbotron" id="header1">';
	echo "<img src='$images' width='100' height='100' alt='fault'>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;$name";
	echo "&nbsp;&nbsp;($rollno)";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/><div class='progress' style='width:70%;margin-left:15%;'><div class='progress-bar' role='progressbar' aria-valuenow=70'
  aria-valuemin='0' aria-valuemax='100' style='width:".$cnt."%'>
  </div>";
	echo "</div>";
	echo "<br><br>";
	echo '</div>';
}
?>
</body>
</html>