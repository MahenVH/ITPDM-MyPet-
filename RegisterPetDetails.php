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

	$UserName = $_POST['userid'];
	$password = $_POST['pwd'];
	$PetName = $_POST['petname'];
	$PetColor = $_POST['colorid'];
	$PetBreed = $_POST['bid'];
	$DOB = $_POST['dob'];
	$email = $_POST['email'];
	$address= $_POST['add'];



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
