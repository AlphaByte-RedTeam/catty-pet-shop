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
$title_service = $_POST['title_service'];
$img_service = $_POST['img_service'];
$flag_active = (isset($_POST['isActive']) && $_POST['isActive'] == true) ? 1 : 0;

$sql = " ";
$sql = "INSERT INTO tb_service (title_service, img_service, flag_active)
VALUES ('$title_service','$img_service', '$flag_active')";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header('location: ../list/services_list.php');
?>