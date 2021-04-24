<!DOCTYPE html>
<html>

<head>
	
  <!--Title-->
  <title>Register</title>
  <!--CSS Source-->
  <link rel="stylesheet" type="text/css" href="../styles/account.css">
  <!--JQuery Library-->
  <script src="../js/jquery.js"></script>
  <!--JS Source-->
  <script src="../js/account_action.js"></script>

</head>
<body>

  <!-----------Register Box-------------->
  <div class="register_container">
  <fieldset class="register_box">
      <!-----------Form-------------->
          <form action="add_account.php" method="post">
              <div id="register_input">
                <label class="label_pointer" for="user">Username</label>
                <input type="text" name ="user" id="user"  placeholder="Enter username" required>
                <label class="label_pointer" for="pass">Password</label>
                <input type="password" name="pass" id="pass" placeholder="Enter password" required>
                <label class="label_pointer" for="cpass">Confirm Password</label>
                <input type="password" name="cpass" id="cpass" placeholder="Enter confirm password" required>
                <label class="label_pointer" for="email">Email</label>
                <input type="text" name ="email" id="email" placeholder="Enter email" required>
                <button name="submit_register" id="submit_register" onclick="validate_input()"  >Register</button>
                <p id="register">Already have an Account ? <a href="login.php">Log in Here</a></p>
          </form>
          <!-----------End of Form-------------->   
  </fieldset>
  </div>
  <!-----------End of Login Box-------------->

</body>  
</html>

