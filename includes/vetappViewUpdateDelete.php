<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mypet";

$conn = mysqli_connect($servername,$username,$password,$dbname);


if (!$conn) {
  echo "Not connected to server";
}
if (mysqli_select_db($conn,'mypet')) {
  echo "Databse not selected";
}


$sql = "SELECT * FROM vetappointment;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['entry'];
    echo $row['petname'];
    echo $row['vetname'];
    echo $row['vetclinicname'];
    echo $row['appday'];
    echo $row['apptime'];
    echo $row['email'];

  }
}

?>
