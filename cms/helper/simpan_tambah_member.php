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
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
// $member_password = md5(trim($_POST['member_password']));
$member_password = $_POST['member_password'];
$priv_type = (isset($_POST['isAdmin']) && $_POST['isAdmin'] == true) ? 1 : 0;

$sql = " ";
$sql = "INSERT INTO tb_member (first_name, last_name, email, member_password, priv_type)
VALUES ('$first_name','$last_name','$email', '$member_password', '$priv_type')";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header('location: ../list/user_list.php');
?>