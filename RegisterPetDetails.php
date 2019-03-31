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
if(isset($_POST['add'])){
	$UserName = $_POST['UserName'];
	$password = $_POST['password'];
	$confirmpassword = $_POST('cpwd')
	$petname = $_POST['petname'];
	$PetColor = $_POST['PetColor'];
	$PetBreed = $_POST['PetBreed'];
	$DOB = $_POST['DOB'];
	$email = $_POST['email'];
	$address= $_POST['address'];
}



<<<<<<< HEAD
$sql = "INSERT INTO `registerpetdetails`(`UserName`,`password`,`cpwd`,`petname`,`PetColor`,`PetBreed`,`DOB`,`email`,`address`) VALUES (?,?,?,?,?,?,?,?,?)";
=======
$sql = "INSERT INTO 'registerpetdetails'('UserName','password', 'petname', 'petcolor', 'PetBreed', 'DOB', 'email', 'address') VALUES ('$UserName','$password','$petname','$PetColor','$PetBreed','$DOB','$email','$address')";
>>>>>>> 59d1184e3afd4a218ffdfab257147abfd7dcb862
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
