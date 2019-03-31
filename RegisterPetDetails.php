<?php
$con = mysqli_connect('localhost','root','');
if(!$con)
{
	echo'not connected to the server';
}
if(!mysqli_select_db($con,'pets'))
	{

		echo'database not selected';
		}

	$UserName = $_POST['UserName'];
	$password = $_POST['password'];
	$PetName = $_POST['Pet Name'];
	$PetColor = $_POST['Pet Color'];
	$PetBreed = $_POST['Pet Breed'];
	$DOB = $_POST['DOB'];
	$email = $_POST['email'];
	$address= $_POST['address'];



$sql = "INSERT INTO `registerpetdetails`(`Username`, `Password`, `Pet Name`, `Pet Color`, `Pet Breed`, `DOB`, `email`, `address`) VALUES ('$UserName'),('$password'),`$PetName`,`$PetColor`,`$PetBreed`,'$DOB','$email','$address')";
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
