<?php
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    if (preg_match("/ph/i", $imageFileType)) {
        die("Bad hacker");
    }
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "The file " . $targetFile . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
