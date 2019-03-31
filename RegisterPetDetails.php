<?php
/*
$con = mysqli_connect('localhost','root','','pets');
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pets";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	echo'not connected to the server';
}
if(!mysqli_select_db($conn,'pets'))
	{

		echo'database not selected';
		}

if(isset($_POST['add'])){
	$UserName = $_POST['UserName'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['cpwd'];
	$petname = $_POST['petname'];
	$PetColor = $_POST['PetColor'];
	$PetBreed = $_POST['PetBreed'];
	$DOB = $_POST['DOB'];
	$email = $_POST['email'];
	$address= $_POST['address'];
}




<<<<<<< HEAD
$sql = "INSERT INTO registerpetdetails ('username','password', 'confirmpassword', 'petname', 'petcolor', 'petbreed', 'dob', 'email', 'address') VALUES ('$UserName','$password','$confirmpassword','$petname','$PetColor','$PetBreed','$DOB','$email','$address')";
if ($conn->query($sql) === TRUE)
=======
$sql = "INSERT INTO registerpetdetails('UserName','password', 'petname', 'petcolor', 'PetBreed', 'DOB', 'email', 'address') VALUES ('$UserName','$password','$petname','$PetColor','$PetBreed','$DOB','$email','$address')";
if (!mysqli_query($con,$sql))
>>>>>>> c46d8fcbfdf53192364486bbf95e1b4de70eb27f
{
	echo 'Inserted';
}
else
{
	echo 'Not inserted';
}
header("refresh:100; url=RegisterPetDetails.html");
?>
