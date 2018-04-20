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
        header("location:products.php?Insuc=1");
        echo 'Product Entered';
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
        header("location:products.php?Upsuc=1");
        echo "Record updated successfully";
       }
       else{
           echo 'error'.mysqli_error_list();
       }
       mysqli_close($dbc);
    }
    else if ($operation_type=='delete')
    {
        $query2="SELECT Count(product_id) AS 'Num' FROM hgs.order WHERE product_id=".$product_id;
        $res2=mysqli_query($dbc,$query2);
        $row=mysqli_fetch_array($res2);
        if($row[0]==0){
            $deletequery="DELETE FROM hgs.product WHERE id=".$product_id;
            mysqli_query($dbc,$deletequery);
            if($res2){
                header("location:products.php?Delsuc=1");
                echo "Record Deleted";
               }
               else{
                   echo 'error'.mysqli_error_list();
               }
        }
        else{
            $query="UPDATE hgs.product SET out_of_stock=1 WHERE id=".$product_id;
            $res= mysqli_query($dbc,$query);
            if($res){
                header("location:products.php?Delsuc=1");
                echo "Record Deleted successfully";
               }
               else{
                   echo 'error'.mysqli_error_list();
               }
        }
       
        mysqli_close($dbc);
    }
}
?>