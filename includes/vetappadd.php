<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mypet";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$entry=$_POST['entryno'];
$petname=$_POST['petname'];
$vetname=$_POST['vetname'];
$vetclinicname=$_POST['vetclinic'];
$appday=$_POST['appday'];
$apptime=$_POST['apptime'];
$email=$_POST['email'];



if(!$conn)
{
die("cannot connect to DB server");
}

$sql="INSERT INTO 'vetappointment' (
  'entry',
  'petname',
  'vetname',
  'appday',
  'apptime',
  'email')
  VALUES ('".$entry."','".$petname."','".$vetname."','".$appday."','".$apptime."','".$email."');";

<<<<<<< HEAD

header("Location:.\TrackingVetAppointmentsADD.php?upload=successfull");
=======
header("Location:../TrackingVetAppointmentsADD.php");

>>>>>>> dca1e5387e2444aac53656e2d52095bcfbeee4ad
 ?>
