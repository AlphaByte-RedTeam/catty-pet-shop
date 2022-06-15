<?php
session_start();

if (empty($_SESSION['isLoggedin'])){
   header("location: logout.php");
   return;
}

require_once "koneksi.php";
?>

<?php
$title_coreval = $_POST['title_coreval'];
$desc_coreval = $_POST['desc_coreval'];
$src_coreval = $_POST['src_coreval'];
$flag_active = (isset($_POST['isActive']) && $_POST['isActive'] == true) ? 1 : 0;

$sql = " ";
$sql = "INSERT INTO tb_coreval(title_coreval, desc_coreval, src_coreval, flag_active)
VALUES ('$title_coreval','$desc_coreval','$src_coreval', '$flag_active')";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header('location: ../list/coreval_list.php');
?>