<!DOCTYPE html>
<HTML>
<?php include "./header.php" ?>
<head>
</head>
<body>
<?php
try{
	if (isset($_SESSION["status"])){
		if ($_SESSION["status"] == 'loggedin') {
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