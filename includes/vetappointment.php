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

$entry=$_POST['entryno'];
$petname=$_POST['petname'];
$vetname=$_POST['vetname'];
$vetclinicname=$_POST['vetclinic'];
$appday=$_POST['appday'];
$apptime=$_POST['apptime'];
$email=$_POST['email'];

$sql="INSERT INTO vetappointment (petname,vetname,vetclinicname,appday,apptime,email) VALUES ('$petname','$vetname','$vetclinicname','$appday','$apptime','$email')";

if (mysqli_query($conn,$sql)) {
  echo 'Not inserted';
}
else {
  echo "inserted";
}

  header("Location: ../TrackingVetAppointmentsADD.php");
 ?>
