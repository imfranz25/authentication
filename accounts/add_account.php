<?php

	// IMPORTS
	require_once '../includes/mysql_connection.php';
	// START SESSION
	session_start();

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
			$pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);
			$email = $_POST['email'];
			if (add_account($con,$user,$pass,$email)){
				$_SESSION['hide'] = 'true';
				$_SESSION['success'] = 'true';
				header('location: register.php');
			}
			else{
				$_SESSION['error'] = 'true';
				header('location: register.php');
			}
			close_connection($con); // close connection
		}
		else{
			header('location: register.php');
		}
		
	}

	// ISSET SUBMIT (OK) - MESSAGE DIAGLOG
	if(isset($_POST['ok'])){
		if (isset($_SESSION['hide']) && $_SESSION['hide'] == 'true'){
			session_destroy(); // DESTROY SESSION (CLEAR VARIABLES)
			header('location: ../index.php');
		}
	}// END ISSET SUBMIT (OK) - MESSAGE DIAGLOG





?>