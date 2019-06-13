<<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mypet";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn->connect_error) {
  die("Connection failed".$conn-> connect_error);
}

$entry="$_GET['entry']";
$query="DELETE FROM vetappointment WHERE entry='$entry'";
$result = mysqli_query($conn,$query);

if ($result) {
  echo "Record deleted from table";
}
else {
  echo "Sorry process failed";
}

  ?>
