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

    $main_photo = $product_name = $product_price = $link_word 
    = $off_price = $final_price = $dominant_color = $second_img
    = $third_img = $fourth_img = $fifth_img = $description = $product_type = '';
    $errors = array('main_photo'=>'', 'product_name'=>'', 'product_price'=>'', 'link_word'=>'', 'off_price'=>'', 'second_img'=>'',
    'third_img'=>'', 'fourth_img'=>'', 'fifth_img'=>'', 'product_description'=>'');
    if(isset($_POST['submit'])){
        // main_photo verification
        if(empty($_POST['main_photo'])){
            $errors['main_photo'] = 'Please select main photo <br />';
            }else{
                $main_photo = $_POST['main_photo'];
        }
        // product name verification
        if(empty($_POST['product_name'])){
            $errors['product_name'] = 'Please input name of product <br />';
        }else{
            $product_name = $_POST['product_name'];
        }
        // price verification
        if(empty($_POST['product_price'])){
            $errors['product_price'] = 'Please input price of product <br />';
        }else{
            $product_price = $_POST['product_price'];
        }
        // link_word verification
        if(empty($_POST['link_word'])){
            $errors['link_word'] = 'Please input 3 key word <br />';
        }else{
            $link_word = $_POST['link_word'];
            if(strlen($link_word) != 3){
                $errors['link_word'] = 'link words must contain 3 word <br />';
            }
        }
        // off_price doesn't need validation
        $off_price = $_POST['off_price'];
        // dominant color
        $dominant_color = $_POST['dominant_color'];
        // second photo verification
        if(empty($_POST['second_img'])){
            $errors['second_img'] = 'Please select second photo <br />';
        }else{
            $second_img = $_POST['second_img'];
        }
        // third photo verification
        if(empty($_POST['third_img'])){
            $errors['third_img'] = 'Please select third photo <br />';
        }else{
            $third_img = $_POST['third_img'];
        }
        // fourth photo verification
        if(empty($_POST['fourth_img'])){
            $errors['fourth_img'] = 'Please select fourth photo <br />';
        }else{
            $fourth_img = $_POST['fourth_img'];
        }
        // fifth photo verification
        if(empty($_POST['fifth_img'])){
            $errors['fifth_img'] = 'Please select fifth photo <br />';
        }else{
            $fifth_img = $_POST['fifth_img'];
        }
        // description verification
        if(empty($_POST['product_description'])){
            $errors['product_description'] = 'Please input description of product <br />';
        }else{
            $description = $_POST['product_description'];
        }  
        // final price
        $final_price = $_POST['final_price'];
        // product type
        $product_type = $_POST['product_type'];
        // send data to bd
        if(array_filter($errors)){
        }else{
            $main_photo = mysqli_escape_string($connection, $_POST['main_photo']);
            $product_name = mysqli_escape_string($connection, $_POST['product_name']);
            $product_price = mysqli_escape_string($connection, $_POST['product_price']);
            $link_word = mysqli_escape_string($connection, $_POST['link_word']);
            $off_price = mysqli_escape_string($connection, $_POST['off_price']);
            $final_price = mysqli_escape_string($connection, $_POST['final_price']);
            $dominant_color = mysqli_escape_string($connection, $_POST['dominant_color']);
            $second_img = mysqli_escape_string($connection, $_POST['second_img']);
            $third_img = mysqli_escape_string($connection, $_POST['third_img']);
            $fourth_img = mysqli_escape_string($connection, $_POST['fourth_img']);
            $fifth_img = mysqli_escape_string($connection, $_POST['fifth_img']);
            $description = mysqli_escape_string($connection, $_POST['product_description']);
            $product_type = mysqli_escape_string($connection, $_POST['product_type']);
            $sql = "INSERT INTO products(main_photo, product_name, product_price, link_word,
            off_price, final_price,  dominant_color, second_img, third_img,
            fourth_img, fifth_img, product_description, product_type) VALUES('$main_photo', '$product_name', '$product_price', '$link_word',
            '$off_price', '$final_price',
            '$dominant_color', '$second_img',
            '$third_img', '$fourth_img', '$fifth_img', '$description', '$product_type')";
            // save to db and check
            if(mysqli_query($connection, $sql)){
                //succes
                header('Location: dashboard.php#product_source_linker');
            }else{
                echo 'querry error:' . mysqli_error($connection);
            }
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
        <h1 class="user_crud_container_intor_text">Add <strong class="brake_point_strong_sh">Smart Home</strong> Proudct Page</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="add_product_form_main_class">
        <option class="add_product_main_img_upload_box" id="drop_box" onclick="upload()" value="<?php echo htmlspecialchars($main_photo)?>"
            style="background-image: url(img/<?php echo htmlspecialchars($main_photo)?>)"></option>
            <input type="file" class="img_input" id="input_file" name="main_photo" hidden>
            <i class='bx bx-upload upload_img_add_product'></i>
            <p class="upload_img_add_product_text">please upload the main image</p>
            <div class="red-text add_product_product_error"><?php echo $errors['main_photo']; ?></div>
            <!-- </div> -->
            <div class="add_product_inputed_information_grid">
                <div class="add_product_text_content_container">
                    <p class="add_product_input_disclaimer">Please input name of product</p>
                    <input type="text" class="add_product_product_name_input" name="product_name" required value="<?php echo htmlspecialchars($product_name)?>">
                    <label for="product_name" class="add_product_product_name">Product Name</label>
                    <div class="red-text add_product_product_error"><?php echo $errors['product_name']; ?></div>
                </div>
                <div class="add_product_text_content_container">
                    <p class="add_product_input_disclaimer">this field must contain <strong>3</strong> keyword of brand</p>
                    <input type="text" class="add_product_product_name_input" name="link_word" required value="<?php echo htmlspecialchars($link_word)?>">
                    <label for="product_name" class="add_product_product_name add_product_product_name_link_word">Link Word</label>
                    <div class="red-text add_product_product_error"><?php echo $errors['link_word']; ?></div>
                </div>
                <div class="add_product_text_content_container">
                    <p class="add_product_input_disclaimer">Please input price of prodcut without $₾€</p>
                    <input type="text" class="add_product_product_name_input js_price" name="product_price" required value="<?php echo htmlspecialchars($product_price)?>" onchange="changePirce()"> 
                    <label for="product_name" class="add_product_product_name" id="add_product_product_price">Product Price</label>
                    <div class="red-text add_product_product_error"><?php echo $errors['product_price']; ?></div>
                </div>
                <div class="add_product_text_content_container">
                    <p class="add_product_input_disclaimer add_product_input_disclaimer_precentage">In case there is no sale please input just 0</p>
                    <input type="text" class="add_product_product_name_input js_off_price" name="off_price" required value="<?php echo htmlspecialchars($off_price)?>" onchange="changeOffPirce()">
                    <label for="product_name" class="add_product_product_name add_product_product_sale" id="add_product_sale_prcentage">sale %</label>
                    <div class="red-text add_product_product_error"><?php echo $errors['off_price']; ?></div>
                </div>
            </div>
            <div class="add_product_additional_png_grid">
                <div class="add_product_img_grid_outer_source">
                    <option class="add_product_main_img_upload_box add_product_additional_img_upload_box" id="drop_box_second" onclick="uploadSecond()"
                    value="<?php echo htmlspecialchars($second_img)?>" style="background-image: url(img/<?php echo htmlspecialchars($second_img)?>)"></option>
                    <div class="add_img_outer_grid_inner_second_box">
                        <input type="file" class="img_input" id="input_file_second" name="second_img" hidden>
                        <i class='bx bx-upload second_upload_img_add_product'></i>
                        <p class="second_upload_img_add_product_text">please upload the second image</p>
                        <div class="red-text add_product_product_error second_img_error"><?php echo $errors['second_img']; ?></div>
                    </div>
                </div>
                <div class="add_product_img_grid_outer_source">
                    <option class="add_product_main_img_upload_box add_product_additional_img_upload_box" id="drop_box_third" onclick="uploadThird()" 
                    value="<?php echo htmlspecialchars($third_img)?>" style="background-image: url(img/<?php echo htmlspecialchars($third_img)?>)"></option>
                    <div class="add_img_outer_grid_inner_second_box">
                        <input type="file" class="img_input" id="input_file_third" name="third_img" hidden>
                        <i class='bx bx-upload third_upload_img_add_product'></i>
                        <p class="third_upload_img_add_product_text">please upload the third image</p>
                        <div class="red-text add_product_product_error third_img_error"><?php echo $errors['third_img']; ?></div>
                    </div>
                </div>
                <div class="add_product_img_grid_outer_source">
                    <option class="add_product_main_img_upload_box add_product_additional_img_upload_box" id="drop_box_forth" onclick="uploadForth()"
                    value="<?php echo htmlspecialchars($fourth_img)?>" style="background-image: url(img/<?php echo htmlspecialchars($fourth_img)?>)"></option>
                    <div class="add_img_outer_grid_inner_second_box">
                        <input type="file" class="img_input" id="input_file_forth" name="fourth_img" hidden>
                        <i class='bx bx-upload forth_upload_img_add_product'></i>
                        <p class="forth_upload_img_add_product_text">please upload the fourth image</p>
                        <div class="red-text add_product_product_error forth_img_error"><?php echo $errors['fourth_img']; ?></div>
                    </div>
                </div>
                <div class="add_product_img_grid_outer_source">
                    <option class="add_product_main_img_upload_box add_product_additional_img_upload_box" id="drop_box_fifth" onclick="uploadFifth()" 
                    value="<?php echo htmlspecialchars($fifth_img)?>" style="background-image: url(img/<?php echo htmlspecialchars($fifth_img)?>)"></option>
                    <input type="file" class="img_input" id="input_file_fifth" name="fifth_img" hidden>
                    <div class="add_img_outer_grid_inner_second_box">
                        <i class='bx bx-upload fifth_upload_img_add_product'></i>
                        <p class="fifth_upload_img_add_product_text">please upload the fifth image</p>
                        <div class="red-text add_product_product_error fifth_img_error"><?php echo $errors['fifth_img']; ?></div>
                    </div>
                </div>
            </div>
            <div class="add_product_deescription_text_area">
                <textarea name="product_description" id="description" class="add_product_input_textarea"
                placeholder="Please enter description of product"><?php echo htmlspecialchars($description)?></textarea>
                <div class="red-text add_product_product_error"><?php echo $errors['product_description']; ?></div>
            </div>
            <div class="last_output_add_product_container">
                <h1 class="dominant_intro_text_add_product">Output of dominant color in Img</h1>
                <select class="dominant_color" name="dominant_color" value="<?php echo htmlspecialchars($dominant_color)?>">
                  <option id="dominant_color_output" Selected></option>
                </select>
                <select class="dominant_color" name="final_price" value="<?php echo htmlspecialchars($final_price)?>">
                  <option class="js_price_output" Selected></option>
                </select>
            </div>
            <input type="text" class="add_product_hidden" name="product_type" required value="Smart home">
            <div class="add_product_submit_button_container">
                <div class="buttonero user_crud_sumbit add_product_submit_button">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <button class="button_test" type="submit" name="submit" value="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <canvas id="preview" style="display: none;"></canvas>
    <canvas id="canvas" style="display: none;"></canvas>
    
    <?php
    include('footer.php'); 
    ?>
    <script src="imgoutput.js"></script>
    <script src="dominantColor.js"></script>
</html>