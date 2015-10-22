<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydatabase";
$dbcon = @mysqli_connect($servername, $username, $password, $dbname);

if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="select * from `candidates`";
$res=mysqli_query($dbcon,$sql);
$num_rows = mysqli_num_rows($res);
echo $num_rows;
?>