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

$_GET['rn'];
$_GET['pn'];
$_GET['vn'];
$_GET['vcn'];
$_GET['ad'];
$_GET['at'];
 $_GET['em'];


$entry=$_GET['entryno'];
$petname=$_GET['petname'];
$vetname=$_GET['vetname'];
$vetclinicname=$_GET['vetclinic'];
$appday=$_GET['appday'];
$apptime=$_GET['apptime'];
$email=$_GET['email'];

if($_GET['update']){
$sql="UPDATE vetappointment (petname='$petname',vetname='$vetname',vetclinicname='$vetclinicname',appday='$appday',apptime='$apptime',email='$email') WHERE entry=$entry";


if (mysqli_query($conn,$sql)) {
  echo "Updated. <a href='TrackingVetAppointments_VIEW_UPDATE_DELETE.php'>View the updated records here</a>";
}
else {
  echo "Not Updated";
}
}

  header("Location: ../TrackingvetAppUpdate.php");
 ?>
