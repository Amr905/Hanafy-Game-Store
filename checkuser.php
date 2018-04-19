<?php
session_start();
?>
<?php
require_once('/mysqli_connect.php');


$SignupErr="";
$query ="SELECT * FROM `user` WHERE `mail` LIKE '".$_POST['email']."' AND `password` LIKE '".$_POST['pass']."'";

$res=@mysqli_query($dbc,$query);
if(isset($_POST['submit'])){
if($res){

    $My_mail=trim($_POST['email']);
    $My_pass=trim($_POST['pass']);
    $row = mysqli_fetch_array($res);
    if($row['mail']==$My_mail&&$row['password']==$My_pass)
    {
        $_SESSION['Fn']=$row['fname'];
        //echo '<p>Email:'.$row['mail'].'<br></p>';
        header("location:Home.php");
        exit;   
    }
    else {
       
        $SignupErr="Incorrect Email or password";
        header("location:login.php?error=1");
        
      
    }
}
}
?>