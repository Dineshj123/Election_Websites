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
echo "You have voted <br>";
echo "<a href='welcome.php'>click here</a> for going to welcome page";
?>