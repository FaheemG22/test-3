<?php
// Start the session
session_start();
?>

<!DOCTYPE html>	
<HTML>
<head>
	<title>Test Signon - v0.3</title>
</head>

<body>
	<h1>Test Signon - v0.3</h1>



	<?php

		$status   = False;
		$userid   = $_POST['userid'];
		$password = $_POST['password'];
		$email = $_POST['email'];



		$host = 'localhost';
		$user = 'root';
		$password = '';
		$db ='user_details';

		$conn = mysqli_connect($host,$user,$password,$db);// you can select db separately as you did already
		if($conn){
			echo '<br><br>' . 'Connection Successfull<br>';
		}
		else{
		echo "db connection error because of".mysqli_connect_error();
		}
		try{
		$sql = "INSERT INTO user_details (UserName, UserPassword, UserEmail) VALUES ('Mohammed','admin','144038@shipley.ac.uk')";
		$result = mysqli_query($conn,$sql);
		echo 'account created return home to login';
		}
		catch(Exception $e) {
			echo 'Message: Email in use';
		}
	?>

	<form name='form1' id='form1' action="index.html" method="get">
		<input type="submit"  value="Home">
	</form>

</body>
</HTML>