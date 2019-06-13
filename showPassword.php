<?php session_start() ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/forgotPassword.css">


  </head>
  <body>
    <header>
      <div class="TopBar">
        <img src=".\img\catdog.png" width="250px" height="180px" align=top >
        <nav>
          <ul>
            <li ><a href="HomePage.html">Home</a></li>
            <li class="current"><a href="Gallery.php">Gallery</a></li>
            <li><a href="RegisterPetDetails.html">RegisterPet</a></li>
            <li><a href="login.html">Login</a></li>
            <li ><a href="TrackingVetAppointments_VIEW_UPDATE_DELETE.html">Modify</a></li>
            <li><a href="TrackingVetAppointmentsADD.php">Add </a></li>
          </ul>
        </nav>
      </div>
    </header>
<main>
  <section>

  <div class="login">
    <form action=".\includes\forget.php" method="post">
        <h1>Your Password</h1>



            <button type="submit" name="submit" href="../Login.php" > <a href="login.php">Back to Login</a></button>






    </form>

   </div>
</section>
</main>



<footer>General web design, Copyright &copy 2018</footer>
  </body>


</html>
