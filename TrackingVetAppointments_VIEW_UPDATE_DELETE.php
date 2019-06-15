<!DOCTYPE html>
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
                <a href="MedicineAdd.html">Add Medical Details</a>
                <a href="MedicineViewUpdateDelete.html">Modify Medical details</a>
              </div>
            </button>
          </div>
          </li>




          </ul>
        </nav>
      </div>

    </header>

      <form>
          <table id="table" class="center">
            <tr>
              <th>
                Entry No.
              </th>
              <th>
                Pet Name
              </th>
              <th>
                Veterinarian Name
              </th>
              <th>
                Veterinarian Clinic
              </th>
              <th>
                Appointment day
              </th>
              <th>
                Appointment time
              </th>
              <th>
                Email
              </th>
              <th colspan="2">
                Operations
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


            $sql="SELECT entry,petname,vetname,vetclinicname,appday,apptime,email FROM vetappointment";
            $result =$conn-> query($sql);
            if ($result-> num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo "<tr>
                <td>".$row['entry']."</td>
                <td>".$row['petname']."</td>
                <td>".$row['vetname']."</td>
                <td>".$row['vetclinicname']."</td>
                <td>".$row['appday']."</td>
                <td>".$row['apptime']."</td>
                <td>".$row['email']."</td>
                <td><a href='includes\Update.php?rn=$row[entry]&pn=$row[petname]&vn=$row[vetname]&vcn=$row[vetclinicname]&ad=$row[appday]&at=$row[apptime]&em=$row[email]'>Edit</a></td>
                <td><a href=includes\delete.php?entry=".$row['entry'].">Delete</a></td></tr>";

              }


              echo "</table>";
            }
            else {
              echo "0 result";
            }



            $conn->close();
            ?>






          </table>

          <div>
          <button type="submit" name="view" class="button button1">View</button>
          </div>
        </form>

  </body>
</html>
