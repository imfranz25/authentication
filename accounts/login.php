<!DOCTYPE html>
<html>
<head>
	<title>Log-in</title>

	<!--CSS Source-->
	<link rel="stylesheet" type="text/css" href="../styles/accs.css">
	<!--JQuery Library-->
	<script src="../js/jquery.js"></script>
	<!--JS Source-->
	<script src="../js/acc.js"></script>
	


</head>
<body>

	<!-----------Login Box-------------->
	<div class="login_container">
	<fieldset class="loginBox">
		<legend id="login_label" >Login</legend>
			<!-----------Form-------------->
	        <form action="../accounts/verify.php" method="post">
			        <div id="login_input">
			        	<label class="label_pointer" for="user">Username</label>
			        	<input type="text" name ="user" id="user" placeholder="Enter your username" required>
			        	<label class="label_pointer" for="pass">Password</label>
				    	<input type="password" name="pass" id="pass" placeholder="Enter your password" required>
			        </div>
				    <p id="forgot">Forgot Password ? </p>
				    <button id="submit" name="submit" value="true" >Sign in</button>
				    <p id="register">Don't have an account ? <a href="#">Sign up Here</a></p>
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
		  <form action="../accounts/verify.php" method="post">
			  <div class="modal-body">
			  	<table>
			  		<tr>
			  			<td><label for = "ver">Code :</label> </td>
			  			<td><input type="text" name="ver" id="ver" placeholder="Enter Authentication Code"></td>
			  		</tr>
			  	</table>
			  </div>
			  <div class="modal-footer">
			  	<button class="resend" id="resend" name="send">Resend Code</button>
			    <button name="otpsub" id="otpsub" class="csub" >Submit</button>
		 	  </div>
		  </form>
		</div>
	</div>
	<!-----------End of Modal Authentication Code-------------->

	
<?php 
session_start(); 
if (isset($_SESSION['modal']) && $_SESSION['modal'] == 'true' ){ 
	echo '<script>show_modal("block");</script>'; 
	$_SESSION['modal'] = 'false';
}
else{
	echo '<script>show_modal("none");</script>'; 
}
?>

</body>  
</html>

