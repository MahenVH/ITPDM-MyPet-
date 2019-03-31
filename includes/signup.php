<?php
if (isset($_POST['submit'])) {

include_once 'DBlogin.php';
$first = mysqli_real_escape_string($conn, $_POST['first']);
$first = mysqli_real_escape_string($conn, $_POST['last']);
$first = mysqli_real_escape_string($conn, $_POST['email']);
$first = mysqli_real_escape_string($conn, $_POST['pwd']);
$first = mysqli_real_escape_string($conn, $_POST['cpwd']);

//Error handlers
//check for empty fields
if (empty($first) || empty($last)|| empty($email) ||empty($pwd) || empty($cpwd)) {
  header("Location: ../signup.php?signup=empty");
  exit();

}else {

    //check if input charactors are valid
    if (!preg_match("/^[a-zA-Z]*$", $first) || !preg_match("/^[a-zA-Z]*$", $last)) {
      header("Location: ../signup.php?signup=invalid");
      exit();
    }
    else {
      //check if email is valid
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?signup=email");
        exit();
      }
      else {
        $sql = "SELECT * FROM user where user_uid='$uid'";
        $result = mysql
      }
    }
}

  else {
    header("Location: ../signup.php");
    exit();
  }
} ?>
