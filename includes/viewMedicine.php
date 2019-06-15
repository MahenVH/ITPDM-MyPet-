

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
                <td><a href=includes\Update.php?rn=".$row['entry'].">Edit</a></td>
                <td><a href=includes\delete.php?entry=".$row['entry'].">Delete</a></td></tr>";

              }


              echo "</table>";
            }
            else {
              echo "0 result";
            }



            $conn->close();
            ?>
