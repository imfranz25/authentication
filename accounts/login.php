<!DOCTYPE html>
<html>
<head>
	<title>Log-in</title>

	<!--CSS Source-->
	<link rel="stylesheet" type="text/css" href="../styles/account.css">

</head>
<body>

	<!-----------Login Box-------------->
	<fieldset class="loginBox">

			<!-----------Form-------------->
	        <form action="../index.php" method="post">
	        	<center>
			        <img src="../images/admin.png" class="user"><br><br>
			        <label id="login_label">Login</label><br><br>
			        <div id="login_input">
			        	<input type="text" name ="user" placeholder="Username" required>
				    	<input type="password" name="pass" placeholder="Password" required>
			        </div>
				    <p id="forgot">Forgot Password ? </p>
				    <button name="submit" ><h3>Sign in</h3></button>
				    <p id="register">Don't have an account ? <a href="#">Sign up Here</a></p>
				</center>
	        </form>
	        <!-----------End of Form-------------->   

	</fieldset>
	<!-----------End of Login Box-------------->

</body>  
</html>

