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
	<form name='form1' id='form1' action="index.php" method="get">
		<input type="submit"  value="Home"><br><br>
	</form>

	<form name='form1' id='form1' method="post">
		Username :   <input type="text" name="userid"><br>
		Email : 	  <input type="email" name="email"><br>
		Password : <input type="password" name="password" id="myInput">
		
		<input type="checkbox" onclick="myFunction()">Show Password<br><br>
		<input type="submit" value="Submit" formaction="submit.php">

	</form>

<script>

	function myFunction() {
	var x = document.getElementById("myInput");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
	}

</script>

</body>
</HTML>