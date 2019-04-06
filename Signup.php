<?php session_start() ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/login&signup.css">

      <script type="text/javascript">

      function validateFname()
      {
      	var name= document.getElementById("fname").value;
      	if((name == "") || (name == null))
      	{
      		alert("Please enter your First Name");
      		return false;

      	}
      	return true;
      }

      function validateLname()
      {
        var pwd= document.getElementById("lname").value;
        if((pwd == "") || (pwd == null))
        {
          alert("Please enter your Last Name");
          return false;
        }
        return true;
      }

      function validateEmail()
      {
      	var email= document.getElementById("email").value;
      	var dot = email.lastIndexOf(".");
      	var at = email.indexOf("@");
      	var len = email.length;

      	if((at < 1) || (dot-at < 2) || (len-dot < 3 ))
      	{
      		alert("Please enter Correct E-mail");
      		return false;
      	}
      	return true;
      }

      function validatePwdFill()
      {
      	var name= document.getElementById("pwd").value;
      	if((name == "") || (name == null))
      	{
      		alert("Please enter Password");
      		return false;
      	}
      	return true;
      }

      function validateComfirmPwd()
      {
      	var name= document.getElementById("cpwd").value;
      	if((name == "") || (name == null))
      	{
      		alert("Please enter Confirm Password");
      		return false;
      	}
      	return true;
      }

      function validatePassword()
      {
      	var password= document.getElementById("pwd").value;
      	var conpass= document.getElementById("cpwd").value;
      		var passlen = password.length;

      	if((passlen < 5) && (password != conpass))
      	{
      		alert("Password does not match");
      		return false;
      	}
      	return true;
      }

      function validate()
      {
       	 if(validateFname() && validateLname() && validateEmail() && validatePwdFill() && validateComfirmPwd() && validatePassword() )
      	{
      		alert("You have registered to the site");
      	}
      	else
      	{
      		event.preventDefault();
      	}
      }

      </script>
  </head>
  <body>

    <header>

      <div class="TopBar">
        <img src=".\img\catdog.png" width="250px" height="180px" align=top >

        <nav>
          <ul>
            <li ><a href="HomePage.php">Home</a></li>
            <li class="current"><a href="Gallery.html">Gallery</a></li>
            <li><a href="RegisterPetDetails.html">Register Your Pet</a></li>
            <li><a href="login.php">Login</a></li>
            <li ><a href="TrackingVetAppointments_VIEW_UPDATE_DELETE.html">View Update Delete</a></li>
            <li><a href="TrackingVetAppointmentsADD.html">Add </a></li>
          </ul>
        </nav>

      </div>
    </header>
<main>
  <section>

  <div class="signup" >
    <form action=".\includes\signup.php" method="post" >
        <h1>Signup Page</h1>
      <input type="text" name="fname" id="fname" placeholder="First Name">
     <input type="text" name="lname" id="lname" placeholder="Last Name">
     <input type="text" name="email" id="email" placeholder="E-mail">
     <input type="password" name="pwd" id="pwd" placeholder="Password">
     <input type="password" name="cpwd" id="cpwd" placeholder="Confirm Password">
     <button type="submit" name="submit" onclick="validate()">Sing up</button>
     if you already have an account   <a href="login.php">Login</a>
    </form>

   </div>
</section>
</main>



<footer>General web design, Copyright &copy 2018</footer>
  </body>
</html>
