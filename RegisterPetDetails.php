<?php
<<<<<<< HEAD
$con = mysqli_connect("127.0.0.1","root","");
if(!con)
{
	echo'not connected to the server'
=======
$con = mysqli_connect("localhost","root","");
if(!$con)
{
	echo'not connected to the server';
>>>>>>> 080ac52c72b23e60fcd8345f645088eb47169adf
}
if (!mysqli_select_db($con,'pets'));
	{

		echo'database not selected';
		}

	$UserName = $_POST["username"];
	$password = $_POST["pwd"];
	$PetName = $_POST["Petname"];
	$PetColor = $_POST["Petcolor"];
	$PetBreed = $_POST["PetBreed"];
	$DOB = $_POST["dob"];
	$email = $_POST["email"];
	$address= $_POST["add"];



$sql = "INSERT INTO `registerpetdetails`(`Username`, `password`, `PetName`, `PetColor`, `PetBreed`, `DOB`, `Email`, `Address`) VALUES ('$UserName'),('$pwd'),`$PetName`,`$PetColor`,`$PetBreed`,'$DOB','$email','$Address')";
if (!mysqli_query($con,$sql));
{
	echo 'Not Inserted';
}
else
{
	echo 'inserted';
}
<<<<<<< HEAD
header("refresh:10; url=RegisterPetDetails.html");
=======
header("refresh:2; url=RegisterPetDetails.html");
>>>>>>> 080ac52c72b23e60fcd8345f645088eb47169adf
?>
