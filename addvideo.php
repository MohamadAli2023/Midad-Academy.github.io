<?php
 require('config.php');
session_start();
$course=$_POST['course'];
$title=$_POST['title'];
$number=$_POST['number'];
if (isset($_REQUEST['submit'])) {
  $name = $_FILES['uploadvideo']['name'];
  $type = $_FILES['uploadvideo']['type'];
  $size=$_FILES['uploadvideo']['size'];
  $cname = str_replace(" ", "_", $name);
  $tmp_name = $_FILES['uploadvideo']['tmp_name'];
  $target_path = "uploads/";
  $target_path = $target_path . basename($cname);
  if (move_uploaded_file($_FILES['uploadvideo']['tmp_name'], $target_path)) {
    $sql = "INSERT INTO `video`(`course_id`, `title`, `number`, `video`) VALUES ('$course','$title','$number','$target_path')";
    $result = mysqli_query($con, $sql);
    if (!$result) {
        die("something went wrongg");
    } else {
        echo "The file " . htmlspecialchars(basename($_FILES["uploadvideo"]["name"])) . " has been uploaded.";
        header('location:addcourse.php');
    }
    echo "Your video " . $cname . " has been successfully uploaded";
  }
}

?>

I made change with branch-design branch