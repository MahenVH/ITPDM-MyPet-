<?php

$currentDate =  date('Y-m-d');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mypet";

$dbcon = mysqli_connect($servername,$username,$password,$dbname);

if($dbcon->connect_error) die($dbcon->connect_error);

$remind_query = "SELECT vetname,email From vetappointment WHERE appday = '$currentDate'";
$run = mysqli_query($dbcon, $remind_query);



        while($row=mysqli_fetch_array($run))
        {
        	  $parID=$row[0];
        		$parVetname=$row[2];
            $parAppday=$row[4];
        		$parEmail=$row[6];

            $to= "mahenh@gmail.com";
            $subject="Reminder";

            $txt = "hi";

            $headers = "From: baddrakw@gmail.com";


            mail($to,$subject,$txt,$headers);
        }
?>
