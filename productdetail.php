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
            $(".footer").load("footer.php");

        });

    </script>
</head>

<body>
    <div class="header"></div>
    <div id="content">
        <div id="wrapper">
            <?php require_once('/mysqli_connect.php');
            $query ="SELECT * FROM `product`" ;
            if(!empty($_GET['id'])) {
                $query ="SELECT * FROM `product` WHERE id= '".(int)$_GET['id']."' " ;

            }


            $res =@mysqli_query($dbc,$query);
            if($res){
                while($row = mysqli_fetch_array($res)){?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="product_title"><?php echo $row['name'] ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="Product_preview">
                        <div class="Product_preview_holder">
                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="GTA V">' ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_details">
                        <div class="product_price">
                            <p class="product-label">
                                <span>price
                                </span>
                            </p>
                            <span class="price" style="font-size: 44px"><?php echo $row['price'] ?>
                                    <sub class="price_Currency" style="font-size: 30px">EGP</sub>
                                </span>
                        </div>
                        <div class="Sellers">
                            <button class="btn btn-link">
                            <span>Insted of : 28, lowest price:</span>
                            <span class="price" style="font-size: 14px"><?php echo $row['price']+50 ?>
                                <sub class="price_Currency" style="font-size: 10px">EGP</sub>
                            </span>
                        </button>
                        </div>

                        <div style="width: 470px;height: 42px;margin-left: 30%">
                            <button class="btn btn-success btn-block" data-loading="false">
                            <span class="btn-lable">Add to Cart</span>
                        </button>
                        </div>
                        <div style="width: 470px;height: 42px;margin-left: 30%">
                            <button class="btn btn-warning btn-block" style="margin-top: 2%;" data-loading="false">
                                <span class="btn-lable">Check out</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>



            <?php }

            }


            ?>


        </div>
    </div>









    <div class="footer"></div>
</body>





</html>
<!--sdfa->
<div class="product_details">
        <div class="product_details_container">
            <div style="width:472px;height:476px;">
                <div class="product_price">
                    <p class="product-label">
                        <span>price
                    </span>
                    </p>

                </div>
            </div>
        </div>
    </div>
    <-->
