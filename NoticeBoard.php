<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Notice Board</title>
  <link rel="stylesheet" href="./css/NoticeBoard.css">

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

  .form{
    margin-left: auto;
    margin-right: auto;
    display: inline-block;
    text-align: center;
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
