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
	
	$width = $_POST['width'];
	$height = $_POST['height'];
	$ip = $_POST['ip'];
	$timeSpent = $_POST['timeSpent'];

	if (($userid == 'fred')  && ($password == 'secret')) {
		$status = "loggedIn";
	} else {
		echo 'userid and/or password invalid<br>';
		$status = "loggedOut";
	}
	$_SESSION["status"] = $status;
	echo 'Current logged in status is : ' . $status;
	
	$logData = 'Login status : ' . $_SESSION["status"] . ', Ip: ' . $ip  . ', Screen Dimensions: '. $width . ' X ' . $height . ', Time Spent: ' . $timeSpent;
	$current = file_get_contents("logs.log");
	$current = $current . $logData . "\r\n";
	file_put_contents("logs.log", $current);

?>

	<form name='form1' id='form1' action="index.html" method="get">
		Home : <input type="submit"  value="Home">
	</form>

</body>
</HTML>