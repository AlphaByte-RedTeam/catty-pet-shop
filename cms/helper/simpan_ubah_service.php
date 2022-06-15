<?php
session_start();

if (empty($_SESSION['isLoggedin'])){
   header("location: logout.php");
   return;
}

require_once "koneksi.php";
?> 

<?php
$id_service = $_POST['id_service'];
$title_service = $_POST['title_service'];
$img_service = $_POST['img_service'];
$flag_active = (isset($_POST['isActive']) && $_POST['isActive'] == true) ? 1 : 0;

$sql = "";
$sql = "UPDATE tb_service SET title_service='$title_service',";
$sql .= "img_service = '$img_service',";
$sql .= "flag_active = '$flag_active'";
$sql .= " WHERE id_service = '$id_service'";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header("location: ../list/services_list.php");
?>