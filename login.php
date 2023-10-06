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
		$S_user = 'root';
		$S_password = '';
		$db ='user_details';

		$conn = mysqli_connect($host,$S_user,$S_password,$db);// you can select db separately as you did already
		if($conn){
			echo 'Database Connection Successfull<br><br>';
		}
		else{
		echo "db connection error because of".mysqli_connect_error();
		}
		
		try{
		
			$sql = "SELECT * FROM user_details 
			WHERE UserEmail='$email' 
			AND UserPassword = '$password'";
			$result = mysqli_query($conn, $sql);
		
			if (mysqli_num_rows($result) == 1) {
				echo 'You are now logged in :) <br>';
				$_SESSION["status"] = 'loggedIn';
				$sql = "SELECT UserName FROM user_details 
				WHERE UserEmail='$email' 
				AND UserPassword = '$password'";
				$result = mysqli_query($conn, $sql);
				
				while($row = $result->fetch_assoc()) {
					$_SESSION["name"] = $row["UserName"];
				  }
				echo "Welcome Back: " . $_SESSION['name'];
		
			}
			else {
				echo 'Incorrect Email or password';
			}
			
		}
		catch(Exception $e) {
			echo 'Incorrect Email or password';
		}
	?>

	<form name='form1' id='form1' action="index.php" method="get">
		<input type="submit"  value="Home">
	</form>

</body>
</HTML>
