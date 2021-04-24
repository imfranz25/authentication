<!DOCTYPE html>
<html>
<head>

	<!--Title-->
	<title>Log-in</title>
	<!--CSS Source-->
	<link rel="stylesheet" type="text/css" href="../styles/account_style.css">
	<!--JQuery Library-->
	<script src="../js/jquery.js"></script>
	<!--JS Source-->
	<script src="../js/account.js"></script>
	<!--Start PHP Session-->
	<?php session_start(); ?>
	
</head>
<body>

	<!-----------Login Box-------------->
	<div class="login_container">
	<fieldset class="loginBox">
		<legend id="login_label" >SyraTech</legend>
			<!-----------Form-------------->
	        <form action="../accounts/verify.php" method="post">
			        <div id="login_input">
			        	<label class="label_pointer" for="user">Username</label>
			        	<input type="text" name ="user" id="user" placeholder="Enter your username" required>
			        	<label class="label_pointer" for="pass">Password</label>
				    	<input type="password" name="pass" id="pass" placeholder="Enter your password" required>
			        </div>
				    <p id="forgot">Forgot Password ? </p>
				    <button id="submit_login" name="submit_login" value="true" >Log in</button>
				    <p id="register">Don't have an account ? <a href="register.php">Register Here</a></p>
	        </form>
	        <!-----------End of Form-------------->   
	</fieldset>
	</div>
	<!-----------End of Login Box-------------->

	<!-----------Modal Authentication Code-------------->
	<div id="modal" class="modal">
		<div class="modal-content">
		  <div class="modal-header">
		    <span class="close">&times;</span>
		    <h2>*Authentication*</h2>
		  </div>
		  <form action="verify.php" method="post">
			  <div class="modal-body">
			  	<table>
			  		<tr>
			  			<td><label for = "ver">Code :</label> </td>
			  			<td><input type="text" name="ver" id="ver" placeholder="Enter Authentication Code"></td>
			  		</tr>
			  	</table>
			  </div>
			  <div class="modal-footer">
			  	<button class="resend" name="resend">Resend Code</button>
			    <button class="csub" name="submit_otp">Submit</button>
		 	  </div>
		  </form>
		</div>
	</div>
	<!-----------End of Modal Authentication Code-------------->

	<!-----------Modal Message-------------->
	<div id="modal_message" class="modal_message">
		<div class="modal_message_content">
		  	<div class="modal_message_header">
		    	<h2>*Message Dialog*</h2>
		  	</div>
			 <div class="modal_message_body">
			  	<center><label id="msg"></label></center>
			 </div>
			<div class="modal_message_footer">
				<form action="verify.php" method="post">
			  	<center><button class="ok" id="ok" name="ok_login">Ok</button></center>
			  	</form>
		 	 </div>
		</div>
	</div>
	<!-----------End of Modal Authentication Code-------------->

	<!-----------Modal Message-------------->
	<div id="modal_message_forgot" class="modal_message">
		<div class="modal_message_content" id="modal_message_content_forgot">
		  	<div class="modal_message_header">
		    	<h2>*Forgot Password*</h2>
		  	</div>
		  	<!-----------Form-------------->
		  	<form action="forgot_pass.php" method="post">
				<div class="modal-body-forgot" id="forgot_dialog_content">
					<!-----------Dynamic Content-------------->		
				</div>
				<div class="modal_message_footer">
				  	<button class="resend" id="cancel">Cancel</button>
				    <button class="csub" name="submit_forgot">Submit</button>
		 	 	</div>
		 	</form>
			<!-----------End of Form-------------->
		</div>
	</div>
	<!-----------End of Modal Authentication Code-------------->

	


<!----------------------------PHP CODES STARTS HERE------------------------------>
<?php 
// IF AUTHENTICATED (LOGIN - AUTHENTICATION SUCCESS) - SHOW SUCCESS
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == 'true') {
	echo '<script>show_message("Log-in Success","block");</script>'; 
	$_SESSION['authenticated'] = 'false';
}
// IF FAILED (LOGIN-SUCCESS BUT AUTHENTICATION-FAILED) - SHOW FAILED
else if(isset($_SESSION['authentication_failed']) && $_SESSION['authentication_failed'] == 'true' ){
	echo '<script>show_message("Authentication Error","block");</script>'; 
	$_SESSION['authentication_failed'] = 'false';
}
// IF LOG-IN FAILED - SHOW USER DOES NOT EXIST
else if (isset($_SESSION['failed']) && $_SESSION['failed'] == 'true') {
	echo '<script>show_message("User Does Not Exist","block");</script>'; 
	$_SESSION['failed'] = 'false';
}
// IF LOG-IN SUCCESS (SHOW AUTHENTICATION CODE)
else if ((isset($_SESSION['code']) && isset($_SESSION['modal_msg'])) && $_SESSION['modal_msg'] == 'true'){
	echo '<script>show_message("Code : '.$_SESSION['code'].'","block");</script>';
	$_SESSION['modal_msg'] = 'false';
} 
// IF AUTHENTICATION CODE SHOWN (SHOW MODAL AUTHENTICATION INPUT NEXT)
else if (isset($_SESSION['modal']) && $_SESSION['modal'] == 'true' ){ 
	echo '<script>show_modal("block");</script>'; 
	$_SESSION['modal'] = 'false';
}
// IF VALID USER & EMAIL (SHOW UPDATE PASSWORD MODAL)
else if (isset($_SESSION['update_modal']) && $_SESSION['update_modal'] == 'true'){
	echo '<script>show_forgot("New Password","Confirm Password")</script>'; 
	$_SESSION['update_modal'] = 'false';
}
//ELSE PROCEED TO LOGIN PAGE HTML
?>
<!----------------------------PHP CODES ENDS HERE------------------------------>


</body>  
</html>

