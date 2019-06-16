
<?php
session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href=".\css\VetAppointmentTableCSS.css">
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
            <li ><a href="Gallery.php">Gallery</a></li>
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

          </ul>
        </nav>
      </div>


    </header>

      <form action="D:\XAMP\htdocs\ITPDM-MyPet-\includes\vetappViewUpdateDelete.php" method="get">
          <table id="table" class="center">
            <tr>
              <th>
                Entry No.
              </th>
              <th>
                Pet Name
              </th>
              <th>
                Medicine
              </th>
              <th>
                Pharmacy
              </th>
              <th>
                Expiry Date
              </th>

            </tr>


            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mypet";

            $conn = mysqli_connect($servername,$username,$password,$dbname);

            if ($conn->connect_error) {
              die("Connection failed".$conn-> connect_error);
            }

            /*$_SESSION["uid"]= $Email;*/
            $sql="SELECT * FROM medicine where email='{$_SESSION["uid"]}' ";
            $result =$conn-> query($sql);
            if ($result-> num_rows> 0) {
              while ($row = $result-> fetch_assoc()) {
                echo "<tr>
                <td>".$row['entryno']."</td>
                <td>".$row['petname']."</td>
                <td>".$row['medicine']."</td>
                <td>".$row['pharmacy']."</td>
                <td>".$row['expdate']."</td>
                <td><a href=includes\deleteMedicine.php?entryno=".$row['entryno'].">Delete</a></td></tr>";




              }


              echo "</table>";
            }
            else {
              echo "0 result";
            }



            $conn->close();
            ?>

          </table>


        </form>

  </body>
</html>
