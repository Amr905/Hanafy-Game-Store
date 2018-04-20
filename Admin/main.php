<?php
session_start(); 
?>
    <!doctype html>
    <html>



    <head>
        <title>Admin-Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/main.css" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script>
            $(document).ready(function(e) {
                $("#header").load("includes/header.html");
                $("#footer").load("includes/footer.html");

            });

        </script>


    </head>
    <?php
require_once('../mysqli_connect.php');
    ?>

        <body>

            <div class="row">
                <div class="col-lg-3 front">

                    <div id="header"></div>
                </div>

                <!--right page-->
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-9 bar">
                            <div class="row">
                                <div class="col-lg-7 message-height ">

                                    <h4>
                                        <?php echo 'Welcome Admin: '. $_SESSION['Fname'].' '.$_SESSION['Lname']?>
                                    </h4>

                                </div>
                                <div class="col-lg-1 size">
                                    <a href="inbox.php" class="fa fa-envelope size white"><span class="notification"><?php
                                $query ="SELECT COUNT(id) As 'number' FROM `mail`";

                                $res =@mysqli_query($dbc,$query);
                                if($res){
                                while($row = mysqli_fetch_array($res))
                                    echo $row['number'];

                                }

?></span></a>
                                </div>
                                <div class="col-lg-3  message-height">
                                    <a href="index.php" class="logout">logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--first  row boxes-->
                    <div class="row three-boxes">
                        <div class="col-lg-3">
                            <div class="admin-box blue">
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <h3>Users</h3>
                                <h4>
                                    <?php
                                $query ="SELECT COUNT(id) As 'number' FROM `user` WHERE `level` = 1";

$res =@mysqli_query($dbc,$query);
if($res){
while($row = mysqli_fetch_array($res))
    echo $row['number'];

}

?>
                                </h4>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="admin-box red">
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <h3> sellers</h3>
                                <h4>
                                    <?php
                                $query ="SELECT COUNT(id) As 'number' FROM `user` WHERE `level` = 2";

$res =@mysqli_query($dbc,$query);
if($res){
while($row = mysqli_fetch_array($res))
    echo $row['number'];

}

?>
                                </h4>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="admin-box purple">
                                <div class="icon">
                                    <i class="fa fa-file-alt"></i>
                                </div>
                                <h3>Total Orders</h3>
                                <h4>
                                    <?php
                                $query ="SELECT COUNT(id) As 'number' FROM `order` ";

$res =@mysqli_query($dbc,$query);
if($res){
while($row = mysqli_fetch_array($res))
 echo $row['number'];

}
                                ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!--second row-->

                    <div class="row three-boxes">
                        <div class="col-lg-3">
                            <div class="admin-box green">
                                <div class="icon">
                                    <i class="fa fa-gamepad"></i>
                                </div>
                                <h3>Available prouducts</h3>
                                <h4>
                                    <?php

                                $query ="SELECT COUNT(id) As 'number' FROM `product` ";

$res =@mysqli_query($dbc,$query);
if($res){
while($row = mysqli_fetch_array($res))
echo $row['number'];

}?>
                                </h4>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="admin-box blue">
                                <div class="icon">
                                    <i class="fa fa-file-alt"></i>
                                </div>
                                <h3>waiting orders</h3>
                                <h4>
                                    <?php
                                $query ="SELECT COUNT(id) As 'number' FROM `order` ";

$res =@mysqli_query($dbc,$query);
if($res){
while($row = mysqli_fetch_array($res))
 echo $row['number'];

}
                                ?>
                                </h4>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="admin-box">
                                <div class="icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <h3>Items in cart</h3>
                                <h4>
                                    <?php
                                $query ="SELECT COUNT(id) As 'number' FROM `cart` ";

$res =@mysqli_query($dbc,$query);
if($res){
while($row = mysqli_fetch_array($res))
    echo $row['number'];


}


                                ?>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div id="footer"></div>
                </div>

            </div>

        </body>




    </html>
