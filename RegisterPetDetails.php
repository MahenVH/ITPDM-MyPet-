<?php
$con = mysqli_connect('localhost','root','','pets');
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
	$confirmpassword = $_POST('cpwd')
	$petname = $_POST['petname'];
	$PetColor = $_POST['PetColor'];
	$PetBreed = $_POST['PetBreed'];
	$DOB = $_POST['DOB'];
	$email = $_POST['email'];
	$address= $_POST['address'];



<<<<<<< HEAD
$sql = "INSERT INTO 'registerpetdetails'('UserName','password', 'petname', 'petcolor', 'PetBreed', 'DOB', 'email', 'address') VALUES ('$UserName','$password','$petname','$PetColor','$PetBreed','$DOB','$email','$address')";
=======
$sql = "INSERT INTO `registerpetdetails`(`UserName`,`password`,'cpwd',`petname`,`PetColor`,`PetBreed`,`DOB`,`email`,`address`) VALUES (?,?,?,?,?,?,?,?,?)";
>>>>>>> 4276efb358e6e46201f1a02869592d5aac83bbb6
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
