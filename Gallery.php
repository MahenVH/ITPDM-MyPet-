<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Gallery</title>
  <link rel="stylesheet" href="./css/style.css">

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
          <li class="current"><a href="HomePage.php">Home</a></li>
          <li><a href="RegisterPetDetails.html">RegisterPet</a></li>
          <li><a href="Login.php">Login</a></li>
          <li><div class="dropdown">
            <button class="dropbtn"> Veterinarian
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="TrackingVetAppointmentsADD.php">Add appointments</a>
              <a href="TrackingVetAppointments_VIEW_UPDATE_DELETE.php">Modify Appointments</a>
            </div>
            </button>
          </div></li>

          <li><div class="dropdown">
            <button class="dropbtn"> Medical
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="MedicineAdd.php">Add Medical Details</a>
              <a href="MedicineViewUpdateDelete.php">Modify Medical details</a>
            </div>
          </button>
        </div>
        </li>
        <li><div class="dropdown">
          <button class="dropbtn"> Extras
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="Gallery.php">Gallery</a>
            <a href="NoticeBoard.php">Notice Board</a>
          </div>
        </button>
      </div>
      </li>



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
                echo '<div class="box">
                  <div class="item" style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].') ;"></div>
                  <h2>'.$row["titleGallery"].'</h2>
                  <p>'.$row["descGallery"].'</p>
                  </div>
                ';

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
