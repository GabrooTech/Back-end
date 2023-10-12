<?php 
    include('db_connect.php');
    session_start();
    $id = $_SESSION["id"];
    $result = mysqli_query($connection, "SELECT * FROM registration WHERE id = $id");
    $row = mysqli_fetch_array($result);
    if($row["userType"] != 'admin'){
        header('Location: mainpage.php');
    }
    if(isset($_GET['deletesupportid'])){
        $ticketid = $_GET['deletesupportid'];
        $result_support_id = mysqli_query($connection, "DELETE FROM support WHERE ticket_id = $ticketid");
        if($result_support_id){
            header('Location: dashboard.php#ticketsource_linker');
        }else{
            "Somthing went wrong!";
        }
    }
?>