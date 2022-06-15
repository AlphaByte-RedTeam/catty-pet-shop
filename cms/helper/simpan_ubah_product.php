<?php
session_start();

if (empty($_SESSION['isLoggedin'])){
   header("location: logout.php");
   return;
}

require_once "koneksi.php";
?> 

<?php
$id_product = $_POST['id_product'];
$product_name = $_POST['product_name'];
$product_desc = $_POST['product_desc'];
$product_price = $_POST['product_price'];
$product_disc = $_POST['product_disc'];
$product_img = $_POST['product_img'];
$flag_active = (isset($_POST['isActive']) && $_POST['isActive'] == true) ? 1 : 0;

$sql = "";
$sql = "UPDATE tb_product SET product_name ='$product_name',";
$sql .= "product_desc = '$product_desc',";
$sql .= "product_price = '$product_price',";
$sql .= "product_disc = '$product_disc',";
$sql .= "product_img = '$product_img',";
$sql .= "flag_active = '$flag_active'";
$sql .= " WHERE id_product = '$id_product'";

$ok = mysqli_query($conn, $sql);
if ($ok)
   header("location: ../list/products_list.php");
?>