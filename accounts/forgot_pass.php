<?php
	
	// IMPORTS
	require_once '../includes/mysql_connection.php';
	//Start Session
	session_start();

	function verify_user_email($con,$user,$email){
		$query = 'SELECT * FROM `account` WHERE `account_user` = "'.$user.'" AND `account_email` = "'.$email.'" ; ';
		$result = mysqli_query($con,$query);
		return mysqli_num_rows($result);
	}

	if (isset($_POST['submit_forgot'])) {
		$con = mysql_connect();
		if (isset($_SESSION['update_pass']) && $_SESSION['update_pass'] == 'true') {
			$_SESSION['update_pass'] = 'false';
		}
		else{

			$user = $_POST['Username_forgot'];
			$email = $_POST['Email_forgot'];
			if (verify_user_email($con,$user,$email) == 1) {
				$_SESSION['update_modal'] = 'true';
				$_SESSION['update_pass'] = 'true';
			}
			else{
			}
		}
		close_connection($con); //close connection
		header('location: login.php'); //redirect to login page
	}



?>