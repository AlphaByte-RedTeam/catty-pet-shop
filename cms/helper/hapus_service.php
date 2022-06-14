<?php
session_start();

// later - implement
// if (empty($_SESSION['isLoggedin'])){
//    header("location: logout.php");
//    return;
// }

// later - also check for isAdmin
// if (empty($_GET['id']) || empty($_SESSION['isAdmin'])){
if (empty($_GET['id'])) {
   header("location: ../list/services_list.php");
   return;
}

require_once "koneksi.php";
?>

<?php
$id_service = $_GET['id'];

$sql = "";
$sql = "DELETE FROM tb_service WHERE id_service = '$id_service' ";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header('location: ../list/services_list.php');
?>