<?php 
    include('db_connect.php');
    session_start();
    $id = $_SESSION["id"];
    $result = mysqli_query($connection, "SELECT * FROM registration WHERE id = $id");
    $row = mysqli_fetch_array($result);
    if($row["userType"] != 'admin' && $row["userType"] != 'user'){
        header('Location: mainpage.php');
    }
    $content = '';
    $reason = 'Product Problem';
    $errors = array('content'=>'');
    $id = $_SESSION["id"];
    if(isset($_POST['submit'])){
        if(empty($_POST['content'])){
            $errors['content'] = 'The description is required <br />';
        }else{
            $content = $_POST['content'];
        }
        if(array_filter($errors)){
        }else{
            $content = mysqli_escape_string($connection, $_POST['content']);
            // $reason = mysqli_escape_string($connection, $_POST['reason']);
            $sql = "INSERT INTO support(content, reason, id) VALUES('$content', '$reason', '$id')";
            // save to db and check
            if(mysqli_query($connection, $sql)){
                //succes
                header('Location: mainpage.php');
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
    <div class="support_container_submition">
        <div class="support_submision_box">
            <form method="POST" class="support_final_form">
                <div class="names_of_content_support">
                    <h2>Content: Product Problem</h2>
                    <h5>Describe your Problem</h5>
                </div>
                <div class="names_of_content_support_outsource">
                    <textarea name="content" id="contents" class="support_input_textarea" placeholder="Enter your problem here"><?php echo htmlspecialchars($content) ?></textarea>
                    <div class="red-text"><?php echo $errors['content']; ?></div>
                </div>
                <button class="btn-10" type="submit" name="submit" value="submit">Submit</button>
            </form>
        </div>
    </div>
    <?php
        include('footer.php');
    ?>
</html>