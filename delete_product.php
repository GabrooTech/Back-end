<?php 
    include('db_connect.php');
    session_start();
    $id = $_SESSION["id"];
    $result = mysqli_query($connection, "SELECT * FROM registration WHERE id = $id");
    $row = mysqli_fetch_array($result);
    if($row["userType"] != 'admin'){
        header('Location: mainpage.php');
    }
    if(isset($_GET['deleteproductid'])){
        $product_id = $_GET['deleteproductid'];
        $result_support_id = mysqli_query($connection, "DELETE FROM products WHERE product_id = $product_id");
        if($result_support_id){
            header('Location: dashboard.php#product_source_linker');
        }else{
            "Somthing went wrong!";
        }
    }
?>