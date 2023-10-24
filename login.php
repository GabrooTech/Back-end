<?php 
    include('db_connect.php');
    session_start();
    $username = $passwords = '';
    $errors = array('username'=>'', 'passwords'=>'');
    $GLOBALS['adminCounter'] = $adminsCounter = 0;
    ini_set('display_errors', 0);
    if(isset($_POST["submit"])){
        $username = $_POST['username'];
        $passwords = $_POST['passwords'];
        $result = mysqli_query($connection, "SELECT * FROM registration WHERE username = '$username'");
        $row = mysqli_fetch_array($result);
        if($row['userType'] == 'admin'){
            $_SESSION['admin_id'] = $row['id'];
        }elseif($row['userType'] == 'user'){
            $_SESSION['user_id'] = $row['id'];
            }
        if(empty($_POST['username'])){
            $errors['username'] = 'A username is required <br />';
        }else{
            $checkValidUser = mysqli_query($connection, "SELECT username FROM registration WHERE username = '$username'");
            if(mysqli_num_rows($checkValidUser) > 0){
                if($username == $row["username"]){
                    $_SESSION["id"] = $row["id"];
                }
            }else{
                $errors['username'] = "User is not Registered!";
            }
        }
    if(empty($_POST['passwords'])){
        $errors['passwords'] = 'An password is required <br />';
    }else{
            $checkValidpass = mysqli_query($connection, "SELECT passwords FROM registration WHERE passwords = '$passwords'");
            if(mysqli_num_rows($checkValidpass) > 0){
                if($passwords == $row['passwords']){
                    $_SESSION["login"] = true;
                    $GLOBALS['adminsCounter'] = $adminsCounter + 1;
                    $_SESSION["adminsCounter"] = $GLOBALS["adminsCounter"];
                    $GLOBALS["userCounter"] = $userCounter + 1;
                    $_SESSION["userCounter"] = $GLOBALS["userCounter"];
                    header('Location: mainpage.php');
                }
            }else{
                $errors['passwords'] = "Password is wrong!";
            }
        }
        $GLOBALS['asideShow'] = $_SESSION["id"];
    if(empty($_POST['passwords']) && empty($_POST['username'])){
        $errors['passwords'] = "Username is required";
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <?php
    include('head.php');
    include('aside.php');
    ?>
    <div class="login_container">
        <div class="form_box">
            <div class="form_value">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <h2>Login</h2>
                <div class="inputbox">
                    <input type="text" name="username" class="login_input"  value="<?php echo htmlspecialchars($username)?>">
                    <i class='bx bxs-user' ></i>
                    <label for="username" class="label">User</label>
                    <div class="red-text"><?php echo $errors['username'];?></div>
                </div>
                <div class="inputbox">
                    <input type="password" name="passwords" class="login_input" id="Password"  value="<?php echo htmlspecialchars($passwords)?>">
                    <i class='bx bxs-lock-alt' ></i>
                    <div class="show"> </div>
                    <label for="passwords" class="label">Password</label>
                    <div class="red-text"><?php echo $errors['passwords'];?></div>
                </div>
                <button class="login_button reveal" type="submit" name="submit" value="submit">Log in</button>
                <div class="register">
                    <p>Don't have a account <a href="register.php">Register</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="regform.js"></script>
    <?php
    // include('footer.php'); 
    ?>
</html>