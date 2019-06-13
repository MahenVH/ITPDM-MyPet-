<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href=".\css\VetAppointmentTableCSS.css">
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
            <li><a href="login.php">Login</a></li>
            <li ><a href="TrackingVetAppointments_VIEW_UPDATE_DELETE.html">Modify</a></li>
            <li><a href="TrackingVetAppointmentsADD.php">Add </a></li>
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
