<?php
session_start();

// later - implement
// if (empty($_SESSION['isLoggedin'])){
//    header("location: logout.php");
//    return;
// }

require_once "koneksi.php";
?>

<?php
$title_video = $_POST['title_video'];
$desc_video = $_POST['desc_video'];
$file_video = $_POST['file_video'];
$file_image = $_POST['file_image'];
$flag_active = (isset($_POST['isActive']) && $_POST['isActive'] == true) ? 1 : 0;

$sql = " ";
$sql = "INSERT INTO tb_video(title_video, desc_video, file_video, file_image, flag_active)
VALUES ('$title_video','$desc_video','$file_video','$file_image','$flag_active')";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header('location: ../list/video_list.php');
?>