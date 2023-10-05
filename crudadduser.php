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
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form_box user_crud_style">
            <h2 class="user_crud_head_text">Admin board for user register</h2>
                <div class="user_crud_username">
                <div class="inputbox">
                        <label for="username" class="user_crud_label">Username</label>
                        <input type="text" name="username" value="<?php echo htmlspecialchars($username)?>">
                        <i class='bx bxs-user user_crud_label_i user_crud_label_i_username'></i>
                        <div class="red-text"><?php echo $errors['username']; ?></div>
                    </div>
                    <div class="inputbox">
                        <label for="email" class="user_crud_label">Email</label>
                        <input type="text" name="email"  value="<?php echo htmlspecialchars($email)?>">
                        <i class='bx bx-envelope user_crud_label_i_email'></i>
                        <div class="red-text"><?php echo $errors['email']; ?></div>
                    </div>
                    <div class="inputbox">
                        <label type="password" for="passwords" class="user_crud_label">Password</label>
                        <input name="passwords" id="Password" type="password" value="<?php echo htmlspecialchars($passwords)?>">
                        <i class='bx bxs-lock-alt user_crud_label_i_password' ></i>
                        <div class="show"> </div>
                        <div class="strength"> . </div>
                        <div class="red-text"><?php echo $errors['passwords']; ?></div>
                    </div>
                    <div class="inputbox">
                        <label for="userType" class="user_crud_label">User_Type</label>
                        <select class="user_crud_option_selector" name="userType" value="<?php echo htmlspecialchars($passwords)?>">
                          <option hidden Selected></option>
                          <option class="user_crud_option_user">user</option>
                          <option class="user_crud_option_admin">admin</option>
                        </select>
                        <i class='bx bxs-user user_crud_label_i_user_type'></i>
                        <div class="red-text"><?php echo $errors['userType']; ?></div>
                    </div>
                    <div class="buttonero user_crud_sumbit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <button class="button_test" type="submit" name="submit" value="submit">Submit</button>
                </div>
                </div>
            </div>
        </form>
        <div>
            <p class="disclaimer">This Page is visible only for Main Admin who is able to add users or even admins for the website. Any restriction is forbiddened</p>
        </div>
    </div>
    
    
    <?php
    include('footer.php'); 
    ?>
</html>