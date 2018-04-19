<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HGS ADMIN</title>
    <script src="../js/valid.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <!-- Main Container -->
    <div class="container">
        <!-- Navigation -->
        <header>
            <h1 class="logo">HGS ADMIN area </h1>
        </header>
        <!-- Body-->
        <script>
            $(document).ready(function() {
                $(".login").hover(function() {
                    $("#login-hide").fadeIn();
                });
            });

        </script>
        <div class="login">
            <div class="login-triangle"></div>
            <h2 class="login-header">ADMIN Log in</h2>
            
            <div id="login-hide">
           
                <form name="signin" class="login-container" action="checkadmin.php" method="post">

                <h6 style="color:red; display:true">
            <?php if(isset($_GET['error']))
            echo 'Incorrect Privilege level';?></h6>  

                    <p class="icon"><input type="text" name="email" placeholder="&#xf007; Email"></p>
                    <p class="icon"><input type="password" name="pass" placeholder="&#xf084; Password"></p>
                    <p><input type="submit" name="submit" value="Log in"></p>
                </form>
            </div>
            <!-- Copyrights Section -->
            <div class="copyright">&copy;2018 - <strong>Hanafy game store </strong></div>
        </div>
    </div>


</body>

</html>
