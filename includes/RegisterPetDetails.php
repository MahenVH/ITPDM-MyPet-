<?php
$con = mysqli_connect('localhost','root','');
if(!$con)
{
	echo'not connected to the server';
}
if (!mysqli_select_db($con,'pets'))
	{

		echo'database not selected';
		}

		$Name = $_POST['UserName'];
		$password = $_POST['password'];
		$PetName = $_POST['petname'];
		$PetColor = $_POST['PetColor'];
		$PetBreed = $_POST['PetBreed'];
		$DOB = $_POST['DOB'];
		$email = $_POST['email'];
		$address= $_POST['address'];



$sql = "INSERT INTO registerpetdetails (`Name`, `Password`, `PetName`, `PetColor`, `PetBreed`, `DOB`, `Email`, `address`) VALUES ('$UserName'),('$password'),`$PetName`,`$PetColor`,`$PetBreed`,'$DOB','$email','$address')";
if (!mysqli_query($con,$sql))
{
	echo 'Not Inserted';
}
else
{
	echo 'inserted';
}
header("refresh:100; url=RegisterPetDetails.html");
?>
