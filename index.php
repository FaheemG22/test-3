<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<HTML>

<head>
	<title>Test Signon - v0.3</title>
</head>

<?php include "./header.php" ?>

<body>

	<h1>Test Signon - v0.3</h1>

		<button onclick="document.location='securePage.php'">Secure Content</button>
		<button onclick="document.location='nonsecurePage.php'">Non-Secure Content</button>

</body>


</html>