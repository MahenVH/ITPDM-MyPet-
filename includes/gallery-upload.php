<?php

if (isset($_POST['submit'])) {

  $newFileName = $_POST['filename'];
  /*if a file name is not entered by the user,the file will be called gallery*/
  if ($_POST['filename']) {
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
  $fileName = $file["error"];
  $fileName = $file["size"];

  $fileExt = explode(",",$fileName);
  $fileActualExt = strtolower(end($fileExt));

  /*Types of allowed file types */
  $allowed = array("jpg", "jpeg", "png");


}


 ?>
