<!doctype html>
<html>


<head>
    <title>Admin-Products</title>
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
                            <h4>Prouducts </h4>
                        </div>

                        <div class="col-lg-3  message-height">
                            <a href="index.php" class="logout">logout</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-8 offwhite">
                <form id="product-form" action="adminOperations.php" method="post" enctype="multipart/form-data">
                    <h4>Prouducts Mangements</h4>
                      
                    <h5 style="color:Green"><?php if(isset($_GET['Insuc'])){echo 'Product inserted';} 
                                                  else if(isset($_GET['Upsuc'])){echo 'Product Updated';}
                                                   else if(isset($_GET['Delsuc'])){echo 'Product Deleted';}?></h5>

                    <fieldset>
                        prodcuct ID : <input placeholder="product ID" name="productid" type="number" autofocus>
                    </fieldset>
                    <fieldset>
                        prodcuct name : <input placeholder="product Name" name="productname" type="text">
                    </fieldset>
                    <fieldset>
                        Serial number : <input placeholder="serial number" name="serialnum" type="number">
                    </fieldset>
                    <fieldset>
                        Price : <input placeholder="EGP" name="price" type="number">
                    </fieldset>
                    <fieldset>
                        img : <input type="file" name="img">
                    </fieldset>

                    <fieldset>

                        Genre :
                        <select name="Genre" style="margin-bottom:2%">
                                <option name="Action" value="Action" >Action</option>
                                <option name="FPS" value="FPS"selected>FPS</option>
                                <option name="Horror" value="Horror">Horror</option>
                          </select>
                    </fieldset>
                    <fieldset>
                        Operations :
                        <select name="status" style="margin-bottom:2%">
                                <option name="update" value="update" >update</option>
                                <option name="insert" value="insert"selected>insert</option>
                                <option name="delete" value="delete">delete</option>
                          </select>
                    </fieldset>

                    <fieldset>
                        <button name="submit" type="submit" id="submit" style="margin-bottom:2%">Submit</button>
                    </fieldset>
                </form>
            </div>
            <div id="footer"></div>
        </div>

    </div>

</body>




</html>
