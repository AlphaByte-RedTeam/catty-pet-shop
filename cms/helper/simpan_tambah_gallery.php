<?php
session_start();

if (empty($_SESSION['isLoggedin'])){
   header("location: logout.php");
   return;
}

require_once "koneksi.php";
?>

<?php
$img_gallery = $_POST['img_gallery'];
$alt_gallery = $_POST['alt_gallery'];
$flag_active = (isset($_POST['isActive']) && $_POST['isActive'] == true) ? 1 : 0;

$sql = " ";
$sql = "INSERT INTO tb_gallery (img_gallery, alt_gallery, flag_active)
VALUES ('$img_gallery','$alt_gallery','$flag_active')";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header('location: ../list/gallery_list.php');
?>