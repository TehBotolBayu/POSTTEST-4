<?php
session_start();

// $_SESSION["url"] = (array) null;
array_push($_SESSION["url"], $_POST["url"]);
// $_SESSION["title"] = $_POST["title"];
array_push($_SESSION["title"], $_POST["title"]);
array_push($_SESSION["dt"], $_POST["date"]);

$target_dir = "asset/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

array_push($_SESSION["filename"], $target_file);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
    header('Location: admin_menu.php');
  } else {
    $uploadOk = 0;
    header('Location: admin_menu.php');
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  
  $uploadOk = 0;
  header('Location: admin_menu.php');

}



// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  
  $uploadOk = 0;
  header('Location: admin_menu.php');
}


?>
