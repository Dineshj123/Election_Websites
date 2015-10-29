<?php
	 if(isset($_POST['submit']))
	 {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$server   = "{webmail.nitt.edu:143/novalidate-cert}";
			$imap = @imap_open($server,$username, $password,NULL,0); 
		    imap_errors();
		if($imap)
		{
			echo '<script>alert("success");</script>';
		}
		else
		{
			echo '<script>alert("fail");</script>';
		}
	 }
	
	?>
	<html>
	<head>
   
    <title>CR elections</title>
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
		<div class = "page-header" id = "header">
			CR Elections
		</div>
		<div class = "row" id = "registration_form">
				<br/><br/>
				<form id="form" name="form" method="post" action="">
				<label>Rollno</label>
				<div class = "form-group">
					<input class = "form-control" type="text" name="username" placeholder="rollnumber">
				</div>
				<label>Password</label>
				<div class = "form-group">
					<input type="password" class="form-control" name="password" placeholder="password">
				</div>
				<br/>
				<button type = "submit" class = "btn btn-info" name="submit" >submit</button>
				
				</form>
		</div>
	</body>
	</html>
