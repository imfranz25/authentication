<!DOCTYPE html>
<html>
<head>

	<!--Title-->
	<title>My Website | Francis Ong</title>
	<!--CSS Source-->
	<link rel="stylesheet" type="text/css" href="styles/account.css?v=<?php echo time(); ?>">
	<!--JQuery Library-->
	<script src="js/jquery.js"></script>
	<!--JS Source-->
	<script src="js/actions.js?v=<?php echo time(); ?>"></script>
	<!--PHP Require (Authentication)-->
	<?php require 'accounts/authentication.php'; ?>

</head>
<body>

	<form action="accounts/account.php" method="post">
		<div class="main_wrapper">
			<div class="center_wrapper">
				<fieldset class="wrapper">
					<legend>Welcome to SyraTech</legend>
					<div class="body_wrapper">
						<h1><?php echo $_SESSION['username'];?></h1>
						<p align="center">What Can I do For you?</p>
						<button name="user_list" id="user">User List</button>
						<button name="backup" id="backup">Back Up</button>
						<button name="change">Change Password</button>
						<button name="activity_log">Activity Log</button>
						<button name="logout">Log out</button>
					</div>
				</fieldset>
			</div>
		</div>
	</form>

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
			  	<center><button class="ok" name="ok_login">Ok</button></center>
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
			  	<center><button class="ok_log"  name="ok_login">Back</button></center>
			  	</form>
		 	 </div>
		</div>
	</div>
	<!-----------End of Modal Message LOG-------------->

	<!-----------Modal Message User-------------->
	<div id="modal_message_user" class="modal_message">
		<div class="modal_message_content_log">
		  	<div class="modal_message_header">
		    	<h2>*User List*</h2>
		  	</div>
		  	<center>
			  	<div id="header">
				 	<table  id="user_header"  cellpadding="5">
				  		<tr>
				  			<th style="width:5%;">ID</th>
				  			<th style="width:25%;">User</th>
				  			<th style="width:41%;">Email</th>
				  			<th>Account Created</th>
				  		</tr>
				  	</table>
				</div>
			</center>
			<div class="modal_message_body_log">
			  	<div id="table_data" >
			  		<table id="user_table" border = "2" cellpadding="5">
			  		</table>
			  	</div>
			</div>
			<div class="modal_message_footer">
				<form action="accounts/account.php" method="post">
				  	<center>
				  		<button class="ok_log" id="create_pdf"  name="pdf">Create PDF</button>
				  		<button class="ok_log" id="okk"  name="ok_login">Back</button>
				  	</center>
			  	</form>
		 	 </div>
		</div>
	</div>
	<!-----------End of Modal Message User-------------->

	<!-----------Modal Message-------------->
	<div id="modal_message_confirm" class="modal_message">
		<div class="modal_message_content">
		  	<div class="modal_message_header">
		    	<h2>*Confirm Dialog*</h2>
		  	</div>
			 <div class="modal_message_body">
			  	<center><label id="msg">Are you sure you want to Log-out ?</label></center>
			 </div>
			<div class="modal_message_footer">
				<form action="accounts/account.php" method="post" >
					<button class="ok" id="ok_logout" name="ok_logout">Yes</button>
					<button class="ok" id="cancel_logout" name="cancel_logout">Cancel</button>
			  	</form>
		 	 </div>
		</div>
	</div>
	<!-----------End of Modal Message-------------->

	<!-----------Modal Message Backup-------------->
	<div id="modal_message_backup" class="modal_message">
		<div class="modal_message_content">
		  	<div class="modal_message_header">
		    	<h2>*Back Up Option*</h2>
		  	</div>
			 <div class="modal_message_body">
			  		<form action="accounts/backup.php" method="post">
			  			<center>
			  			<div id="backup_option">
					  		<input type="radio" id="backup_radio" name="backup" value="backup" required><label for="backup_radio" id="backup_labels">Backup<label>
					  		<input type="radio" id="download_radio" name="backup" value="download" required><label for="download_radio">Download<label><br>
					  		<input type="submit" value="MySQL File">
				  		</div>
			  		</form>
			 </div>
			<div class="modal_message_footer">
				<form action="accounts/account.php" method="post" >
					
			  	</form>
			  	<center>
					<button class="ok" id="cancel_backup">Cancel</button>
				</center>
		 	 </div>
		</div>
	</div>
	<!-----------End of Modal Message-------------->
	
<?php
// SHOW BACK UP BUTTON
if (isset($_SESSION['username']) && $_SESSION['username'] != 'ADMIN'){
	echo "<script>document.getElementById('backup').style = 'display:none';</script>";
	echo "<script>document.getElementById('user').style = 'display:none';</script>";
}
// IF CHANGE PASS IS CLICKED (SHOW MODAL UPDATE PASS)
if (isset($_SESSION['show_modal_change_pass']) && $_SESSION['show_modal_change_pass'] == 'true') {
	echo '<script>show_forgot("Password","Confirm Password");</script>';
	echo '<script>submit_forgot_function("false")</script>';
	$_SESSION['show_modal_change_pass'] = 'false';
}
// SHOW BACK UP OPTION
else if (isset($_SESSION['show_backup']) && $_SESSION['show_backup'] == 'true'){
	echo "<script>document.getElementById('modal_message_backup').style = 'display:block';</script>";
	$_SESSION['show_backup'] ='false';
}
// IF SUCCESS PASSWORD CHANGE
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
// SHOW USER LIST
else if (isset($_SESSION['show_list']) && $_SESSION['show_list'] == 'true') {
	echo '<script>document.getElementById("modal_message_user").style = "display:block";</script>';
	for ($i=0 ; $i < sizeof($_SESSION['id_list'])  ; $i++ ) { 
			echo '<script>show_user("'.$_SESSION['id_list'][$i].'","'.$_SESSION['user_list'][$i].'","'.$_SESSION['email_list'][$i].'","'.$_SESSION['date_list'][$i].'")</script>';
	}
	$_SESSION['show_list'] = 'false';
}
else if (isset($_SESSION['show_confirm']) && $_SESSION['show_confirm'] == 'true') {
	echo '<script>document.getElementById("modal_message_confirm").style = "display:block";</script>';
	$_SESSION['show_confirm'] = 'false';
}
// IF SUCCESS BACK UP
else if (isset($_SESSION['backup_success']) && $_SESSION['backup_success'] == 'true') {
	echo '<script>show_message("Backup Success","block");</script>';
	$_SESSION['backup_success'] ='false';
}
// IF FAILED BACK UP
else if (isset($_SESSION['backup_failed']) && $_SESSION['backup_failed'] == 'true') {
	echo '<script>show_message("Backup Error","block");</script>';
	$_SESSION['backup_failed'] ='false';
}
// IF FAILED DOWNLOAD
else if (isset($_SESSION['download_failed']) && $_SESSION['download_failed'] == 'true') {
	echo '<script>show_message("Download Error (File Does Not Exist) Back Up File Needed","block");</script>';
	$_SESSION['download_failed'] ='false';
}
?>


</body>
</html>