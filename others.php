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

$display="select * from `candidates`";
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
	echo "<img src='$images' width='100' height='100' alt='fault'>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;$name";
	echo "&nbsp;&nbsp;($rollno)";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<progress id='progress' value='$cnt' max='98'>";
	echo "</progress>";
	echo "<br><br>";
}
?>