<!doctype html>
<html>
<?php


            if(isset($_POST['submit']))
            {
                $data_missing = array();

                if(empty($_POST['first_name']))
                {
                 $data_missing[] = 'First Name';
                }
                else
                {
                    $fname  = trim($_POST['fname']);
                }

                if(empty($_POST['lname']))
                {
                 $data_missing[] = 'Last Name';
                }
                else
                {
                    $lname  = trim($_POST['lname']);
                }

                if(empty($_POST['email']))
                {
                 $data_missing[] = 'email';
                }
                else
                {
                   $email  = trim($_POST['email']);
                }

                if(empty($_POST['password']))
                {
                 $data_missing[] = 'password';
                }
                else
                {
                   $password = trim($_POST['password']);
                }

                if(empty($data_missing))
                {

                    require_once('mysqli_connect.php');

                    $query ="INSERT INTO user(fname,lname,mail,password) VALUES(,,,)";

                    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)OR die('Could not connect to mysql '.mysqli_connect_error());

                    $stmt = mysqli_prepare($dbc, $query);


                    mysqli_stmt_bind_param($fname,$lname,$email,$password);

                    mysqli_stmt_execute($stmt);

                    $affected_rows = mysqli_stmt_affected_rows($stmt);

                    if($affected_rows == 1)
                    {
                        echo 'User Data Entered';

                        mysqli_stmt_close($stmt);

                        mysqli_close($dbc);
                    }

                    else
                    {
                        echo 'Error Occurredbr ';
                        echo mysqli_error();
                        mysqli_stmt_close($stmt);
                        mysqli_close($dbc);
                    }
                }
                else
                {
                    echo 'You need to enter the following databr ';

                    foreach($data_missing as $missing)
                    {
                        echo $missingbr ;
                    }
                }
            }
             ?>

<head>
    <title>signup-Hanafy Game Store </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="js/valid.js"></script>
    <link rel="stylesheet" href="css/login-sginup.css" type="text/css">
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

    <div class="main">
        <div class="row">
            <div class="col-lg-6 ">
                <a href="#" class="button facebook"><i class="fa fa-facebook padding-logo"></i>SignUp with Facebook</a>
            </div>
            <div class="col-lg-6 ">
                <a href="#" class="button twitter"><i class="fa fa-twitter padding-logo"></i>SignUp with Twitter</a>
            </div>
        </div>

        <h2>Or SignUp with</h2>
        <form name="signup" onsubmit="return validateup();" method="post" action="signAdd.php">
            <div class="lable">
                <div class="col_1_of_2 span_1_of_2"> <input name="fname" type="text" class="text" placeholder="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"></div>
                <div class="col_1_of_2 span_1_of_2"><input name="lname" type="text" class="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></div>
                <div class="clear"> </div>
            </div>
            Email
            <div class="lable-2">

                <input type="text" name="email" class="text" placeholder="your@email.com " onfocus="this.value = '';">
                <br> Password
                <input type="password" class="text" name="pass" placeholder="Password " onfocus="this.value = '';">

            </div>
            Confirm Password
            <input type="password" class="text" placeholder="Password " onfocus="this.value = '';">
            <br>
            
            <h2>already have an account ?<a href="login.html">login</a></h2>
            <div class="submit">
                <input type="submit" onclick="" name="submit" value="Create account">
            </div>
            
            
            <div class="clear"> </div>
        </form>
        <br><br>
    </div>



    <!-- footer -->
    <div class="footer"></div>
</body>




</html>
