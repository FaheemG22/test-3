<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<HTML>
<head>
	<title>Test Signon - v0.1</title>
</head>

<?php
if ($_SESSION["status"] == 'loggedIn') {
	echo 'logged in <br><br>';
	echo 'secret content goes here';
} else {
	echo 'You are not logged in - page unavaialbe.';
}

?>

	<form name='form1' id='form1' action="index.html" method="get">
		Home : <input type="submit" value="Home">
	</form>
	
</body>

</html>