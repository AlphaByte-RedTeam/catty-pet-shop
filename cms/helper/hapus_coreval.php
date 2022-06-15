<?php
session_start();

if (empty($_SESSION['isLoggedin'])){
   header("location: logout.php");
   return;
}

if (empty($_GET['id'])) {
   header("location: ../list/coreval_list.php");
   return;
}

require_once "koneksi.php";
?>

<?php
$id_coreval = $_GET['id'];

$sql = "";
$sql = "DELETE FROM tb_coreval WHERE id_coreval = '$id_coreval' ";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header('location: ../list/coreval_list.php');
?>
