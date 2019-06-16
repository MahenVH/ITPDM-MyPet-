<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/forgotPassword.css">

    <script type="text/javascript">

        function validatenic()
        {
          var nic= document.getElementById("nic").value;

          var len = nic.length;

          if( len != 10  )
          {
              alert("Incorrect NIC");
            return false;
          }
          return true;
        }

function message(){
  alert(" first you have to log in");
}


            function validate()
            {
               if(validatenic()   )
              {


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
            <li ><a href="HomePage.html">Home</a></li>
            <li class="current"><a href="Gallery.php">Gallery</a></li>
            <li><a href="RegisterPetDetails.html">RegisterPet</a></li>
            <li><a href="login.html">Login</a></li>
            <li ><a href="TrackingVetAppointments_VIEW_UPDATE_DELETE.html">Modify</a></li>
            <li><a onclick="message()" href="">Add </a></li>
          </ul>
        </nav>
      </div>
    </header>
<main>
  <section>


  <div class="login">


    <form action="" method="post">
        <h1>You can search your Password from your NIC</h1>
        <p></p>
      <input type="text" name="nic" id="nic" placeholder="Enter your NIC Address">

      <button type="submit" name="search"  onclick="validate()">Search</button>



      <?php


      $conn = mysqli_connect( "localhost", "root", "" );
      $db = mysqli_select_db($conn,'mypet');

      if (isset($_POST['search'])) {
        $nic =$_POST['nic'];

        $query ="select * from signup where nic='$nic' ";

        $query_run = mysqli_query($conn,$query);

        while($row = mysqli_fetch_array($query_run)){
          ?>

          <form action="" method="POST">
            <p> Your Password is </p>
            <input type="text" name="Password" value="<?php  echo $row['Password'] ?>" />
            <p> Your Email is </p>
            <input type="text" name="Email" value="<?php  echo $row['Email'] ?>" />
          </form>
          <?php
        }
      }


       ?>



</form>






</section>
</main>



<footer>General web design, Copyright &copy 2018</footer>
  </body>


</html>
