<?php
require_once('../mysqli_connect.php');


if(isset($_POST['submit']))
{
    //Product Values
    $product_id=trim($_POST['productid']);
    $product_name=trim($_POST['productname']);
    $product_serial=trim($_POST['serialnum']);
    $product_price=trim($_POST['price']);
    $operation_type=trim($_POST['status']);
    $Genre_type=trim($_POST['Genre']);
    
    //Product insert Condtion
    if($operation_type=='insert')
    {
        
       $product_id="";
        //InsertQuery
       $query="INSERT INTO hgs.product(id,name,genre,price,serial) VALUES (?,?,?,?,?)";
       $stmt=mysqli_prepare($dbc,$query);
       //Binding Product values to InseryQuery
       mysqli_stmt_bind_param($stmt,"issis",$product_id,$product_name,$Genre_type,$product_price,$product_serial);
       mysqli_stmt_execute($stmt);
       //checking Affected rows to check the query succsess
       $affected_rows = mysqli_stmt_affected_rows($stmt);
       //Redirecting the Admin to the product page
       if($affected_rows == 1){
        header("location:products.php?Insuc=1");
        echo 'Product Entered';
        mysqli_stmt_close($stmt);
        //closing Database Connection 
        mysqli_close($dbc);
        }
    }
     //Product Update Condtion
    else if ($operation_type=='update')
    {
        //Update Query
        $query="UPDATE hgs.product SET name='".$product_name."',genre='".$Genre_type."',price='".$product_price."',serial='".$product_serial."' WHERE id=".$product_id;
        //Executing Query 
        $res= mysqli_query($dbc,$query);
        //checking Query succsess
        if($res){
        echo "product:".$product_name;
        header("location:products.php?Upsuc=1");
        echo "Record updated successfully";
        }
        else{
            echo 'error'.mysqli_error_list();
        }
        //closing Database Connection
        mysqli_close($dbc);
    }

    //Product Delete
    else if ($operation_type=='delete')
    {
        //Query to Check if the product in Order Table
        $query2="SELECT Count(product_id) AS 'Num' FROM hgs.order WHERE product_id=".$product_id;
        //Executing First Checking Query 
        $res2=mysqli_query($dbc,$query2);
        $row=mysqli_fetch_array($res2);
        //If Product doesnt exist in Order table, Delete The product 
        if($row[0]==0){
            //Delete query
            $deletequery="DELETE FROM hgs.product WHERE id=".$product_id;
            //Executing Delete query
            mysqli_query($dbc,$deletequery);
            //Checking the query succsess
            if($res2){
                header("location:products.php?Delsuc=1");
                echo "Record Deleted";
               }
               else{
                   echo 'error'.mysqli_error_list();
               }
        }
        //If product exist in Order Table,Reassign out of stock var 
        else{
            //Update Query
            $query="UPDATE hgs.product SET out_of_stock=1 WHERE id=".$product_id;
            //Executing Update Query
            $res= mysqli_query($dbc,$query);
            //Check query succsess
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