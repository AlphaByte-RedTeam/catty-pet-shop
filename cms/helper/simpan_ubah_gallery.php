<?php
session_start();

if (empty($_SESSION['isLoggedin'])){
   header("location: logout.php");
   return;
}

require_once "koneksi.php";
?> 

<?php
$id_gallery = $_POST['id_gallery'];
$img_gallery = $_POST['img_gallery'];
$alt_gallery = $_POST['alt_gallery'];
$flag_active = (isset($_POST['isActive']) && $_POST['isActive'] == true) ? 1 : 0;

$sql = "";
$sql = "UPDATE tb_gallery SET img_gallery='$img_gallery',";
$sql .= "alt_gallery = '$alt_gallery',";
$sql .= "flag_active = '$flag_active'";
$sql .= " WHERE id_gallery = '$id_gallery'";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header("location: ../list/gallery_list.php");
?>
