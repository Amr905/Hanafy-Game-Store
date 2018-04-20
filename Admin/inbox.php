<!doctype html>
<html>



<head>
    <title>Admin-Inbox</title>
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
    <!--upgrade of font awsome v5 -->

</head>

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
                            <h4>Inbox</h4>
                        </div>

                        <div class="col-lg-3  message-height">
                            <a href="index.php" class="logout">logout</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-8 offwhite">
                <?php
require_once('../mysqli_connect.php');
$query ="SELECT * FROM `mail`";

$res =@mysqli_query($dbc,$query);
if($res){
while($row = mysqli_fetch_array($res))
{
    echo '<strong>from:</strong> '.
   $row['name'].'<br>  <strong>mail:</strong> '.
   $row['mail'].'<br><strong> message: </strong>'.
   $row['message'];

    echo '<hr>';
}

}
else {
    echo "Couldnt open";
    echo mysqli_error($dbc);
}

?>
            </div>
            <div id="footer"></div>
        </div>

    </div>

</body>




</html>
