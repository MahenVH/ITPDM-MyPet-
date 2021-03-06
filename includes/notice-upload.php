<?php

if (isset($_POST['submit'])) {

  $newFileName = $_POST['filename'];

  /*if a file name is not entered by the user,the file will be called notice*/
  if (empty($newFileName)) {
    $newFileName = "notice";
  } else {
    /*If there are spaces in the file name,will replace them with dashes */
    $newFileName = strtolower(str_replace(" ","-",$newFileName));
  }

  $imageTitle = $_POST['filetitle'];
  $imageDesc = $_POST['filedesc'];

  $file = $_FILES['file'];

  /*Taking the file information to variables*/
  $fileName = $file["name"];
  $fileType = $file["type"];
  $fileTempName = $file["tmp_name"];
  $fileError = $file["error"];
  $fileSize = $file["size"];
  $fileExt = explode(",",$fileName);
  $fileActualExt = strtolower(end($fileExt));

  /*Types of allowed file types */
  $allowed = array("jpg", "jpeg", "png");

  $imageFullName = $newFileName . "." . uniqid("",true) .".". $fileActualExt ;
  $fileDestination = "../img/gallery/".$imageFullName;

  include_once "db.php";

  $sql = "SELECT * FROM notice; ";
  /*Writing the prepared statement */
  $stmt = mysqli_stmt_init($conn);

  /*If statement fails ,give error message*/
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL statement failed";
  }else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rowcount = mysqli_num_rows($result);
        $setImageOrder = $rowcount +1;

        $sql = "INSERT INTO notice (titleNotice, descNotice, imgFullNameNotice) VALUES(?, ?, ?);";
        if(!mysqli_stmt_prepare($stmt, $sql)) {
          echo "SQL statement failed";
        }else {
            mysqli_stmt_bind_param($stmt, "sss",$imageTitle ,$imageDesc, $imageFullName);
            mysqli_stmt_execute($stmt);

            move_uploaded_file($fileTempName, $fileDestination);

            header("Location: ../NoticeBoard.php?upload=successfull");
              }

        }
}
 ?>
