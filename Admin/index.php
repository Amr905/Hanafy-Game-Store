<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HGS ADMIN</title>
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
                <form class="login-container" action="main.php">
                    <p class="icon"><input type="text" placeholder="&#xf007; User Name"></p>
                    <p class="icon"><input type="password" placeholder="&#xf084; Password"></p>
                    <p><input type="submit" value="Log in"></p>
                </form>
            </div>
            <!-- Copyrights Section -->
            <div class="copyright">&copy;2018 - <strong>Hanafy game store </strong></div>
        </div>
    </div>


</body>

</html>
