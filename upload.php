<?php
$target_dir = "uploads/";
$target_file = $target_dir .uniqid('', true).basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
?>
