<?php
session_start();
?>
<?php
require_once('/mysqli_connect.php');
if (!isset($_SESSION['id'])) {
    header("location:login.php");
    } else
if (isset($_GET['item'])){
    $query = "INSERT INTO `cart` (`user_id`, `product_id`) VALUES ('".(int)$_SESSION['id']."', '".(int)$_GET['item']."')";
    $res=@mysqli_query($dbc,$query);
    header("location:productdetail.php?id=".$_GET['item']."");
} else if(isset($_GET['delete'])){
    $query = "DELETE FROM hgs.cart WHERE id='".(int)$_GET['delete']."'";
    $res=@mysqli_query($dbc,$query);
    header("location:checkout.php");
} else {
    header("location:products.php");
}


?>
