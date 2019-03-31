<?php
$UserName = $_POST["username"];
$password = $_POST["pwd"];
$PetName = $_POST["Petname"];
$PetColor = $_POST["Petcolor"];
$PetBreed = $_POST["PetBreed"];
$DOB = $_POST["dob"];
$email = $_POST["email"];
$address= $_POST["add"];



<?php
$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db('pets');
	if(!$con)
	{
			echo 'successfully connected to the database';
		}else {
			// code...
	die("Cannot connect to DB server");
	}
	?>




<?php
$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db('pets');
	if(!$con)
	{
			echo 'successfully connected to the database';
		}else {
			// code...
	die("Cannot connect to DB server");
	}
	?>

$sql = "INSERT INTO `registerpetdetails`(`Username`, `Password`, `PetName`, `PetColor`, `PetBreed`, `DOB`, `Email`, `Address`) VALUES ('$UserName'),('$password'),`$PetName`,`$PetColor`,`$PetBreed`,'$DOB','$Email','$Address')";
if (!mysqli_query($con,$sql));
{
	echo 'Not Inserted';
}
else
{
	echo 'inserted';
}
header("refresh:2; url=RegisterPetDetails.html");
?>
