<?php
    include('db_connect.php');
    session_start();
    $id = $_SESSION["id"];
    $result = mysqli_query($connection, "SELECT * FROM registration WHERE id = $id");
    $row = mysqli_fetch_array($result);
    if($row["userType"] != 'admin'){
        header('Location: mainpage.php');
    }
    // in case of guest there is no role so we need to asign coockies to make sure all visitors are tracked and checked
?>

<!DOCTYPE html>
<html lang="en">
    <?php
    include('head.php');
    include('aside.php');
    ?>
    <div class="add_product_brake_point_container">
        <h1 class="user_crud_container_intor_text">Choose what kind of product would you like to add</h1>
        <div class="main_list main_list_brake_point">
        <div class="item_1 main_list_item">
            <a href="addproductPC.php" class="pc_image_link"></a>
            <img src="img\pc.webp" alt="Check your internet connection" class="list_img">   
            <div class="main_list_name main_list_name_color_pc main_list_name_brake_point">PC</div> 
        </div>
        <div class="item_2 main_list_item">
            <a href="addproductSR.php"></a>
            <img src="img\servers.webp" alt="Check your internet connection" class="list_img">   
            <div class="main_list_name main_list_name_color_server main_list_name_brake_point">SERVERS</div>
        </div>
        <div class="item_3 main_list_item">
            <a href="addproductAC.php"></a>
            <img src="img\accessories.webp" alt="Check your internet connection" class="list_img">   
            <div class="main_list_name main_list_name_color_accs main_list_name_brake_point">ACCESSORIES</div>
        </div>
        <div class="item_4 main_list_item">
            <a href="addproductOF.php"></a>
            <img src="img\office.webp" alt="Check your internet connection" class="list_img">   
            <div class="main_list_name main_list_name_color_office main_list_name_brake_point">OFFICE</div>
        </div>
        <div class="item_5 main_list_item">
            <a href="addproductSH.php"></a>
            <img src="img\smarthome.webp" alt="Check your internet connection" class="list_img">   
            <div class="main_list_name main_list_name_color_smhome main_list_name_brake_point">SMART HOME</div>
        </div>
        <div class="item_6 main_list_item">
            <a href="addproductMD.php"></a>
            <img src="img\mobile.webp" alt="Check your internet connection" class="list_img">   
            <div class="main_list_name main_list_name_color_md main_list_name_brake_point">MOBILE DEVICE </div>
        </div>
    </div>
    </div>
    
    <?php
    ?>
</html>