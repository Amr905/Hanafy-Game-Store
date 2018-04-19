<?php
session_start();
?>

<link rel="stylesheet" href="/css/header.css" type="text/css">
<a href="/" class="header-logo">
    <img class="logo-img" src="/img/logo.png" alt="Logo">
    <img class="logo-img-ani" src="/img/logo-an.png">

</a>


<div class="search-form">
    <form action="search.php">
        <input type="search" placeholder="Search" class="search-input">
        <button type="submit" class="search-submit">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>
<div class="login">
    <button class="header-btn">
        <a href="/login.php"><?php if(isset($_SESSION['Fn'])){echo $_SESSION['Fn']; }
            else {echo 'Login';}?></a>
    </button>
</div>
<div class="cart-section">

</div>
<div class="tool-bar">

    <div class="tool-selling">
        <a href="/Products.php">
            <button class="tool-selling-btn">Products</button>
        </a>
    </div>

    <div class="toggle selling-toggle">
        <ul class="toggle-list">
            <li>
                <a href="/Products.php#FPS">
                    <span>FPS</span>
                </a>
            </li>
            <li>
                <a href="/Products.php#Action">
                    <span>Action</span>
                </a>
            </li>
            <li>
                <a href="/Products.php#Horror">
                    <span>Horror</span>
                </a>
            </li>


        </ul>
    </div>

</div>
<div class="cart-tool-bar">
    <div class="tool-cart">
        <button class="tool-selling-btn">
            <a href="#">
                <i class="fa fa-shopping-cart"></i>Cart</a>
        </button>
    </div>
    <div class="toggle selling-toggle">
        <ul class="toggle-list">
            <li>
                <a href="checkout.php">
                    <span>No items in your Cart</span>
                </a>
            </li>
        </ul>
        <button class="checkout">
            <a href="checkout.php">Checkout</a>
        </button>
    </div>

</div>