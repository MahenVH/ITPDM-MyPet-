<?php


/*$currentDate = date('Y-m-d');*/ //this will get the current date ie when this was posted 2107-07-06


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mypet";

    $dbcon = mysqli_connect($servername,$username,$password,$dbname) or die(mysql_error()); //connect to database

    $query = "select * from vetappointment";
    $result = mysqli_query($dbcon,$query);

    	$retval = false;

    if ($result) {
		  while($row = mysqli_fetch_array($result)) {
				  $entryNo=$row['entry'];
			  	$petName=$row['petname'];
			  	$vetName=$row['vetname'];
			  	$vetClinicName=$row['vetclinicname'];
			  	$appDay=$row['appday'];
          $appTime=$row['apptime'];
          $email=$row['email'];

          $current = strtotime(date("Y-m-d"));
          $date    = strtotime($appDay);

          $datediff = $date - $current;
          $difference = floor($datediff/(60*60*24));

          if($difference=5)//5 days;
				{
					//email code
					$to = $email;
					$subject = "Pets veterinarian appointment reminder";

					$message = "Your appointment is due in 5 days with ".$vetName." on ".$appDay."";
					//$header = "From:".$ownerEmail." \r\n";
					$header = "From: baddrakw@gmail.com\r\n";
					$header .= "MIME-Version: 1.0\r\n";
					$header .= "Content-type: text/html\r\n";
					ini_set('SMTP','tls://smtp.gmail.com'); ini_set('smtp_port',587);
					$retval = mail($to,$subject,$message,$header);
				}
      }
}
        else {
    		  echo mysql_error();
    		}



?>
