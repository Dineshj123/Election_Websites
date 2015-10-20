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
if(isset($_POST['submit'])){
	$target_dir = "C://wamp/www/elections/photos/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
		echo $_FILES["fileToUpload"]["name"];
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
	echo $_FILES["fileToUpload"]["tmp_name"];
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
if($uploadOk==1){$images=$target_file;}
$x=$_POST['name'];
$y=$_POST['content'];
	if(($x==''||$x=='NULL')&&($y==''||$y=='NULL')){echo("Please fill out every details");}
	else{
	$sql="INSERT INTO `candidates`(`id`,`name`,`content`,`profilepic`) VALUES ('NULL','$x','$y','$images')";
	$res=mysqli_query($dbcon,$sql);
	if($res){
		echo "succesfully inserted";
	}
	else{echo "error occurred in inserting";}
    }
}
?>
<html>
<head>
	<title>Registration_Form</title>
</head>
<body>
	<form id="form" name="form" method="post" action="" enctype="multipart/form-data">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:&nbsp;&nbsp;&nbsp;<input type="text" id="name" name="name" placeholder="Your name" autocorrect="off" /><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your manifestation:&nbsp;&nbsp;&nbsp;<input type="text" id="content" name="content" placeholder="Your cotent" autocorrect="off" /><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ProfilePicture:<input type="file" id="fileToUpload" name="fileToUpload" /><br>
	<input type="submit" id="submit" name="submit" value="submit" />
	</form>
</body>
</html>