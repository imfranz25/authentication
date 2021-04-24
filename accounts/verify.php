
<!--JS SOURCE-->
<script src="../js/login.js"></script>

<?php

	// IMPORTS
	require_once '../includes/mysql_connection.php';
	include 'event_log.php';
	// START SESSION
	session_start();

	//CREATE CODE
	function create_code(){
		return rand(000000,999999);
	}//END CREATE CODE FUNCTION

	//INSERT CODE
	function insert_code($con,$user,$code){
		$query = "INSERT INTO `code`(`account_user`, `code_num`,`code_expiration`) VALUES ('".$user."','".$code."', (NOW() + INTERVAL 5 MINUTE) );";
		return mysqli_query($con,$query);
	}//END INSERT CODE FUNCTION

	//	VERIFY USER-PASS
	function verify_user_pass($con,$user,$pass){
		$query = 'SELECT * FROM `account` WHERE `account_user` = "'.$user.'" AND `account_pass` = "'.$pass.'"; ';
		$result = mysqli_query($con,$query);
		return mysqli_num_rows($result);
	}//END VERIFY USER PASS

	// VERIFY AUTHENTICATION CODE
	function verify_code($user,$code){

	}//END VERIFY CODE

	// ISSET SUBMIT LOGIN
	if(isset($_POST['submit_login'])){
		if($_POST['submit_login'] == 'true'){
			// INITIALIZATION
			$connection = mysql_connect(); // call mysql connect function
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			// CONDITION (IF USER PASS EXIST)
			if ((int)verify_user_pass($connection,$user,$pass) == 1) {
				$_SESSION['code'] = create_code(); 
				$_SESSION['username'] = $user; 
				$_SESSION['modal_msg'] = 'true'; 
				$_SESSION['logged-in'] = 'true'; 
				insert_code($connection,$_SESSION['username'],$_SESSION['code']);
				//record_event($connection,$_SESSION['username'],'Log-in');
			}
			else{
				$_SESSION['failed'] = 'true';
				$_SESSION['logged-in'] = 'false'; //set false 
			}	
		}
		close_connection($connection); //close connection
		header('location: login.php'); //redirect to login page
	}//END SUBMIT LOGIN

	// ISSET SUBMIT ATUTHENTICATION
	if(isset($_POST['submit_otp'])){
		// INIALIZATION
		$connection = mysql_connect(); // call mysql connect function
		$code_input = $_POST['ver'];
		$latest_user_id = 0;
		$query = 'SELECT * FROM `code` WHERE `account_user` = "'.$_SESSION['username'].'" AND `code_expiration` > NOW() ;';
		$result = mysqli_query($connection,$query);
		$count = mysqli_num_rows($result);

		// CHECK IF QUERY EXIST
		if ($count > 0 ) {
			while ($row = mysqli_fetch_assoc($result)) {
				
				// GET LATEST ID TO IDENTIFY LATEST CODE
				if($row['code_id'] >= $latest_user_id){
					$latest_user_id = $row['code_id'];	
				}	
				$count = $count - 1; // DECREMENT ROW COUNT
				// COMPARE CODE INPUT TO LATEST CODE
				if ($count == 0){
					if ($row['code_num'] == $code_input) {
						$_SESSION['authenticated'] = 'true'; 
						record_event($connection,$_SESSION['username'],'Logged-in');
					}
					else{
						$_SESSION['authentication_failed'] = 'true';
					}	
				}	
			}
		}
		else{
			session_destroy(); // DESTROY SESSION (CLEAR VARIABLES)
		}
		close_connection($connection); // CLOSE CONNECTION	
		header('location: login.php'); // REDIRECT TO LOGIN PAGE
	}// END OF ISSET AUTHENTICATION SUBMIT

	// ISSET SUBMIT RESEND
	if(isset($_POST['resend'])){
		$connection = mysql_connect();
		$_SESSION['code'] = create_code();
		$_SESSION['modal_msg'] = 'true';
		$_SESSION['logged-in'] = 'true';
		insert_code($connection,$_SESSION['username'],$_SESSION['code']);
		record_event($connection,$_SESSION['username'],'Resend Code');
		close_connection($connection); // CLOSE CONNECTION
		header('location: login.php'); 
	}// END ISSET SUBMIT RESEND

	// ISSET SUBMIT (OK) - MESSAGE DIAGLOG
	if(isset($_POST['ok'])){
		if (isset($_SESSION['logged-in'])) {
			if ($_SESSION['logged-in'] == 'true') {
				$_SESSION['code'] = create_code();
				$_SESSION['modal'] = 'true';
				$_SESSION['logged-in'] = 'false';
			}
		}
		header('location: ../index.php'); // SET DEFAULT LOCATION INDEX PHP
	}// END ISSET SUBMIT (OK) - MESSAGE DIAGLOG





?>

