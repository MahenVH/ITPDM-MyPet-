<<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mypet";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn->connect_error) {
  die("Connection failed".$conn-> connect_error);
}

/* $entry="$_GET['entry']";*/
$query="DELETE FROM vetappointment WHERE entry='$_GET[entry]'";
$result = mysqli_query($conn,$query);

if ($result) {
  header("Location: ../TrackingVetAppointments_VIEW_UPDATE_DELETE.php?Deletion succesfulll");

  echo "Record deleted from table";
}
else {
  echo "Sorry process failed";
}

  ?>
