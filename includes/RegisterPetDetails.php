<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mypet";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	echo'not connected to the server';
}
if (mysqli_select_db($conn,'pets'))
	{

		echo'database not selected';
		}

		$UserName = $_POST['UserName'];
		$password = $_POST['password'];
		$PetName = $_POST['petname'];
		$PetColor = $_POST['PetColor'];
		$PetBreed = $_POST['PetBreed'];
		$DOB = $_POST['DOB'];
		$email = $_POST['email'];
		$address= $_POST['address'];



$sql = "INSERT INTO registerpetdetails (`username`, `Password`, `PetName`, `PetColor`, `PetBreed`, `DOB`, `Email`, `address`) VALUES (?,?,?,?,?,?,?,?)";
if (!mysqli_query($conn,$sql))
{
	echo 'Not Inserted';
}
else
{
	echo 'inserted';
}
header("refresh:100; url=RegisterPetDetails.html");
?>
