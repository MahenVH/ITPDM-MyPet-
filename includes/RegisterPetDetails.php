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

		$UserName = $_POST['UserName'];
		$password = $_POST['password'];
		$PetName = $_POST['PetName'];
		$PetColor = $_POST['PetColor'];
		$PetBreed = $_POST['PetBreed'];
		$DOB = $_POST['DOB'];
		$email = $_POST['email'];
		$address= $_POST['address'];



$sql = "INSERT INTO `registerpetdetails`(`Username`, `Password`, `Pet Name`, `Pet Color`, `Pet Breed`, `DOB`, `Email`, `Address`) VALUES ('$UserName'),('$password'),`$PetName`,`$PetColor`,`$PetBreed`,'$DOB','$email','$Address')";
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
