<?php
if (isset($_POST['submit'])) {

include_once 'DBlogin.php';
$first = mysqli_real_escape_string($conn, $_POST['first']);
$first = mysqli_real_escape_string($conn, $_POST['last']);
$first = mysqli_real_escape_string($conn, $_POST['email']);
$first = mysqli_real_escape_string($conn, $_POST['pwd']);


//Error handlers
//check for empty fields
if (empty($first) || empty($last)|| empty($email) ||empty($pwd) || empty($cpwd)) {
  header("Location: ../signup.php?signup=empty");
  exit();

}else {

    //check if input charactors are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$", $last)) {
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
        $result = mysql_quey_num_row($result);
        $resultCheck = mysql_num_rows($result);

        if ($resultCheck>0) {
          header("Location: ../signup.php?signup=usertaken");
          exit();

          else {
            //hashing the password
            $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
            //Insert the user in tho the DB
            $sql = "Insert into user(user_first, user_last, user_email, user_uid, user_pwd)
             values('$first, '$last', ;'$email', '$uid', $hashpwd);";
             $result= mysql_quey($conn,$sql);
             header("Location: ../signup.php?signup=success");
             exit();

          }
        }
      }
    }
}

  else {
    header("Location: ../signup.php");
    exit();
  }
} ?>
