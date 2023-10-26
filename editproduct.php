<?php
    include('db_connect.php');
    session_start();
    $id = $_SESSION["id"];
    $result = mysqli_query($connection, "SELECT * FROM registration WHERE id = $id");
    $row = mysqli_fetch_array($result);
    if($row["userType"] != 'admin'){
        header('Location: mainpage.php');
    }
    $main_img = $product_name = $product_price = $link_word = $off_price = $final_price = $dominant_color =
    $second_img = $third_img = $fourth_img = $fifth_img = $product_description = $time = '';
    $id_product_result = $_GET['editproduct'];
    $result = mysqli_query($connection, "SELECT * FROM products WHERE product_id = $id_product_result");
    $product_row = mysqli_fetch_array($result);
    $main_img = $product_row['main_photo'];
    $product_name = $product_row['product_name'];
    $product_price = $product_row['product_price'];
    $link_word = $product_row['link_word'];
    $off_price = $product_row['off_price'];
    $final_price = $product_row['final_price'];
    $dominant_color = $product_row['dominant_color'];
    $second_img = $product_row['second_img'];
    $third_img = $product_row['third_img'];
    $fourth_img = $product_row['fourth_img'];
    $fifth_img = $product_row['fifth_img'];
    $product_description = $product_row['product_description'];
    $time = $product_row['time'];
        if(isset($_POST['submit'])){
            // $test = 'main_photo';
            if($_POST['main_photo'] != $main_img && $_POST['main_photo'] != ""){
                $main_img = $_POST['main_photo'];
            }
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $link_word = $_POST['link_word'];
            $off_price = $_POST['off_price'];
            $final_price = $_POST['final_price'];
            $dominant_color = $_POST['dominant_color'];
            if($_POST['second_img'] != $second_img && $_POST['second_img'] != ""){
                $second_img = $_POST['second_img'];
            }
            if($_POST['third_img'] != $third_img && $_POST['third_img'] != ""){
                $third_img = $_POST['third_img'];
            }
            if($_POST['fourth_img'] != $fourth_img && $_POST['fourth_img'] != ""){
                $fourth_img = $_POST['fourth_img'];
            }
            if($_POST['fifth_img'] != $fifth_img && $_POST['fifth_img'] != ""){
                $fifth_img = $_POST['fifth_img'];
            }
            $product_description = $_POST['product_description'];
            $time = $_POST['time'];
            $sql = "UPDATE products SET main_photo='$main_img', product_name='$product_name', product_price='$product_price', link_word='$link_word', 
            off_price='$off_price', final_price='$final_price', dominant_color='$dominant_color', second_img='$second_img', third_img='$third_img', 
            fourth_img='$fourth_img', fifth_img='$fifth_img', product_description='$product_description'
            WHERE product_id=$id_product_result";
            $result_add_product = mysqli_query($connection, $sql);
            // save to db and check
            if($result_add_product){
                //succes
                header('Location: dashboard.php#outsoucrce_linker');
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
    <?php
    include('head.php');
    include('aside.php');
    ?>
    <div class="user_crud_container">
        <form method="POST">
            <div class="edit_product_container">
                <div class="edit_product_container_imgs_container">
                <h3 class="add_product_edit_entering_sentence">Edit product enviromant</h3>
                    <div class="edit_product_container_maing_img">
                        <h3>
                            <option class="add_product_main_img_upload_box" id="drop_box" onclick="upload()" 
                            style="background-image: url(img/<?php echo htmlspecialchars($main_img)?>)"></option>
                            <input type="file" class="img_input" id="input_file" name="main_photo" hidden>
                        </h3>
                    </div>
                    <div class="edit_product_container_secondary_img_grid add_product_edit_secondary_grid">
                        <div class="edit_product_container_secondary_img_grid_inner_box add_productedi_secondary_inner_grid">
                            <option class="add_product_main_img_upload_box add_product_additional_img_upload_box add_product_edit_secondary_img_fix" id="drop_box_second" onclick="uploadSecond()"
                            value="<?php echo htmlspecialchars($second_img)?>" style="background-image: url(img/<?php echo htmlspecialchars($second_img)?>)"></option>
                            <input type="file" class="img_input" id="input_file_second" name="second_img" hidden>
                        </div>
                        <div class="edit_product_container_secondary_img_grid_inner_box add_productedi_secondary_inner_grid">
                            <option class="add_product_main_img_upload_box add_product_additional_img_upload_box add_product_edit_secondary_img_fix" id="drop_box_third" onclick="uploadThird()"
                            value="<?php echo htmlspecialchars($third_img)?>" style="background-image: url(img/<?php echo htmlspecialchars($third_img)?>)"></option>
                            <input type="file" class="img_input" id="input_file_third" name="third_img" hidden>
                        </div>
                        <div class="edit_product_container_secondary_img_grid_inner_box add_productedi_secondary_inner_grid">
                            <option class="add_product_main_img_upload_box add_product_additional_img_upload_box add_product_edit_secondary_img_fix" id="drop_box_forth" onclick="uploadForth()"
                            value="<?php echo htmlspecialchars($fourth_img)?>" style="background-image: url(img/<?php echo htmlspecialchars($fourth_img)?>)"></option>
                            <input type="file" class="img_input" id="input_file_forth" name="fourth_img" hidden>
                        </div>
                        <div class="edit_product_container_secondary_img_grid_inner_box add_productedi_secondary_inner_grid">
                            <option class="add_product_main_img_upload_box add_product_additional_img_upload_box add_product_edit_secondary_img_fix" id="drop_box_fifth" onclick="uploadFifth()"
                            value="<?php echo htmlspecialchars($fifth_img)?>" style="background-image: url(img/<?php echo htmlspecialchars($fifth_img)?>)"></option>
                            <input type="file" class="img_input" id="input_file_fifth" name="fifth_img" hidden>
                        </div>
                    </div>
                    <h3 class="add_product_edit_second_part_start">Additional information</h3>
                    <div class="add_product_edit_second_part">
                        <div>
                            <label for="username" class="add_product_edit_second_part_label_field">Product Name</label>
                            <input type="text" name="product_name" class="add_product_edit_second_part_input_field" value="<?php echo htmlspecialchars($product_name)?>">
                        </div>
                        <div>
                            <label for="username" class="add_product_edit_second_part_label_field">Price</label>
                            <input type="text" name="product_price" class="add_product_edit_second_part_input_field js_price" onchange="changePirce()" value="<?php echo htmlspecialchars($product_price)?>">
                        </div>
                        <div>
                            <label for="username" class="add_product_edit_second_part_label_field">off price</label>
                            <input type="text" name="off_price" class="add_product_edit_second_part_input_field js_off_price" onchange="changeOffPirce()" value="<?php echo htmlspecialchars($off_price)?>">
                        </div>
                        <div>
                            <label for="username" class="add_product_edit_second_part_label_field">final price</label>
                            <input type="text" name="final_price" class="add_product_edit_second_part_input_field js_price_output"><?php echo `<div>$final_price</div>`?>
                        </div>
                        <div>
                            <label for="username" class="add_product_edit_second_part_label_field">link word</label>
                            <input type="text" name="link_word" class="add_product_edit_second_part_input_field" value="<?php echo htmlspecialchars($link_word)?>">
                        </div>
                        <div>
                            <label for="username" class="add_product_edit_second_part_label_field">dominant_color</label>
                            <input type="text" name="dominant_color" id="dominant_color_output" class="add_product_edit_second_part_input_field" value="<?php echo htmlspecialchars($dominant_color) ?>">
                        </div>
                    </div>
                    <div class="add_product_edit_description_box">
                        <textarea name="description" id="description" class="add_product_input_textarea" placeholder="Please enter description of product"><?php echo htmlspecialchars($product_description)?></textarea>
                    </div>
                    <?php echo '<button class="button_test add_product_edit_submit_button" type="submit" name="submit" value="submit" href="editproduct.php? editproduct='.$id_product_result.'">
                      Update
                    </button>'
                    ?>
                    <div class="edit_product_date"><?php echo htmlspecialchars($time)?></div>
                </div>
            </div>
            <canvas id="preview" style="display: none;"></canvas>
            <canvas id="canvas" style="display: none;"></canvas>
        </form>
        <div>
            <p class="disclaimer">This Page is visible only for Main Admin. Any restriction is forbiddened</p>
        </div>
    </div>
    
    <script src="edit_product.js"></script>
    <script src="dominantColor.js"></script>
    <?php
    include('footer.php'); 
    ?>
</html>