

  <?php

  if(isset($_POST["submit"])){

  $$password = $_POST['pwd'];
  $nic = $_POST["nic"];
  $valid= false;

/*$con = mysqli_connect("localhost","root","","mypet");*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mypet";

$conn = mysqli_connect($servername,$username,$password,$dbname);


  if(!$conn)
  {
    die ("Can't connect to the database");
  }

$sql = "Select * from signup where nic='".$nic."'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
  $valid = true;
  $_SESSION["nic"]= $nic;


}else{
  $valid = false;

mysqli_close($conn);}

if ($valid) {
   header('Location:../showPassword.php');
   if ($nic->num_rows>0) {
     while ($row = $result->fetch_assoc()) {
       echo "name:".$row["nic"]."";
     }
   }



}else {
  $_SESSION['message']="Incorrect Username or Password.";
        header("location:../ForgotPassword.html");
        alert("Invalid NIC");
}

}
?>
