<?php
 require('config.php');
session_start();
$Firstname = $_POST['Firstname'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];
$desciption = $_POST['desciption'];
$target_dir = "uploads/";
if($psw!=$psw1)
{
    header('refresh:3;url='.$_SERVER['HTTP_REFERER']);
    echo "<p style='color:red'>password does not match</p>";
}
else
{
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image

$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}


// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 900000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       
      $sql = "INSERT INTO `teacher`( `image`, `first_name`, `last_name`, `subject`, `desciption`)
       VALUES ('$target_file','$Firstname','$lastname','$subject','$desciption')";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            die("something went wrongg22");
        } else {
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            header('location:addteacher.php');
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}