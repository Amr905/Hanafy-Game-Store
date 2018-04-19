<?php
require_once('../mysqli_connect.php');


if(isset($_POST['submit']))
{
    $product_id=trim($_POST['productid']);
    $product_name=trim($_POST['productname']);
    $product_serial=trim($_POST['serialnum']);
    $product_price=trim($_POST['price']);
    $operation_type=trim($_POST['status']);
    $Genre_type=trim($_POST['Genre']);
    if($operation_type=='insert')
    {
        $product_id="";
       $query="INSERT INTO hgs.product(id,name,genre,price,serial) VALUES (?,?,?,?,?)";
       $stmt=mysqli_prepare($dbc,$query);
       
       mysqli_stmt_bind_param($stmt,"issis",$product_id,$product_name,$Genre_type,$product_price,$product_serial);
       mysqli_stmt_execute($stmt);
       $affected_rows = mysqli_stmt_affected_rows($stmt);
       if($affected_rows == 1){
        echo 'Student Entered';
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);
        }
    }
    else if ($operation_type=='update')
    {
        $query="UPDATE hgs.product SET name='".$product_name."',genre='".$Genre_type."',price='".$product_price."',serial='".$product_serial."' WHERE id=".$product_id;
       $res= mysqli_query($dbc,$query);
       if($res){
           echo "product:".$product_name;
        echo "Record updated successfully";
       }
       else{
           echo 'error'.mysqli_error_list();
       }
       mysqli_close($dbc);
    }
    else if ($operation_type=='delete')
    {
        $query= "DELETE FROM hgs.product WHERE id=".$product_id;
        $res= mysqli_query($dbc,$query);
        if($res){
         echo "Record Deleted successfully";
        }
        else{
            echo 'error'.mysqli_error_list();
        }
        mysqli_close($dbc);
    }
}
?>