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
		$password = $_POST['password'];
		$email = $_POST['email'];

		$width = $_POST['width'];
		$height = $_POST['height'];
		$ip = $_POST['ip'];
		$timeSpent = $_POST['timeSpent'];

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
			$sql = "SELECT * FROM user_details WHERE UserEmail ='$email'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) == 4) {
				echo 'it works';
			}
			else{
				echo 'no works';
			}
		  
		
		}
		catch(Exception $e) {
			echo 'Message: Email in use<br>' . $e;
		}
	?>

	<form name='form1' id='form1' action="index.html" method="get">
		<input type="submit"  value="Home">
	</form>

</body>
</HTML>
