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
<<<<<<< HEAD
<section>

    <div class="login">
 <?php
=======
  <section>

  <div class="login">
    <form action=".\includes\forget.php" method="post">
        <h1>Your Password</h1>

>>>>>>> 9e9aa1c5d971b9438ec50c1eaedb72c3e4719432

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "mypet";

      $conn = mysqli_connect($servername,$username,$password,$dbname);

      $connectdb=mysqli_select_db($conn,'mypet');
      $result=mysqli_query($conn,'select Password from signup');

      while ($row = mysqli_fetch_array ($result))
      {

    echo '<input type="text" name="Namex" value='.$row['Password'].'>';


    }
?>
</div>

</section>
</main>



<footer>General web design, Copyright &copy 2018</footer>
  </body>


</html>
