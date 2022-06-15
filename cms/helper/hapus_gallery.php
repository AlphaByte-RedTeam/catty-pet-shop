<?php
session_start();

if (empty($_SESSION['isLoggedin'])){
   header("location: logout.php");
   return;
}

if (empty($_GET['id'])) {
   header("location: ../list/gallery_list.php");
   return;
}

require_once "koneksi.php";
?>

<?php
$id_gallery = $_GET['id'];

$sql = "";
$sql = "DELETE FROM tb_gallery WHERE id_gallery = '$id_gallery' ";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header('location: ../list/gallery_list.php');
?>
