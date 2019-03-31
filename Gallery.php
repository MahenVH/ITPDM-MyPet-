<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Gallery</title>
  <link rel="stylesheet" href="./css/style.css">

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
          <li><a href="TrackingVetAppointmentsADD.html">Add </a></li>
        </ul>
      </nav>
    </div>

  </header>
  <main>
    <section >

      <div class="wrapper">
        <h2>Gallery</h2>

        <section class="gallery-container">
          <?php
            include_once "includes/db.php";

            $sql = "SELECT * FROM gallery ORDER BY idGallery DESC";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo "SQL statement failed";
            }else{
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

              while ($row = mysqli_fetch_assoc($result)){
                echo '<a href="#">
                  <div class="item" style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].') ;"></div>
                  <h2>'.$row["titleGallery"].'</h3>
                </a>';

                 }
            }
            ?>
        </section>
      </div>

      </section>
      <?php
      echo '<div class="gallery-upload">
        <form action="includes/gallery-upload.php" method="post" enctype="multipart/form-data">
        <label> Name </label><input type="text" name="filename" placeholder="Filename.."><br>
        <input type="text" name="filetitle" placeholder="Image Title.."><br>
        <input type="text" name="filedesc" placeholder="Image description.."><br>
        <input type="file" name="file" ><br>
        <button type="submit" name="submit" id=submit> Submit </input>
        </form>
      </div>';
      ?>
    </main>



    <footer>General web design, Copyright &copy 2018</footer>
  </body>


  </html>
