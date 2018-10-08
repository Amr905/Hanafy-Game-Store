<!doctype html>
<html>

<head>
    <title>HGS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/home.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

    <script>
        $(document).ready(function(e) {
            $(".header").load("header.php");
            $(".footer").load("footer.html");

        });

    </script>





</head>

<body>
    <div class="header">
    </div>
    <div id="content">
        <div id="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mySlides" style="background-image: url('img/Test12.jpg')">
                        <div class="div_black"></div>
                        <span class="item">Redemption comes at a high cost… unless you have these discounts! </span>
                    </div>
                    <div class="mySlides" style="background-image: url('img/3.jpg')">
                        <div class="div_black"></div>
                        <span class="item">Spring brought fresh games with it!</span>
                    </div>
                    <div class="mySlides" style="background-image: url('img/5.jpg')">
                        <div class="div_black"></div>
                        <span class="item">Spring brought fresh games with it!</span>
                    </div>
                </div>
            </div>

            <div style="text-align:center">
                <span class="dot" onclick="currentDiv(1)"></span>
                <span class="dot" onclick="currentDiv(2)"></span>
                <span class="dot" onclick="currentDiv(3)"></span>
            </div>

            <header class="U_Header">
                <h2>
                    <span>Most popular Games</span>
                </h2>
            </header>
            <div class="row" style="margin-top:120px;">

                <?php require_once('/mysqli_connect.php');
            $query ="SELECT * FROM `product` WHERE out_of_stock=0" ;
            $res =@mysqli_query($dbc,$query);

            if($res){
                $i = 0;
                while($row = mysqli_fetch_array($res)){?>
                <div class="col-lg-3">
                    <div class="item_card">
                        <div class="card_img">
                            <a href="<?php echo 'productdetail.php?id='.$row['id'].'' ?>">
                                <?php echo '<img class="Selled_img_Atr" src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="Warhammer: Vermintide 2 Steam Key GLOBAL"> ' ?>
                            </a>
                        </div>
                        <div class="card_body">
                            <h3 class="card_title">
                                <a href="<?php echo 'productdetail.php?id='.$row['id'].'' ?>">
                                    <?php echo $row['name'] ?>
                                </a>
                            </h3>
                        </div>

                        <div class="card_price">
                            <span class="price"><?php echo $row['price'] ?>
                                <sub class="price_Currency">EGP</sub>
                            </span>

                        </div>
                    </div>
                </div>

                <?php         $i++;
        if ($i % 4 == 0) {
            echo '</div><div class="row" style="margin-top:120px;">';
        } }
            } ?>
            </div>
            <header class="U_Header">
                <h2>
                    <span>Pre-orders</span>
                </h2>
            </header>
            <div class="row" style="margin-top:120px;">

                <div class="col-lg-3">
                    <div class="item_card">
                        <div class="card_img">
                            <a href="#">
                                <img class="Selled_img_Atr" src="img/ItemImg/WarHam.jpg" alt="Warhammer: Vermintide 2 Steam Key GLOBAL">
                            </a>
                        </div>
                        <div class="card_body">
                            <h3 class="card_title">
                                <a href="#">Warhammer: Vermintide 2 Steam Key GLOBAL</a>
                            </h3>
                        </div>

                        <div class="card_price">
                            <span class="price">460
                                <sub class="price_Currency">EGP</sub>
                            </span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item_card">
                        <div class="card_img">
                            <a href="#">
                                <img class="Selled_img_Atr" src="img/ItemImg/Rust.jpg" alt="Rust Steam Key GLOBAL">
                            </a>
                        </div>
                        <div class="card_body">
                            <h3 class="card_title">
                                <a href="#">Rust Steam Key GLOBAL</a>
                            </h3>
                        </div>

                        <div class="card_price">
                            <span class="price">310
                                <sub class="price_Currency">EGP</sub>
                            </span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item_card">
                        <div class="card_img">
                            <a href="#">
                                <img class="Selled_img_Atr" src="img/ItemImg/COD3.jpg" alt="Call of Duty: Black Ops III Steam Key GLOBAL">
                            </a>
                        </div>
                        <div class="card_body">
                            <h3 class="card_title">
                                <a href="#">Call of Duty: Black Ops III Steam Key GLOBAL</a>
                            </h3>
                        </div>

                        <div class="card_price">
                            <span class="price">550.9
                                <sub class="price_Currency">EGP</sub>
                            </span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item_card">
                        <div class="card_img">
                            <a href="#">
                                <img class="Selled_img_Atr" src="img/ItemImg/Facry5.jpg" alt="Fortnite standard edition Epic Games Key PC GLOBAL">
                            </a>
                        </div>
                        <div class="card_body">
                            <h3 class="card_title">
                                <a href="#">PLAYERUNKNOWN'S BATTLEGROUNDS (PUBG) Steam Key GLOBAL</a>
                            </h3>
                        </div>

                        <div class="card_price">
                            <span class="price">700
                                <sub class="price_Currency">EGP</sub>
                            </span>

                        </div>
                    </div>
                </div>
            </div>

            <header class="U_Header">
                <h2>
                    <span>Recently released games </span>
                </h2>
            </header>
            <div class="row" style="margin-top:120px;padding-bottom: 100px; ">
                <div class="col-lg-3">
                    <div class="item_card">
                        <div class="card_img">
                            <a href="#">
                                <img class="Selled_img_Atr" src="img/ItemImg/ElderScrolls5.jpg" alt="Fortnite standard edition Epic Games Key PC GLOBAL">
                            </a>
                        </div>
                        <div class="card_body">
                            <h3 class="card_title">
                                <a href="#">The Elder Scrolls V: Skyrim Steam Key GLOBAL</a>
                            </h3>
                        </div>

                        <div class="card_price">
                            <span class="price">220
                                <sub class="price_Currency">EGP</sub>
                            </span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item_card">
                        <div class="card_img">
                            <a href="#">
                                <img class="Selled_img_Atr" src="img/ItemImg/W2.jpg" alt="Fortnite standard edition Epic Games Key PC GLOBAL">
                            </a>
                        </div>
                        <div class="card_body">
                            <h3 class="card_title">
                                <a href="#">The Witcher 2 Assassins of Kings Enhanced Edition Steam Key GLOBAL</a>
                            </h3>
                        </div>

                        <div class="card_price">
                            <span class="price">170
                                <sub class="price_Currency">EGP</sub>
                            </span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item_card">
                        <div class="card_img">
                            <a href="#">
                                <img class="Selled_img_Atr" src="img/ItemImg/TheDivision.jpg" alt="Tom Clancy's The Division Uplay Key ROW">
                            </a>
                        </div>
                        <div class="card_body">
                            <h3 class="card_title">
                                <a href="#">Tom Clancy's The Division Uplay Key ROW</a>
                            </h3>
                        </div>

                        <div class="card_price">
                            <span class="price">400
                                <sub class="price_Currency">EGP</sub>
                            </span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item_card">
                        <div class="card_img">
                            <a href="#">
                                <img class="Selled_img_Atr" src="img/ItemImg/GR.jpg" alt="Fortnite standard edition Epic Games Key PC GLOBAL">
                            </a>
                        </div>
                        <div class="card_body">
                            <h3 class="card_title">
                                <a href="#">Tom Clancy's Ghost Recon Wildlands Uplay Key ROW</a>
                            </h3>
                        </div>

                        <div class="card_price">
                            <span class="price">290
                                <sub class="price_Currency">EGP</sub>
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="footer"></div>
</body>


</html>
