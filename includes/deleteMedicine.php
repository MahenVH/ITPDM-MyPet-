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
$query="DELETE FROM medicine WHERE entryno='$_GET[entryno]'";
$result = mysqli_query($conn,$query);

if ($result) {
  header("Location: ../MedicineViewUpdateDelete.php?Deletion succesfulll");

  echo "Record deleted from table";
}
else {
  echo "Sorry process failed";
}

  ?>
