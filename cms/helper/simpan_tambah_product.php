<?php
session_start();

if (empty($_SESSION['isLoggedin'])){
   header("location: logout.php");
   return;
}

require_once "koneksi.php";
?>

<?php
$product_name = $_POST['product_name'];
$product_desc = $_POST['product_desc'];
$product_price = $_POST['product_price'];
$product_disc = $_POST['product_disc'];
$product_img = $_POST['product_img'];
$flag_active = (isset($_POST['isActive']) && $_POST['isActive'] == true) ? 1 : 0;

$sql = " ";
$sql = "INSERT INTO tb_product (product_name, product_desc, product_price, product_disc, product_img,flag_active)
VALUES ('$product_name','$product_desc','$product_price', '$product_disc', '$product_img', '$flag_active')";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header('location: ../list/products_list.php');
?>