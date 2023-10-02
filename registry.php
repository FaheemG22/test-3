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

	$users = [
		"fred" => "secret",
		"Faheem" => "Password",
		"tOb3y" => "3GG&M4Y0",
	];

	if ((array_key_exists($userid, $users))  && ($users[$userid] == $password)) {
			$status = "loggedIn";
	} 
	else {
		echo 'userid and/or password invalid<br>';
		$status = "Failed";
	}

	$_SESSION["status"] = $status;
	$logData = 'UserID : ' . $userid . ', Login status : ' . $_SESSION["status"] . ', Ip: ' . $ip  . ', Screen Dimensions : '. $width . ' X ' . $height . ', Time Spent: ' . $timeSpent;
	$current = file_get_contents("logs.log");
	$current = $current . $logData . "\r\n";

	$current = $current . 'Server Name  :  ' . $_SERVER['SERVER_NAME'] . "\r\n";
	$current = $current . 'Server Address  :  ' . $_SERVER['SERVER_ADDR'] . "\r\n";
	$current = $current . 'Server Port  :  ' . $_SERVER['SERVER_PORT'] . "\r\n";
	$current = $current . 'Server Software :  ' . $_SERVER['SERVER_SOFTWARE'] . "\r\n";
	$current = $current . 'Server URL :  ' . $_SERVER['SCRIPT_NAME'] . "\r\n";

	$current = $current . 'Client Name :  ' . gethostbyaddr($_SERVER['REMOTE_ADDR']) . "\r\n";
	$current = $current . 'Client Address :  ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
	$current = $current . 'Client Port :  '  . $_SERVER['REMOTE_PORT'] . "\r\n";
	$current = $current . 'Client Software :  '  . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
	$current = $current . 'Client Request :  ' . $_SERVER['REQUEST_METHOD'] . "\r\n\r\n";


	file_put_contents("logs.log", $current);

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db ='user_details';

	$conn = mysqli_connect($host,$user,$password,$db);// you can select db separately as you did already
	if($conn){
		echo '<br><br>' . 'Connection Successfull';
	}
	else{
	echo "db connection error because of".mysqli_connect_error();
	}
	
	$sql = "INSERT INTO user_details (UserID, UserName, UserPassword, UserEmail)
	VALUES ('1','tOb3y','3GG&M4Y0','126168@shipley.ac.uk')";
	$result = mysqli_query($conn,$sql);
?>

<

	<form name='form1' id='form1' action="index.html" method="get">
		Home : <input type="submit"  value="Home">
	</form>

</body>
</HTML>