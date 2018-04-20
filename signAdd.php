<?php
            
            if(isset($_POST['submit']))
            {          
                $data_missing = array();
                
                if(empty($_POST['fname']))
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
                
                if(empty($_POST['pass']))
                {
                 $data_missing[] = 'password';   
                }
                else
                {
                   $password = trim($_POST['pass']);
                }   
                
                if(empty($data_missing))
                {
                    
                    require_once('/mysqli_connect.php');

                    $query ="INSERT INTO hgs.user(fname,lname,mail,password,level) VALUES(?,?,?,?,?)";

                    $stmt = mysqli_prepare($dbc, $query);
                    $i=1;

                    mysqli_stmt_bind_param($stmt,"ssssi",$fname,$lname,$email,$password,$i);

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
                
            }?>