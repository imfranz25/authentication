<!DOCTYPE html>
<html>
<head>

	<!--Title-->
	<title>My Website | Francis Ong</title>
	<!--PHP Imports-->
	<?php 
	require 'accounts/authentication.php'; 
	include 'includes/mysql_connection.php';
	include 'accounts/event_log.php'; 
	?>

</head>
<body>

	<!---------------------------PHP CODES STARTS HERE---------------------->
	<?php if (isset($_POST['logout'])) {
		record_event(mysql_connect(),$_SESSION['username'],'Log-out');
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