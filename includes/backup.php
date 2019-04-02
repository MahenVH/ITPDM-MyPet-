<?php

if (isset($_POST['submit'])) {

  $newFileName = $_POST['filename'];

  /*if a file name is not entered by the user,the file will be called gallery*/
  if (empty($newFileName)) {
    $newFileName = "gallery";
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

  if (in_array($fileActualExt, $allowed)){
    if($fileError ===0){
      if ($fileSize < 200000000) {
        /*Creating a unique id so that it doesnt overwrite files */
        $imageFullName = $newFileName . "." . uniqid("",true) .".". $fileActualExt ;
        $fileDestination = "D:\xampp\htdocs\ITPDM_Project\img" .$imageFullName;

        include_once "db.php";

        $sql = "SELECT * FROM gallery; ";
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

              $sql = "INSERT INTO gallery (titleGallery, descGallery, imgFullNameGallery) VALUES(?, ? , ?);";
              if(!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL statement failed";
              }else {
                mysqli_stmt_bind_param($stmt, "sss",$imageTitle ,$imageDesc, $imageFullName);
                mysqli_stmt_execute($stmt);

                upload_file($fileTempName, $fileDestination);

                header("Location: ../Gallery.php?upload=successfull");

                    }

             }

      }else{
        echo "File size too big";
        exit();
      }

    } else {
      echo "You had an error";
      exit();
    }


  }else {
    echo "Upload a proper file type";
    exit();
  }


}


 ?>
