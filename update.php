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
    // include('db_connect.php');
    // session_start();
    $username = $email = $passwords = $userType = '';
    $idcrud = $_GET['updateid'];
    $id = $_SESSION["id"];
    $result = mysqli_query($connection, "SELECT * FROM registration WHERE id = $idcrud");
    $row = mysqli_fetch_array($result);
    $username = $row['username'];
    $email = $row['email'];
    $passwords = $row['passwords'];
    $usertype = $row['userType'];
    // echo $usertype;
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $passwords = $_POST['passwords'];
            $userType = $_POST['userType'];
            $sql = "UPDATE registration SET username='$username', email='$email', passwords='$passwords', userType='$userType' WHERE id=$idcrud";
            $resultcrud = mysqli_query($connection, $sql);
            // save to db and check
            if($resultcrud){
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
            <div class="form_box user_crud_style">
            <h2 class="user_crud_head_text">Update user's information</h2>
                <div class="user_crud_username">
                <div class="inputbox">
                        <label for="username" class="user_crud_label">Username</label>
                        <input type="text" name="username" value="<?php echo htmlspecialchars($username)?>">
                        <i class='bx bxs-user user_crud_label_i user_crud_label_i_username'></i>
                        <div class="red-text"></div>
                    </div>
                    <div class="inputbox">
                        <label for="email" class="user_crud_label">Email</label>
                        <input type="text" name="email"  value="<?php echo htmlspecialchars($email)?>">
                        <i class='bx bx-envelope user_crud_label_i_email'></i>
                        <div class="red-text"></div>
                    </div>
                    <div class="inputbox">
                        <label type="password" for="passwords" class="user_crud_label">Password</label>
                        <input name="passwords" id="Password" type="password" value="<?php echo htmlspecialchars($passwords)?>">
                        <i class='bx bxs-lock-alt user_crud_label_i_password' ></i>
                        <div class="show"> </div>
                        <div class="strength"> . </div>
                        <div class="red-text"></div>
                    </div>
                    <div class="inputbox">
                        <label for="userType" class="user_crud_label">User_Type</label>
                        <select class="user_crud_option_selector" name="userType" value="<?php echo htmlspecialchars($usertype)?>">
                          <!-- <option hidden Selected ></option> -->
                          <option class="user_crud_option_user">user</option>
                          <option class="user_crud_option_admin">admin</option>
                        </select>
                        <i class='bx bxs-user user_crud_label_i_user_type'></i>
                        <div class="red-text"></div>
                    </div>

                    <?php echo '<button class="button_test" type="submit" name="submit" value="submit">
                        <div class="buttonero user_crud_sumbit buttonero_fix"><span></span>
                        <span></span>
                        <span></span>
                        <span></span>                    
                        <a class="user_crud_update_link"href="update.php? updateid='.$idcrud.'">Update</a></div>
                    </button>' ?>
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