<?php
$con = mysqli_connect('localhost','root','');

if (!$con) {
  echo "Not connected to server";
}
if (mysqli_select_db($con,'mypet')) {
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

if (mysqli_query($con,$sql)) {
  echo 'Not inserted';
}
else {
  echo "inserted";
}

header('refresh:2; url=TrackingVetAppointments_VIEW_UPDATE_DELETE.html')
 ?>
