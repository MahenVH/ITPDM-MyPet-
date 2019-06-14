<?php


$currentDate = date('Y-m-d'); //this will get the current date ie when this was posted 2107-07-06


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mypet";

    $dbcon = mysqli_connect($servername,$username,$password,$dbname); //connect to database
    if($dbcon->connect_error) die($dbcon->connect_error);
    $remind_query1 = "select email from vetappointment";
    /*$result = mysqli_query($dbcon,$remind_query1);*/

	if($run1 = $dbcon->query($remind_query1))
    {
	     $rows = $run1->num_rows;

          for ($j = 0; $j < $rows; ++$j)
          {
          	  $run1->data_seek($j);
          	  $row = $run1->fetch_array(MYSQLI_NUM);

          	  $to = $row['email'];
              $subject = "Code 30 Reminder";
              $message = "Hi ";
              $headers = "From: Bridges Nursery";

    		  mail($to,$subject,$message,$headers);
          }
	     }
?>
