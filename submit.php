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
		$S_user = 'root';
		$S_password = '';
		$db ='user_details';
		$conn = mysqli_connect($host,$S_user,$S_password,$db);
		
		if($conn){
			echo '<br><br>' . 'Connection Successfull<br>';
		}
		else{
		echo "db connection error because of".mysqli_connect_error();
		}
		try{
		
		$sql = "INSERT INTO user_details (UserName, UserPassword, UserEmail) 
		VALUES ('$userid','$password','$email')";
		
		$result = mysqli_query($conn,$sql);
		
		echo 'Account created return home to login';
		}
		catch(Exception $e) {
			echo 'Message: Email in use';
		}
		
	?>

	<form name='form1' id='form1' action="index.php" method="get">
		<input type="submit"  value="Home">
	</form>

</body>
</HTML>