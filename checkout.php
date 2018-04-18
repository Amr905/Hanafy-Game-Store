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
            $(".header").load("header.html");
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


                    </ol>

                    <footer class="_grid cart-totals">
                        <div class="_column subtotal" id="subtotalCtr">
                            <div class="cart-totals-key">Subtotal</div>
                            <div class="cart-totals-value">310EGP</div>
                        </div>

                        <div class="_column taxes" id="taxesCtr">
                            <div class="cart-totals-key">Taxes (14%)</div>
                            <div class="cart-totals-value">34EGP</div>
                        </div>
                        <div class="_column total" id="totalCtr">
                            <div class="cart-totals-key">Total</div>
                            <div class="cart-totals-value">344EGP</div>
                        </div>

                        <div class="_column checkout">
                            <form action="confirm.php">
                                <button class="_btn">Checkout</button>
                            </form>
                        </div>
                    </footer>

                </section>
            </div>





        </div>
    </div>



    <div class="footer"></div>
</body>

</html>
