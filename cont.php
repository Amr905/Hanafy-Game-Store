<?php
            
            if(isset($_POST['submit']))
            {          
                
                
                
                    $fullname  = trim($_POST['fullname']);
                    $mail  = trim($_POST['email']);
                    $message  = trim($_POST['message']);
                    
                    require_once('/mysqli_connect.php');

                    $query ="INSERT INTO hgs.mail(name,mail,message) VALUES(?,?,?)";

                    $stmt = mysqli_prepare($dbc, $query);

                    mysqli_stmt_bind_param($stmt,"sss",$fullname,$mail,$message);

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
                        die(mysqli_connect_error());
                        echo mysqli_error();
                        mysqli_stmt_close($stmt);
                        mysqli_close($dbc);
                    }
                }
                
            ?>