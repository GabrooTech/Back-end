<?php 
    //connection to database
    $connection = mysqli_connect('localhost', 'Admin', 'jGVA]NWtS39LUgHZ', 'techshop');
    //checking conncetion and acting on false statment
    if(!$connection){
        echo 'Connection error:' . mysqli_connect_error();
    } else {
        // echo 'Connection is valid';
    }
?>