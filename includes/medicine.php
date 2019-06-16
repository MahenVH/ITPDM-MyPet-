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


$petname=$_POST['petname'];
$medicine=$_POST['medicine'];
$phamacy=$_POST['pharmacy'];
$Edate=$_POST['expdate'];
$email=$_POST['email'];



$sql = "INSERT INTO medicine( petname, medicine, pharmacy, expdate,email) VALUES ('$petname','$medicine','$phamacy','$Edate','$email')";
if ($conn->query($sql) === TRUE)

{
	echo 'Inserted';
}
else
{
	echo 'Not inserted';
}
header("Location:../MedicineAdd.php");
?>
