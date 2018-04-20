<?php
session_start();

?>
<!doctype html>
<html>

<?php

            if(isset($_POST['checkout']))
            {

                 require_once('/mysqli_connect.php');


                       if(isset($_SESSION['id'])){


$query ="SELECT product.id, product.price,product.image FROM `cart` INNER join product ON cart.product_id=product.id WHERE user_id=".$_SESSION['id'].'' ;

$res =@mysqli_query($dbc,$query);
if($res){
    $query3 ="SELECT COUNT(id) As 'number' FROM `order` ";

$res2 =@mysqli_query($dbc,$query3);
if($res2){
while($row2 = mysqli_fetch_array($res2))
$id= $row2['number'];

}

else {
    echo "Couldnt open";
    echo mysqli_error($dbc);
}
while($row = mysqli_fetch_array($res)){
$row['price'];
 $query2 ="INSERT INTO hgs.order(user_id,product_id,price) VALUES(?,?,?)";

                    $stmt = mysqli_prepare($dbc, $query2);

                    mysqli_stmt_bind_param($stmt,"iii",$_SESSION['id'],$row['id'],$row['price']);

                    mysqli_stmt_execute($stmt);

                    $affected_rows = mysqli_stmt_affected_rows($stmt);


}



    $query4 ="DELETE FROM `cart` WHERE `cart`.`user_id` =".$_SESSION['id']."";
    //mysql_query( $query4 );
    $res=@mysqli_query($dbc,$query4);
     if($affected_rows == 1)
                    {


                        mysqli_stmt_close($stmt);

                        mysqli_close($dbc);
                    }

                    else
                    {
                        die(mysqli_connect_error());
                        echo mysqli_error();
                        mysqli_stmt_close($stmt);
                        mysqli_close($dbc);
                    }
}
else {
    echo "Couldnt open";
    echo mysqli_error($dbc);
}


                }
                else echo'you must sign in to checkout' ;

            }

    ?>

    <head>
        <title>HGS-confirmation order</title>
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <link rel="stylesheet" href="css/confirm.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script>
            $(document).ready(function(e) {
                $(".header").load("header.php");
                $(".footer").load("footer.html");

            });

        </script>

    </head>

    <body>

        <div class="header"></div>
        <div id="content">
            <div id="wrapper">

                <div class="order">
                    <i class="fa fa-check-circle "></i>
                    <br>
                    <h3> Order Successfully Placed</h3>
                    <hr>
                    <h4 style="">your order number is :

                        <?php echo $id+1;
                        /*
//require_once('/mysqli_connect.php');
$query3 ="SELECT COUNT(id) As 'number' FROM `order` ";

$res2 =@mysqli_query($dbc,$query3);
if($res2){
while($row2 = mysqli_fetch_array($res2))
echo $row2['number'];

}

else {
    echo "Couldnt open";
    echo mysqli_error($dbc);
}
*/
?>
                    </h4>
                </div>

            </div>


        </div>



        <div class="footer"></div>

    </body>

</html>
