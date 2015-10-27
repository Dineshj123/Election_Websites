<?php
	 if(isset($_POST['submit']))
	 {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$server   = "{webmail.nitt.edu:143/novalidate-cert}";
			$imap = @imap_open($server,$username, $password,NULL,0); 
		    var_dump(imap_errors());
		if($imap)
		{
			echo 'Web-mail Authentication SUCCESS<br><br>';
		}
		else
		{
			echo 'INCORRECT roll number or password<br><br>';
		}
	 }
	
	?>
	<html>
	<head>
        <title>Sriranganathan</title>	
	 </head>
	
	<body>
		<form id="form" name="form" method="post" action="">
		<input type="text" name="username" placeholder="rollnumber">
		<input type="password" name="password" placeholder="password">
		<input type="submit" name="submit" value="submit">
		</form>
	</body>
	</html>
