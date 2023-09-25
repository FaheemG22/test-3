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
	$userid   =  $_POST['userid'];
	$password = $_POST['password'];
	$width = $_POST['width'];
	$height = $_POST['height'];
	$timeSpent = $_POST['timeSpent'];
	$ip = $_POST['ip']
	if (($userid == 'fred')  && ($password == 'secret')) {
		$status = "loggedIn";
	} else {
		echo 'userid and/or password invalid<br>';
		$status = "loggedOut";
	}
	$_SESSION["status"] = $status;
	echo 'Current logged in status is : ' . $status;
/*
	function logger($message, array $data, $logFile = "logs.log"){
		$width = $_POST['width'];
		$height = $_POST['height'];
		$timeSpent = $_POST['timeSpent'];
		foreach ($data as $key => $val) {
		  $message = str_replace("%{$key}%", $val, $message);
		}
		
		$message .= PHP_EOL;
		return file_put_contents($logFile, $message, FILE_APPEND);
	   }


	logger("%file% %level% %message%", ["level" => "warning", "message" =>"This is a message", "file" =>__FILE__]);	
*/	   
	$current = file_get_contents("logs.log");

	$newLine=  ' logged in from IP Address of ' . $ip . ' Width '  .$width . ' Height ' . $height . ' Time ' . $timeSpent . "\r\n";
	$current = $current . $newLine;
	file_put_contents("logs.log", $current);



?>

	<form name='form1' id='form1' action="index.html" method="get">
		Home : <input type="submit"  value="Home">
	</form>

</body>
</HTML>