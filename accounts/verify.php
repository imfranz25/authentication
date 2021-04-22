
<!--JS Source-->
<script src="../js/login.js"></script>

<?php
	// start session;
	session_start();

	// Import MySQl Connection
	require_once '../includes/mysql_connection.php';

	if(isset($_POST['submit'])){

		if($_POST['submit'] == 'true'){

			// Initialization
			$connection = mysql_connect(); // call mysql connect function
			$username = $_POST['user'];
			$password = $_POST['pass'];
			$query = 'SELECT * FROM `account` WHERE `account_user` = "'.$username.'" AND `account_pass` = "'.$password.'" ';
			$result = mysqli_query($connection,$query);
			$count = mysqli_num_rows($result);

			// condition
			if ($count == 1) {
				$_SESSION['modal'] = 'true';
				header('location: login.php'); //proceed to login (with modal)
			}
			else{
				header('location: login.php'); //proceed to login (login failed)
			}
			close_connection($connection); //close connection
		}
		else{
			header('location: login.php'); // submission inputs invalid
		}
		
	}// end of isset submit


?>

