<!DOCTYPE html>	
<HTML>
<?php include "./header.php" ?>
<body>
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
		$last = $_SERVER['HTTP_REFERER'];
		header("location:$last");
		echo 'Account created return home to login';
		$_SESSION['register'] = 'n';
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