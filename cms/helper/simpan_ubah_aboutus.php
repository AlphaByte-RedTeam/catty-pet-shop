<?php
session_start();

if (empty($_SESSION['isLoggedin'])){
   header("location: logout.php");
   return;
}

require_once "koneksi.php";
?> 

<?php
$id_aboutus = $_POST['id_aboutus'];
$title_aboutus = $_POST['title_aboutus'];
$desc_aboutus = $_POST['desc_aboutus'];
$img_aboutus = $_POST['img_aboutus'];
$flag_active = (isset($_POST['isActive']) && $_POST['isActive'] == true) ? 1 : 0;

$sql = "";
$sql = "UPDATE tb_aboutus SET title_aboutus='$title_aboutus',";
$sql .= "desc_aboutus = '$desc_aboutus',";
$sql .= "img_aboutus = '$img_aboutus',";
$sql .= "flag_active = '$flag_active'";
$sql .= " WHERE id_aboutus = '$id_aboutus'";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header("location: ../list/aboutus_list.php");
?>
