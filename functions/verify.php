<?php

//Import MySQl Connection
include '../includes/mysql_connection.php';

function verify(){
	if(isset($_POST['submit'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		if ($user == 'admin' && $pass == 'admin123') {
			echo "<script>alert('Success')</script>";
			header('sample.php');
		}
	}
}

	

?>