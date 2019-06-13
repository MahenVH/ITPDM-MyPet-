<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Notice Board</title>
  <link rel="stylesheet" href="./css/NoticeBoard.css">

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
          <li><a href="NoticeBoard.php">Notice Board</a></li>
          <li><a href="login.html">Login</a></li>
          <li ><a href="TrackingVetAppointments_VIEW_UPDATE_DELETE.html">Modify</a></li>
          <li><a href="TrackingVetAppointmentsADD.php">Add </a></li>
        </ul>
      </nav>
    </div>

  </header>
  <main>
    <section >

      <div class="wrapper">

        <h2 align:center >Notice Board</h2>
        <hr>
        <section class="gallery-container">
          <?php
            include_once "includes/db.php";

            $sql = "SELECT * FROM notice ORDER BY idNotice DESC";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo "SQL statement failed";
            }else{
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

              while ($row = mysqli_fetch_assoc($result)){
                echo '
                  <div class="item" style="background-image: url(img/gallery/'.$row["imgFullNameNotice"].') ;">
                  </div>
                  <div class=title> <p>'.$row["titleNotice"].'</p></div>
                  <div class=paragraph><p>'.$row["descNotice"]. '</p></div>

                ';

                 }
            }
            ?>
        </section>
      </div>
      <hr>
      <h1> Create your own notice </h1>
      </section>
      <?php
      echo '<div class="gallery-upload">

      
        <form action="includes/notice-upload.php" method="post" enctype="multipart/form-data">
        <input type="text" name="filename" placeholder="Subject"><br>
        <input type="text" name="filetitle" placeholder="Title"><br>
        <input type="text" id="filedesc" name="filedesc" placeholder="Enter a description"><br>
        <input type="file" name="file"><br>
        <button type="submit" name="submit" id=submit> Post </input>
        </form>
      </div>';
      ?>
    </main>



    <footer>General web design, Copyright &copy 2018</footer>
  </body>


  </html>
