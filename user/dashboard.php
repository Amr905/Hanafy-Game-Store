<!doctype html>
<html>


<head>
    <title>HGS Dashboard</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/user.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(e) {
            $(".header").load("/header.php");
            $(".footer").load("/footer.html");

        });
    </script>

</head>

<body>
    <div class="header">
    </div>
    <div id="content">
        <div id="wrapper">
            <div class="row">
                <div class="col-4 nav">
                    <div class="da">
                        <h3>My Account:</h3>
                    </div>
                    <ul class="user-list">
                        <li><a href="/user/dashboard.php">Dashboard</a></li>
                        <li><a href="/user/edit.php">Edit Profile</a></li>
                        <li><a href="/sell.php">Sell My Games</a></li>


                    </ul>



                </div>
                <div class="col-8">
                    <h3>Account Dashboard:</h3>
                    <hr>
                    <div class="row">
                        <div class="col user-box">
                            <h5><i class="fa fa-user"></i>Account Information:</h5>
                            <hr>
                            <div><i class="fa fa-user"></i>Abdelrhman Zakaria</div>
                            <div id="user-email"><i class="fa fa-envelope"></i>bido8597@gmail.com</div>
                            <div class="box-edit"><a href="#"><i class="fa fa-edit">Edit</i></a></div>
                        </div>
                        <div class="col user-box">
                            <h5><i class="fa fa-address-book"></i> Address Book</h5>
                            <hr>
                            <div><i class="fa fa-user"></i>Abdelrhman Zakaria</div>
                            <div id="user-address"><i class="fa fa-address-book"></i>83B Tomanbay st. 808</div>
                            <div id="user-mobile"><i class="fa fa-mobile"></i>01206782745</div>
                            <div class="box-edit"><a href="#"><i class="fa fa-edit">Edit</i></a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- footer -->
    <div class="footer"></div>
</body>



</html>
