<?php 
    include('db_connect.php');
    session_start();
    $id = $_SESSION["id"];
    $result = mysqli_query($connection, "SELECT * FROM registration WHERE id = $id");
    $row = mysqli_fetch_array($result);
    if($row["userType"] != 'admin'){
        header('Location: mainpage.php');
    }
    if(isset($_GET['deleteid'])){
        $idcrud = $_GET['deleteid'];
        $result = mysqli_query($connection, "DELETE FROM registration WHERE id = $idcrud");
        if($result){
            header('Location: dashboard.php#outsoucrce_linker');
        }else{
            "Somthing went wrong!";
        }
    }
?>