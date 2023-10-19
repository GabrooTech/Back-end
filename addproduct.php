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

    $username = $email = $passwords = $userType = '';
    $errors = array('email'=>'', 'username'=>'', 'passwords'=>'', 'userType'=>'');
    if(isset($_POST['submit'])){
        // check username
        if(empty($_POST['username'])){
            $errors['username'] = 'A username is required <br />';
            }else{
                // chek if usename is already in use
                $username = $_POST['username'];
                $checkDuplicateUser = mysqli_query($connection, "SELECT username FROM registration WHERE username = '$username'");
                if(mysqli_num_rows($checkDuplicateUser) > 0){
                    $errors['username'] = "Username is arlready in use";
                }
            }
        // check email
        if(empty($_POST['email'])){
            $errors['email'] = 'An email is required <br />';
            }else{
                // chek if email is already in use
                $email = $_POST['email'];
                $checkDuplicate = mysqli_query($connection, "SELECT email FROM registration WHERE email = '$email'");
                if(mysqli_num_rows($checkDuplicate) > 0){
                  $errors['email'] = "The email has been used";
            }
        }
        // check password
        if(empty($_POST['passwords'])){
            $errors['passwords'] = 'An password is required <br />';
        }else{
            $passwords = $_POST['passwords'];
        }
        // check userType
        if($_POST['userType'] == ''){
            $errors['userType'] = 'Please select type of user <br />';
        }else{
            $passwords = $_POST['passwords'];
        }
        // send data to bd
        if(array_filter($errors)){
        }else{
            $email = mysqli_escape_string($connection, $_POST['email']);
            $passwords = mysqli_escape_string($connection, $_POST['passwords']);
            $username = mysqli_escape_string($connection, $_POST['username']);
            $userType = mysqli_escape_string($connection, $_POST['userType']);
            $sql = "INSERT INTO registration(username, email, passwords, userType) VALUES('$username', '$email', '$passwords', '$userType')";
            // save to db and check
            if(mysqli_query($connection, $sql)){
                //succes
                header('Location: dashboard.php');
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
        <h1 class="user_crud_container_intor_text">Add Proudct Page</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="add_product_form_main_class">
            <div class="add_product_main_img_upload_box" id="drop_box" onclick="upload()">
                <input type="file" class="img_input" id="input_file" name="main_photo" hidden>
                <i class='bx bx-upload'></i>
                <p>please upload the main image</p>
            </div>
            <div class="add_product_inputed_information_grid">
                <div class="add_product_text_content_container">
                    <p class="add_product_input_disclaimer">Please input name of product</p>
                    <input type="text" class="add_product_product_name_input" name="product_name" required>
                    <label for="product_name" class="add_product_product_name">Product Name</label>
                    <div class="red-text add_product_product_error"><?php echo $errors['username']; ?></div>
                </div>
                <div class="add_product_text_content_container">
                    <p class="add_product_input_disclaimer">this field must contain <strong>3</strong> keyword of brand</p>
                    <input type="text" class="add_product_product_name_input" name="link_word" required>
                    <label for="product_name" class="add_product_product_name add_product_product_name_link_word">Link Word</label>
                    <div class="red-text add_product_product_error"><?php echo $errors['username']; ?></div>
                </div>
                <div class="add_product_text_content_container">
                    <p class="add_product_input_disclaimer">Please input price of prodcut without $₾€</p>
                    <input type="text" class="add_product_product_name_input" name="product_price" required>
                    <label for="product_name" class="add_product_product_name">Product Price</label>
                    <div class="red-text add_product_product_error"><?php echo $errors['username']; ?></div>
                </div>
                <div class="add_product_text_content_container">
                    <p class="add_product_input_disclaimer add_product_input_disclaimer_precentage">In case there is sale on prodcut please input only number of it</p>
                    <input type="text" class="add_product_product_name_input" name="off_price" required>
                    <label for="product_name" class="add_product_product_name add_product_product_sale">sale %</label>
                    <div class="red-text add_product_product_error"><?php echo $errors['username']; ?></div>
                </div>
            </div>
            <div class="add_product_additional_png_grid">
                <div class="add_product_main_img_upload_box add_product_additional_img_upload_box" id="drop_box_second" onclick="uploadSecond()">
                    <input type="file" class="img_input" id="input_file_second" name="second_img" hidden>
                    <i class='bx bx-upload'></i>
                    <p>please upload the second image</p>
                </div>
                <div class="add_product_main_img_upload_box add_product_additional_img_upload_box" id="drop_box_third" onclick="uploadThird()">
                    <input type="file" class="img_input" id="input_file_third" name="third_img" hidden>
                    <i class='bx bx-upload'></i>
                    <p>please upload the third image</p>
                </div>
                <div class="add_product_main_img_upload_box add_product_additional_img_upload_box" id="drop_box_forth" onclick="uploadForth()">
                    <input type="file" class="img_input" id="input_file_forth" name="fourth_img" hidden>
                    <i class='bx bx-upload'></i>
                    <p>please upload the fourth image</p>
                </div>
                <div class="add_product_main_img_upload_box add_product_additional_img_upload_box" id="drop_box_fifth" onclick="uploadFifth()">
                    <input type="file" class="img_input" id="input_file_fifth" name="fifth_img" hidden>
                    <i class='bx bx-upload'></i>
                    <p>please upload the fifth image</p>
                </div>
            </div>
        </form>
        <div>
            <!-- <p class="disclaimer">This Page is visible only for Main Admin who is able to add users or even admins for the website. Any restriction is forbiddened</p> -->
        </div>
    </div>
    
    
    <?php
    include('footer.php'); 
    ?>
    <script src="imgoutput.js"></script>
</html>