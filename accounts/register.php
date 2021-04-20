<?php
$con=mysqli_connect('localhost','root','','login');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  <link rel="stylesheet" type="text/css" href="../styles/account.css">
</head>
<body>


	<div class="regbox" >
	<center><img src="../images/admin.png" class="user"></center>
       <form  method="post">
       <input type="text" name ="user" placeholder="Username" required>
       <input type="password" name="pass" placeholder="Password" required>
       <input type="password" name="cpass" placeholder="Confirm Password" required>
       <input type="text" name ="email" placeholder="Email" required>
       <button type="submit" name="sub"   ><b><i><h3>Sign Up</h3></i></b></button>
       <p>Already have an Account ? <a href="login.php" style="color: skyblue">Sign in Here</a></p>
       </form>
  
  </div>

<?php


    
    function verify_user($user){
      $ver = true;
      if ((preg_match( '~[!@#$%^&*()_+]+~', $user)) ){
      $ver=false;
      }
      return $ver;
    }

    function verify_pass($pass){
      $ver = true;
      if (!(preg_match( '~[0-9]+~', $pass)) ||
          !(preg_match( '~[a-z]+~', $pass)) ||   
          !(preg_match( '~[A-Z]+~', $pass)) ||
          !(preg_match( '~[!@#$%^&*()_+]+~', $pass)) ){

      $ver=false;
      }
      return $ver;
    }

    function pass_len($pass){
      $ver = true;
      if (strlen($pass)<8){
      $ver=false;
      }
      return $ver;
    }

    function pass_match($pass,$cpass){
      $ver = true;
      if ($pass != $cpass){
      $ver=false;
      }
      return $ver;
    }

    function verify_email($email){
      $ver = true;
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $ver=false;
      }
      return $ver;
    }

    
    function verify_dupli($user,$con){
      $ver=true;
       //initialize connection
    $table="SELECT * FROM `acc` ";
    $result=mysqli_query($con,$table);
    $check=mysqli_num_rows($result);

  //check if user is taken
  if($check>0){        
    while ($row = mysqli_fetch_assoc($result)) {
      $u=$row['user'];
      if($u==$user){
            $ver=false;
      }
    }
  } 
    return $ver;
    }
  

  if(isset($_POST['sub'])){

    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $email=$_POST['email'];
    $ver_user = true;
    $ver_pass = true;
    $ver_match = true;
    $ver_email = true;
    $ver_dupli= true;

   

  if(verify_dupli($user,$con)==true){
    //verify user
    if(verify_user($user)==true){
      //verify pass for characters
      if(verify_pass($pass)==true){
        //verify pass for lenght
        if(pass_len($pass)==true){
          //verify pass if match
          if(pass_match($pass,$cpass)==true){
              //verify email if valid
              if(verify_email($email)==true){
               }
              else{
               echo ("<script> alert('Invalid Email Format');</script>");
               $ver_email =false;
              }
           }
          else{
           echo ("<script> alert('Password does not match');</script>");
           $ver_match =false;
           }
         }
       else{
         echo ("<script> alert('Password must be 8 Characters');</script>");
         $ver_pass =false;
       }
      }
      else{
       echo ("<script> alert('Password must contain atlest (1) Number, Upper/Lower Case and Special Character');</script>");
        $ver_pass =false;
      }
    }
    else{
      echo ("<script> alert('Username must not have Special Characters');</script>");
      $ver_user =false;
    }
  }
  else{
    echo ("<script> alert('Username is already taken');</script>");
    $ver_dupli =false;
  }

    
  

    if ($ver_user == true && $ver_pass == true && $ver_match == true && $ver_email == true && $ver_dupli==true){
       $query="INSERT INTO `acc`(`user`, `pass`,`email`) VALUES ('".$user."','".$pass."','".$email."')";
    if(mysqli_query($con,$query)){
    echo ("<script> alert('Account Created Successfuly :)');</script>");
    header('login.php');
    }
    }

  }
  else{
	}

	

  ?>
  



</body>  
</html>

