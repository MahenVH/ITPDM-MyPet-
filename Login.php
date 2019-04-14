<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/login&signup.css">


  </head>
  <body>
    <header>

      <div class="TopBar">
        <img src=".\img\catdog.png" width="250px" height="180px" align=top >
        <nav>
          <ul>
            <li ><a href="HomePage.html">Home</a></li>
            <li ><a href="Gallery.php">Gallery</a></li>
            <li><a href="RegisterPetDetails.html">RegisterPet</a></li>
            <li class="current"><a href="login.php">Login</a></li>
            <li ><a href="TrackingVetAppointments_VIEW_UPDATE_DELETE.html">Modify</a></li>
            <li><a href="TrackingVetAppointmentsADD.php">Add </a></li>
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
      <button type="submit" name="submit" >Login</button>




        <br><a float="right" href="forgotPassword.html" >Forgot Password</a></br><br> <a href="signup.php" >Sign up</a></br>


    </form>

   </div>
</section>
</main>



<footer>General web design, Copyright &copy 2018</footer>
  </body>


</html>
