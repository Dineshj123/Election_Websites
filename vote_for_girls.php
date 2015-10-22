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
	echo "<br>";
	echo "<div id='container'>";
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
	echo "<input type='submit' name='voteme' id='voteme' value='VOTE HIM'>";
	echo "</form>";
	echo "</div>";
	echo "</div>";
}
}
?>
<html>
<head>
	<title>Vote_for_boys</title>
	<style>
	#container{
		width:1000px;
		height:150px;
		border:solid 1px black;
	}
	#box{
		position:absolute;
		margin:auto;
	}
	#contentbox{
		position:absolute;
		margin-left:100px;
		margin-top:30px;
	}
	#voteme{
		width:50px;
		height:50px;
		margin-left:200px;
		background-color:blue;
	}
	#voteme{
		width:100px;
	}
	</style>
</head>
<body>
	<div id="container_slide">
		<div id="box">
		</div>
	</div>
</body>
</html>