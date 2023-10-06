<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<HTML>

<head>
	<title>Test Signon - v0.3</title>
</head>

<?php


?>

<body>

	<h1>Test Signon - v0.3</h1>
	
	<form name='form1' id='form1' method="post">
		<input type="hidden" name="width" id="width">
		<input type="hidden" name="height" id="height">
		<input type="hidden" name="ip" id="ip">
		<input type="hidden" name="timeSpent" id="timeSpent">

		Email:   <input type="text" name="email"><br>
		Password: <input type="password" name="password"><br>

		<input type="submit" value="Login" onclick="doit()" formaction="login.php"> 
		<input type="submit" value="Logout" formaction="logout.php">
		<br> 
		<input type="submit" value="View Secure" formaction="securePage.php"> 
		<input type="submit" value="View Non-Secure" formaction="nonsecurePage.php">
		<br> 
		<input type="submit" value="Register" formaction="register.php"> 
	</form>

</body>

<script>

	var start = new Date().getTime();

	function doit() {
	var end = new Date().getTime();
	var time = (end - start) / 1000;
	document.forms['form1']['timeSpent'].value=(time.toFixed(1) + ' seconds.');
	}

	document.forms['form1']['width'].value = screen.width;
	document.forms['form1']['height'].value = screen.height;
	
	fetch('https://api.ipify.org?format=json')
	  .then(response => response.json())
	  .then(data => document.forms['form1']['ip'].value =(data.ip));
	  
</script>


	
</html>