<!DOCTYPE html>
<html>
<head>

	<!--Title-->
	<title>My Website | Francis Ong</title>
	<!--PHP Imports-->
	<?php 
		//REQUIRE AUTHENTICATION
		require 'accounts/authentication.php'; 
		//IMPORT MYSQL CONNECTION
		require_once 'includes/mysql_connection.php';
		//IMPORT VERIFY PHP
		include 'accounts/verify.php'; 
	?>

</head>
<body>

	<!---------------------------PHP CODES STARTS HERE---------------------->
	<?php if (isset($_POST['logout'])) {
		$connection = mysql_connect();
		record_event($connection,$_SESSION['username'],'Log-out');
		session_destroy(); //END SESSION (CLEAR VARIABLES)
		header('location: index.php'); // RELOAD INDEX PHP
	}?>
	<!---------------------------PHP CODES ends HERE---------------------->

	<h1>Welcome to My Website</h1>

	<form method="post">
		<button name="logout">LOG OUT</button>
	</form>
	

</body>
</html>