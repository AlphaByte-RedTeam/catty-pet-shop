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
$id_video = $_POST['id_video'];
$title_video = $_POST['title_video'];
$desc_video = $_POST['desc_video'];
$file_image = $_POST['file_image'];
$file_video = $_POST['file_video'];
$flag_active = (isset($_POST['isActive']) && $_POST['isActive'] == true) ? 1 : 0;

$sql = "";
$sql = "UPDATE tb_video SET title_video='$title_video',";
$sql .= "desc_video = '$desc_video',";
$sql .= "file_image = '$file_image',";
$sql .= "file_video = '$file_video',";
$sql .= "flag_active = '$flag_active'";
$sql .= " WHERE id_video = '$id_video'";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header("location: ../list/video_list.php");
?>
