<?php
session_start();

?>
<!doctype html>
<html>

<head>
    <title>HGS-checkout</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/checkout.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(e) {
            $(".header").load("header.php");
            $(".footer").load("footer.html");

        });

    </script>
</head>

<body>

    <div class="header"></div>
    <div id="content">
        <div id="wrapper">
            <div class="main">
                <h1>Shopping cart</h1>

                <section class="shopping-cart">
                    <ol id="shopping-cart--list">


                        <?php


    if(isset($_SESSION['id'])){
      //  echo $_SESSION['id'];


        //

        //
    require_once('/mysqli_connect.php');
$query ="SELECT product.name, product.price,product.image FROM `cart` INNER join product ON cart.product_id=product.id WHERE user_id=".$_SESSION['id'].'' ;

$res =@mysqli_query($dbc,$query);
if($res){
    $total=0;
while($row = mysqli_fetch_array($res)){
//echo $row['price'];
 $total= $total+$row['price'];

echo '<li class="_grid shopping-cart--list-item">';
echo '<div class="_column product-image">';
echo '<img src="data:image/jpeg;base64'.base64_encode($row['image']).'"  alt="Rust game" width="140" height="180">';
echo '</div>';
echo '<div class="_column product-info">';
echo '<h4 class="product-name">'.$row['name'].'</h4>';
echo '<p class="product-desc">Key GLOBAL</p>';
echo '<div class="price product-single-price">'.$row['price'].' EGP</div>';
echo '</div>';
echo '<div class="_column product-modifiers">';
echo '<div class="_grid">';
echo '<button class="_btn _column product-subtract">&minus;</button>';
echo '<div class="_column product-qty">0</div>';
echo '<button class="_btn _column product-plus">&plus;</button>';
echo '</div>';
echo '<button class="_btn  product-remove">Remove</button>';
echo '<div class="price product-total-price">'.$row['price'].'EGP</div>';
echo '</div>';
echo '</li>';

    }
}
else {
    echo "Couldnt open";
    echo mysqli_error($dbc);
}

}else
        echo'you must login to use cart';
?>


                            <!--old html
                            <li class="_grid shopping-cart--list-item">
                                <div class="_column product-image">
                                    <img src="img/ItemImg/Rust.jpg" alt="Rust game" width="140" height="180">
                                </div>
                                <div class="_column product-info">
                                    <h4 class="product-name">Rust Steam Key GLOBAL</h4>
                                    <p class="product-desc">Key GLOBAL</p>
                                    <div class="price product-single-price">310 EGP</div>
                                </div>
                                <div class="_column product-modifiers">
                                    <div class="_grid">
                                        <button class="_btn _column product-subtract">&minus;</button>
                                        <div class="_column product-qty">0</div>
                                        <button class="_btn _column product-plus">&plus;</button>
                                    </div>
                                    <button class="_btn  product-remove">Remove</button>
                                    <div class="price product-total-price">310EGP</div>
                                </div>
                            </li>

-->
                    </ol>

                   <?php
                    if(isset($_SESSION['id'])){
                     $final_total=($total+$total*14/100)   ;
echo '<footer class="_grid cart-totals">';
echo '<div class="_column subtotal" id="subtotalCtr">';
echo '<div class="cart-totals-key">Subtotal</div>';
echo '<div class="cart-totals-value">';
echo  $total.'EGP';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="_column taxes" id="taxesCtr">';
echo '<div class="cart-totals-key">Taxes (14%)</div>';
echo '<div class="cart-totals-value">';
echo $total*14/100 . 'EGP</div>';
echo '</div>';
echo '<div class="_column total" id="totalCtr">';
echo '<div class="cart-totals-key">Total</div>';
echo '<div class="cart-totals-value">';
echo ''.$final_total.'EGP</div>';
echo '</div>';
echo '';
echo '<div class="_column checkout">';
echo '<form action="confirm.php" method="post">';
echo '<input type="submit" name="checkout" class="form-control">';
echo '</form>';
echo '</div>';
echo '</footer>';

                    }
                    ?>

                    <!--
                    <footer class="_grid cart-totals">
                        <div class="_column subtotal" id="subtotalCtr">
                            <div class="cart-totals-key">Subtotal</div>
                            <div class="cart-totals-value">
                                <?php echo $total?>EGP
                            </div>
                        </div>

                        <div class="_column taxes" id="taxesCtr">
                            <div class="cart-totals-key">Taxes (14%)</div>
                            <div class="cart-totals-value">
                                <?php echo $total*14/100 ?>EGP</div>
                        </div>
                        <div class="_column total" id="totalCtr">
                            <div class="cart-totals-key">Total</div>
                            <div class="cart-totals-value">
                                <?php echo $total+$total*14/100?>EGP</div>
                        </div>

                        <div class="_column checkout">
                            <form action="confirm.php" method="post">
                                <input type="submit" name="checkout" class="form-control">
                            </form>
                        </div>
                    </footer>
-->
                </section>
            </div>





        </div>
    </div>



    <div class="footer"></div>
</body>

</html>
