<!doctype html>
<html>


<head>
    <title>HGS-contact us</title>
    <meta charset="utf-8">


    <link rel="stylesheet" href="css/styles.css" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script>
        $(document).ready(function(e) {
            $(".header").load("header.html");
            $(".footer").load("footer.html");

        });
    </script>
</head>

<body>
    <div class="header"></div>
    <!-- start contact -->
    <div id="contact">


        <div id="content">
            <div id="wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT <span>US</span></h2>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
                        <form action="cont.php" method="post">
                            <label>NAME</label>
                            <input name="fullname" type="text" class="form-control" id="fullname">

                            <label>EMAIL</label>
                            <input name="email" type="email" class="form-control" id="email">

                            <label>MESSAGE</label>
                            <textarea name="message" rows="4" class="form-control" id="message"></textarea>

                            <input type="submit" name="submit"  class="form-control">
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
                        <address>
    						<p class="address-title">OUR Information</p>
    						<span>You are welcomed to call our support or just send and e-mail</span>
    						<p><i class="fa fa-phone"></i> +202 26300013 / 14 / 15 / 16 / 17 / 18</p>
    						<p><i class="fa fa-envelope-o"></i> customerSupport@HGS.com</p>

			<br>
    					</address>


                    </div>
                </div>

            </div>
            <br><br><br>
        </div>
    </div>
    <div class="footer"></div>
</body>




</html>
