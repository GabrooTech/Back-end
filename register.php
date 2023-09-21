<?php 
    include('db_connect.php');
    $username = $email = $passwords = '';
    $errors = array('email'=>'', 'username'=>'', 'passwords'=>'');
    if(isset($_POST['submit'])){
        // check username
        if(empty($_POST['username'])){
            $errors['username'] = 'A username is required <br />';
        }else{
            $username = $_POST['username'];
            if(!preg_match('/^[a-zA-Z0-9_-]{4,10}$/', $username)){
                $errors['username'] = 'username only can include lowercase and upercase letters, numbers, and letter amounts from 4 to 10';
            }else{
                // chek if usename is already in use
                $username = $_POST['username'];
                $checkDuplicateUser = mysqli_query($connection, "SELECT username FROM registration WHERE username = '$username'");
                if(mysqli_num_rows($checkDuplicateUser) > 0){
                    $errors['username'] = "Username is arlready in use";
                }
            }
        }
        // check email
        if(empty($_POST['email'])){
            $errors['email'] = 'An email is required <br />';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'email must be a valid email address';
            
            }else{
                // chek if email is already in use
                $email = $_POST['email'];
                $checkDuplicate = mysqli_query($connection, "SELECT email FROM registration WHERE email = '$email'");
                if(mysqli_num_rows($checkDuplicate) > 0){
                  $errors['email'] = "The email has been used";
            }
        }
        }
        // check password
        $uppercase = preg_match('@[A-Z]@', $passwords);
        $lowercase = preg_match('@[a-z]@', $passwords);
        $number    = preg_match('@[0-9]@', $passwords);
        $specialChars = preg_match('@[^\w]@', $passwords);
        if(empty($_POST['passwords'])){
            $errors['passwords'] = 'An password is required <br />';
        }else{
            $passwords = $_POST['passwords'];
            if(strlen($passwords) < 8){
                $errors['passwords'] = 'password must contain at least 8 character';
            }elseif(!preg_match('@[^\w]@', $passwords)){
                $errors['passwords'] = 'password must contain at least 1 special character';
            }elseif(!preg_match('@[0-9]@', $passwords)){
                $errors['passwords'] = 'password must conatin at least one number';
            }elseif(!preg_match('@[a-z]@', $passwords)){
                $errors['passwords'] = 'password must conatin at least one lovercase character';
            }elseif(!preg_match('@[A-Z]@', $passwords)){
                $errors['passwords'] = 'password must conatin at least one uppercase character';
            }
        }
        // send data to bd
        if(array_filter($errors)){
        }else{
            $email = mysqli_escape_string($connection, $_POST['email']);
            $passwords = mysqli_escape_string($connection, $_POST['passwords']);
            $username = mysqli_escape_string($connection, $_POST['username']);
            $sql = "INSERT INTO registration(username, email, passwords) VALUES('$username', '$email', '$passwords')";
            // save to db and check
            if(mysqli_query($connection, $sql)){
                //succes
                header('Location: login.php');
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
    <div class="login_container">
        <div class="form_box">
            <div class="form_value">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <h2>Register</h2>
                <div class="inputbox">
                    <input type="text" name="username" value="<?php echo htmlspecialchars($username)?>" class="login_input" >
                    <i class='bx bxs-user'></i>
                    <label for="username" class="label">User</label>
                    <div class="red-text"><?php echo $errors['username']; ?></div>
                </div>
                <div class="inputbox">
                    <input type="text" name="email" value="<?php echo htmlspecialchars($email)?>" class="login_input" >
                    <i class='bx bx-envelope' ></i>
                    <label for="email" class="label">Email</label>
                    <div class="red-text"><?php echo $errors['email']; ?></div>
                </div>
                <div class="inputbox">
                    <input type="password" name="passwords" value="<?php echo htmlspecialchars($passwords)?>" class="login_input" id="Password">
                    <div class="show"> </div>
                    <div class="strength"> . </div>
                    <i class='bx bxs-lock-alt' ></i>
                    <label for="passwords" class="label">Password</label>
                    <div class="red-text"><?php echo $errors['passwords']; ?></div>
                </div>
                <div class="buttonero">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <button class="button_test" type="submit" name="submit" value="submit">Sign up</button>
                </div>
                <div class="register">
                    <p>Get back to the <a href="login.php">login Page</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    include('footer.php'); 
    ?>
</html>