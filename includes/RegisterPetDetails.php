<?php

$UserName = $_POST["usernameName"];
//$UserName = $_POST["username"];
$password = $_POST["pwd"];
$PetName = $_POST["Petname"];
$Petcolor = $_POST["Petcolor"]
$PetBreed = $_POST["PetBreed"]
$dob = $_POST["dob"];
$email = $_POST["email"];
$address= $_POST["add"];



$con = mysqli_connect("localhost","root","","UpdatePetDetails");
	if(!$con)
	{
		die("Cannot connect to DB server");
	}
