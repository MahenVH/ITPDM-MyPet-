

  <?php

  if(isset($_POST["submit"])){
  $Email = $_POST["uid"];
  $Password = $_POST["pwd"];
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

$sql = "Select * from signup where email='".$Email."' and password='".$Password."'";

$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)

  {
    $valid = true;
    $_SESSION["uid"]= $Email;
  }else{
    $valid = false;

mysqli_close($conn);}

if($valid){
  header('Location:../HomePage.php');
}else{
  $_SESSION['message']="Incorrect Username or Password.";
        header("location:login.php");
        echo '<h3>Invalid username or password</h3>';
}
}
?>
