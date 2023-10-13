<!DOCTYPE html>	
<HTML>
<?php include "./header.php" ?>
<head>
</head>

<body>	

	<?php
		$password = $_POST['password'];
		$email = $_POST['email'];

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
				$_SESSION["status"] = 'loggedin';
				$sql = "SELECT UserName FROM user_details 
				WHERE UserEmail='$email' 
				AND UserPassword = '$password'";
				$result = mysqli_query($conn, $sql);
				
				while($row = $result->fetch_assoc()) {
					$_SESSION["name"] = $row["UserName"];
				  }
				$last = $_SERVER['HTTP_REFERER'];
				header("location:$last");  
		
			}
			else {
				echo 'Incorrect Email or password';
			}
			
		}
		catch(Exception $e) {
			echo 'Incorrect Email or password';
		}
	?>

</body>
</HTML>
