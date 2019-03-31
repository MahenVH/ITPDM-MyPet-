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

	$UserName = $_POST['username'];
	$password = $_POST['pwd'];
	$PetName = $_POST['Petname'];
	$PetColor = $_POST['Petcolor'];
	$PetBreed = $_POST['PetBreed'];
	$DOB = $_POST['dob'];
	$email = $_POST['email'];
	$address= $_POST['add'];



$sql = "INSERT INTO `registerpetdetails`(`Username`, `password`, `PetName`, `PetColor`, `PetBreed`, `DOB`, `Email`, `Address`) VALUES ('$UserName'),('$pwd'),`$PetName`,`$PetColor`,`$PetBreed`,'$DOB','$email','$Address')";
if (!mysqli_query($con,$sql))
{
	echo 'Not Inserted';
}
else
{
	echo 'inserted';
}
header("refresh:2; url=RegisterPetDetails.html");
?>
