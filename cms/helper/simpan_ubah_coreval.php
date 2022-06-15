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
$id_coreval = $_POST['id_coreval'];
$title_coreval = $_POST['title_coreval'];
$desc_coreval = $_POST['desc_coreval'];
$src_coreval = $_POST['src_coreval'];
$flag_active = (isset($_POST['isActive']) && $_POST['isActive'] == true) ? 1 : 0;

$sql = "";
$sql = "UPDATE tb_coreval SET title_coreval='$title_coreval',";
$sql .= "desc_coreval = '$desc_coreval',";
$sql .= "src_coreval = '$src_coreval',";
$sql .= "flag_active = '$flag_active'";
$sql .= " WHERE id_coreval = '$id_coreval'";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header("location: ../list/coreval_list.php");
?>
