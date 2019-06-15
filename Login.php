<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/login&signup.css">
    <script type="text/javascript">






        function validateEmail()
        {
          var email= document.getElementById("uid").value;
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



    function validateFname()
    {
      var name= document.getElementById("pwd").value;
      if((name == "") || (name == null))
      {
        alert("Please enter your Password");
        return false;

      }
      return true;
    }






    function validate()
    {
       if(validateEmail() && validateFname()   )
      {

      }
      else
      {
        event.preventDefault();
      }
    }

    </script>

    <style>
      .dropdown{
        float: left;
        overflow: hidden;
      }

      .dropdown .dropbtn{
        font-size: 20px;
        border: none;
        outline: none;
        color:#676767;
        padding: inherit;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
      }

      .nav a:hover, .dropdown:hover .dropbtn{
        background-color: purple;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
      }

      .dropdown-content a {
        font-size: 12px;
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }

      .dropdown-content a:hover {
        background-color: #717171;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

      </style>

  </head>
  <body>
    <header>

      <div class="TopBar">
        <img src=".\img\catdog.png" width="250px" height="180px" align=top >
        <nav>
          <ul>
            <li class="current"><a href="HomePageBeforeLogin.html">Home</a></li>
            <li><a href="Login.php">Login</a></li>




          </ul>
        </nav>
      </div>

    </header>
<main>
  <section>

  <div class="login">

    <form action=".\includes\login.php" method="post">
        <h1>Login Page</h1>
      <input type="text" name="uid" id="uid" placeholder="E-mail">
      <input type="password" name="pwd" id="pwd" placeholder="Password">
      <button type="submit" name="submit" onclick="validate()" >Login</button>

      <br><a float="right" href="forgotPassword.html" >Forgot Password</a></br><br> <a href="signup.php" >Sign up</a></br>


    </form>


   </div>
</section>
</main>



<footer>General web design, Copyright &copy 2018</footer>
  </body>


</html>
