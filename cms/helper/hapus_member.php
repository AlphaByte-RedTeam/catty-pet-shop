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
   header("location: ../list/user_list.php");
   return;
}

require_once "koneksi.php";
?>

<?php
$id_member = $_GET['id'];

$sql = "";
$sql = "DELETE FROM tb_member WHERE id_member = '$id_member' ";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header('location: ../list/user_list.php');
?>
