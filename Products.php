<!doctype html>
<html>

<head>
    <title>Hgs-products</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/home.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(e) {
            $(".header").load("header.php");
            $(".footer").load("footer.html");

        });
    </script>


    <script>
        var curUrl;

        function changeTitle() {

            var id = curUrl.substring(curUrl.lastIndexOf('#') + 1);
            if (id.toLowerCase() == "action") {
                document.getElementById('setTitle').innerHTML = "Games-Action";
            } else if (id.toLowerCase() == "fps") {
                document.getElementById('setTitle').innerHTML = "Games-FPS";
            } else if (id.toLowerCase() == "horror") {
                document.getElementById('setTitle').innerHTML = "Games-Horror";
            } else {
                document.getElementById('setTitle').innerHTML = "Games";
            }

        }
        window.onload = function() {
            curUrl = window.location.href;
            changeTitle();
            console.log(curUrl);
        }
    </script>
</head>

<body>
    <div class="header"></div>
    <div id="content">
        <div id="wrapper">

            <!--Title-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="H-Header">
                        <div class="H-title">
                            <h1 id="setTitle">Games</h1>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="Categories-filters">
                        <h2 class=" Categories-titles">Games</h2>
                        <div style="max-height:250px">
                            <ul class="categories-list">
                                <li class="categories-list-item">
                                    <a href="#">Action</a>
                                </li>
                                <li class="categories-list-item">
                                    <a href="#">Adventure</a>
                                </li>
                                <li class="categories-list-item">
                                    <a href="#">MMO</a>
                                </li>
                                <li class="categories-list-item">
                                    <a href="#">Racing</a>
                                </li>
                                <li class="categories-list-item">
                                    <a href="#">Horror</a>
                                </li>
                                <li class="categories-list-item">
                                    <a href="#">Shooter/FPS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="item_card">
                        <div class="card_img">
                            <a href="#">
                                <img class="Selled_img_Atr" src="img/ItemImg/GTA5.jpg" alt="Fortnite standard edition Epic Games Key PC GLOBAL">
                            </a>
                        </div>
                        <div class="card_body">
                            <h3 class="card_title">
                                <a href="#">Grand Theft Auto V Rockstar Key GLOBAL</a>
                            </h3>
                        </div>

                        <div class="card_price">
                            <span class="price">300.5
                                <sub class="price_Currency">EGP</sub>
                            </span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item_card">
                        <div class="card_img">
                            <a href="#">
                                <img class="Selled_img_Atr" src="img/ItemImg/BF4.jpg" alt="Fortnite standard edition Epic Games Key PC GLOBAL">
                            </a>
                        </div>
                        <div class="card_body">
                            <h3 class="card_title">
                                <a href="#">Battlefield 4 Origin Key PC GLOBAL</a>
                            </h3>
                        </div>

                        <div class="card_price">
                            <span class="price">150.99
                                <sub class="price_Currency">EGP</sub>
                            </span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item_card">
                        <div class="card_img">
                            <a href="#">
                                <img class="Selled_img_Atr" src="img/ItemImg/PUBG.jpg" alt="Fortnite standard edition Epic Games Key PC GLOBAL">
                            </a>
                        </div>
                        <div class="card_body">
                            <h3 class="card_title">
                                <a href="#">PLAYERUNKNOWN'S BATTLEGROUNDS (PUBG) Steam Key GLOBAL</a>
                            </h3>
                        </div>

                        <div class="card_price">
                            <span class="price">120
                                <sub class="price_Currency">EGP</sub>
                            </span>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 20px">
                <div class="col-lg-3">
                    <div class="Categories-filters">
                        <h3 class="categories-radio-title">Platforms</h3>
                        <div style="max-height:250px">
                            <div>
                                <label class="radio">
                                    <input type="radio" name="platform" value checked>
                                    <i></i>
                                    <span>All</span>
                                </label>
                            </div>

                            <div>
                                <label class="radio">
                                    <input type="radio" name="platform">
                                    <span>Xbox</span>
                                </label>
                            </div>
                            <div>
                                <label class="radio">
                                    <input type="radio" name="platform">
                                    <span>PSN</span>
                                </label>
                            </div>
                            <div>
                                <label class="radio">
                                    <input type="radio" name="platform">
                                    <span>Origin</span>
                                </label>
                            </div>
                            <div>
                                <label class="radio">
                                    <input type="radio" name="platform">
                                    <span>Steam</span>
                                </label>
                            </div>
                            <div>
                                <label class="radio">
                                    <input type="radio" name="platform">
                                    <span>Uplay</span>
                                </label>
                            </div>
                            <div style="margin-bottom: 20px">
                                <label class="radio">
                                    <input type="radio" name="platform">
                                    <span>Battlenet</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
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

            </div>


            <div class="row" style="margin-top: 20px;margin-bottom: 25px;">
                <div class="col-lg-3">
                    <div class="Categories-filters">
                        <h3 class="categories-radio-title">Type</h3>
                        <div style="max-height:250px">
                            <div>
                                <label class="radio">
                                    <input type="radio" name="platform" value checked>
                                    <i></i>
                                    <span>All</span>
                                </label>
                            </div>

                            <div>
                                <label class="radio">
                                    <input type="radio" name="platform">
                                    <span>Recently Released</span>
                                </label>
                            </div>
                            <div>
                                <label class="radio">
                                    <input type="radio" name="platform">
                                    <span>Pre-Orders</span>
                                </label>
                            </div>
                            <div style="margin-bottom: 20px">
                                <label class="radio">
                                    <input type="radio" name="platform">
                                    <span>Dlc</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
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

            </div>



        </div>
    </div>


    <div class="footer"></div>
</body>


</html>
