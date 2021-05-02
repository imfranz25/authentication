<!DOCTYPE html>
<html>
<head>

	<!--Title-->
	<title>My Website | Francis Ong</title>
	<!--CSS Source-->
	<link rel="stylesheet" type="text/css" href="styles/account.css">
	<!--JQuery Library-->
	<script src="js/jquery.js"></script>
	<!--JS Source-->
	<script src="js/actions.js"></script>
	<!--PHP Require (Authentication)-->
	<?php require 'accounts/authentication.php'; ?>

</head>
<body>

	<div class="main_wrapper">
		<div class="center_wrapper">
			<fieldset class="wrapper">
				<legend>Welcome to SyraTech</legend>
				<div class="body_wrapper">
					<h1><?php echo $_SESSION['username'];?></h1>
					<p align="center">What Can I do For you?</p>
					<form action="accounts/account.php" method="post">
						<button name="change">Change Password</button>
						<button name="activity_log">Activity Log</button>
						<button name="logout">Log out</button>
					</form>
				</div>
			</fieldset>
		</div>
	</div>

	<!-----------Modal Message Change Password / Update Password-------------->
	<div id="modal_message_forgot" class="modal_message">
		<div class="modal_message_content" id="modal_message_content_forgot">
		  	<div class="modal_message_header">
		  		<span id="close">&times;</span>
		    	<h2>*Change Password*</h2>
		  	</div>
		  	<!-----------Form-------------->
		  	<form action="accounts/account.php" method="post">
				<div class="modal-body-forgot" id="forgot_dialog_content">
					<!-----------Dynamic Content-------------->		
				</div>
				<div class="modal_message_footer">
				    <center><button class="csub" id="submit_forgot" name="submit_change" onclick="validate_pass()">Submit</button><center>
		 	 	</div>
		 	</form>
			<!-----------End of Form-------------->
		</div>
	</div>
	<!-----------End of Modal Change Password -------------->

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
				<form action="accounts/account.php" method="post" id="confirm_msg">
			  	<center><button class="ok" id="ok" name="ok_login">Ok</button></center>
			  	</form>
		 	 </div>
		</div>
	</div>
	<!-----------End of Modal Message-------------->

	<!-----------Modal Message LOG-------------->
	<div id="modal_message_log" class="modal_message">
		<div class="modal_message_content_log">
		  	<div class="modal_message_header">
		    	<h2>*Activity Logs*</h2>
		  	</div>
		  	<div id="header">
			 	<table  id="table_header"  cellpadding="5">
			  		<tr>
			  			<th style="width:31%;">User</th>
			  			<th style="width:31%;">Activity</th>
			  			<th>Date and Time</th>
			  		</tr>
			  	</table>
			</div>
			<div class="modal_message_body_log">
			  	<div id="table_data" >
			  		<table id="log_table" border = "2" cellpadding="5">
			  		</table>
			  	</div>
			</div>
			<div id="search_area">
				<div id="search_wrapper">
					<input type="search" id="search" onkeyup="filter_search()" onchange="filter_search()" placeholder="Search by User">
				</div>
			</div>
			<div class="modal_message_footer">
				<form action="accounts/account.php" method="post">
			  	<center><button class="ok_log" id="ok" name="ok_login">Back</button></center>
			  	</form>
		 	 </div>
		</div>
	</div>
	<!-----------End of Modal Message LOG-------------->

	<!-----------Modal Message-------------->
	<div id="modal_message_confirm" class="modal_message">
		<div class="modal_message_content">
		  	<div class="modal_message_header">
		    	<h2>*Message Dialog*</h2>
		  	</div>
			 <div class="modal_message_body">
			  	<center><label id="msg">Are you sure you want to Log-out ?</label></center>
			 </div>
			<div class="modal_message_footer">
				<form action="accounts/account.php" method="post" >
					<button class="ok" id="cancel_logout" name="cancel_logout">Cancel</button>
				  	<button class="ok" id="ok_logout" name="ok_logout">Yes</button>
			  	</form>
		 	 </div>
		</div>
	</div>
	<!-----------End of Modal Message-------------->

	

<?php

// IF CHANGE PASS IS CLICKED (SHOW MODAL UPDATE PASS)
if (isset($_SESSION['show_modal_change_pass']) && $_SESSION['show_modal_change_pass'] == 'true') {
	echo '<script>show_forgot("Password","Confirm Password");</script>';
	echo '<script>submit_forgot_function("false")</script>';
	$_SESSION['show_modal_change_pass'] = 'false';
}
// IF SUCESS PASSWORD CHANGE
else if (isset($_SESSION['success']) && $_SESSION['success'] == 'true') {
	echo '<script>show_message("Update Success","block");</script>';
	$_SESSION['success'] ='false';
}
// SHOW ACTIVITY LOGS
else if (isset($_SESSION['show_log']) && $_SESSION['show_log'] == 'true') {
	if (isset($_SESSION['search']) && $_SESSION['search'] =='true') {
		echo "<script>document.getElementById('search_area').style = 'display:block';</script>";
		$_SESSION['search'] ='false';
	}
	echo '<script>document.getElementById("modal_message_log").style = "display:block";</script>';
	for ($i=sizeof($_SESSION['user_array'])-1 ; $i >= 0  ; $i-- ) { 
			echo '<script>show_log("'.$_SESSION['user_array'][$i].'","'.$_SESSION['action_array'][$i].'","'.$_SESSION['time_array'][$i].'")</script>';
	}
	$_SESSION['show_log'] = 'false';
}
else if (isset($_SESSION['show_confirm']) && $_SESSION['show_confirm'] == 'true') {
	echo '<script>document.getElementById("modal_message_confirm").style = "display:block";</script>';
	$_SESSION['show_confirm'] = 'false';
}


?>


</body>
</html>