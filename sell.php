<!doctype html>
<html>


<head>
    <title>HGS-sell</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/sell.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script>
        $(document).ready(function(e) {
            $(".header").load("header.php");
            $(".footer").load("footer.html");

        });

        function validateserial() {
            var ser = document.forms["product"]["serialnum"].value;

            var Serial = /^\d{4}-\d{4}-\d{4}-\d{4}$/;

            if (!ser.match(Serial)) {

                alert("serial Invalid");
            }

        }

    </script>
</head>

<body>

    <div class="header"></div>
    <div id="content">
        <div id="wrapper">
            <div class="row">
                <div class="col-lg-9 main-container ">
                    <h4>Current selling items</h4>
                    <p>&nbsp;you currntly have no item in selling section , start selling now</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 main-container">
                    <form name="product" onsubmit="return validateserial();" id="product-form" action="#">
                        <h4>Prouducts Mangements</h4>

                        <fieldset>
                            prodcuct ID : <input placeholder="product ID" name="productid" type="number" autofocus>
                        </fieldset>
                        <fieldset>
                            prodcuct name : <input placeholder="product Name" name="productname" type="text" required>
                        </fieldset>
                        <fieldset>
                            Serial number : <input placeholder="serial number" name="serialnum" type="text" required>
                        </fieldset>
                        <fieldset>
                            Price : <input placeholder="EGP" name="price" type="number" required>
                        </fieldset>
                        <fieldset>
                            Status:
                            <select name="status">
                                <option value="update">update</option>
                                <option value="insert" selected>insert</option>
                                <option value="delete">delete</option>
                          </select>
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit" id="submit">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>


    </div>



    <div class="footer"></div>
</body>




</html>
