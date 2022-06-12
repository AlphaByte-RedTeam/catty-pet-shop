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
$id_member = $_POST['id_member'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$priv_type = (isset($_POST['isAdmin']) && $_POST['isAdmin'] == true) ? 1 : 0;

$sql = "";
$sql = "UPDATE tb_member SET first_name='$first_name',";
$sql .= "last_name ='$last_name',";
$sql .= " email='$email',";
$sql .= " priv_type='$priv_type'";
$sql .= " WHERE id_member = '$id_member'";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header("location: ../list/user_list.php");
?>
