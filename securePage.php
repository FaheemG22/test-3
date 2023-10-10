<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<HTML>
<head>
	<title>Test Signon - v0.1</title>
</head>
<body>
	<?php include "./header.php" ?>
	<br>
	<br>
<?php
try{
	if (isset($_SESSION["status"])){
		if ($_SESSION["status"] == 'loggedIn') {
			echo 'Welcome Back: ' . $_SESSION['name'] . '<br><br>';
			echo 'secret content goes here';
			
		}
		else{
			echo 'You are not logged in - page unavaialbe.';
		}
	}
	else{
		echo 'You are not logged in - page unavaialbe.';
	}
}
catch(Exception $e){
	echo 'You are not logged in - page unavaialbe.';
}
?>
	
</body>



</html>