<?php

	// IMPORTS
	require_once '../includes/mysql_connection.php';


	// ADD ACCOUNT (SEND TO DATABASE)
	function add_account($con,$user,$pass,$email){
		$query = "INSERT INTO `account`(`account_user`, `account_pass`,`account_email`) VALUES ('".$user."','".$pass."', '".$email."' );";
		return mysqli_query($con,$query);
	}//END ADD ACCOUNT

	// ISSET SUBMIT REGISTER
	if (isset($_POST['submit_register'])) {
		if ($_POST['submit_register'] == 'true') {
			//INITIALIZATION
			$con = mysql_connect();
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$email = $_POST['email'];
			if (add_account($con,$user,$pass,$email)){
				header('location: login.php');
			}
			close_connection($con); // close connection
		}
		else{
			header('location: register.php');
		}
		
	}





?>