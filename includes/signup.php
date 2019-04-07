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

$Fname=$_POST['fname'];
$Lname=$_POST['lname'];
$Email=$_POST['email'];
$Password=$_POST['pwd'];
$Cpassword=$_POST['cpwd'];





$sql="INSERT INTO signup (Fname,Lname,Email,Password,Cpassword) VALUES ('$Fname','$Lname','$Email','$Password','$Cpassword')";

$sql1="INSERT INTO login (Email,Password) VALUES ('$Email','$Password')";


if (mysqli_query($conn,$sql)) {
  echo 'Not inserted';
}
else {
  echo "inserted";
}


if (mysqli_query($conn,$sql1)) {
  echo 'Not inserted';
}
else {
  echo "inserted";
}

  header("Location:../login.php");
 ?>
