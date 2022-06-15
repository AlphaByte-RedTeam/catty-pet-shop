<?php
session_start();

if (empty($_SESSION['isLoggedin'])){
   header("location: logout.php");
   return;
}

require_once "koneksi.php";
?>

<?php
$title_aboutus = $_POST['title_aboutus'];
$desc_aboutus = $_POST['desc_aboutus'];
$img_aboutus = $_POST['img_aboutus'];
$flag_active = (isset($_POST['isActive']) && $_POST['isActive'] == true) ? 1 : 0;

$sql = " ";
$sql = "INSERT INTO tb_aboutus (title_aboutus, desc_aboutus, img_aboutus, flag_active)
VALUES ('$title_aboutus','$desc_aboutus','$img_aboutus', '$flag_active')";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header('location: ../list/aboutus_list.php');
?>