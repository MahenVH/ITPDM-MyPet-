<?php
$entry=$_POST['entryno'];
$petname=$_POST("petname");
$vetname=$_POST("vetname");
$vetclinicname=$_POST("vetclinic");
$appday=$_POST("appday");
$apptime=$_POST("apptime");
$email=$_POST("email");

$con=mysqli_connect("localhost","","","MyPet");

if(!$con)
{
die("cannot connect to DB server");
}

$sql="INSERT INTO 'MyPet','VetAppointment'(
  'entry',
  'petname',
  'vetname',
  'appday',
  'apptime',
  'email')
  VALUES ('".$entry."','".$petname."','".$vetname."','".$appday."','".$apptime."','".$email."');";

mysqli_close($con);
header("Location:.\TrackingVetAppointmentsADD.php?upload=successfull");
 ?>
