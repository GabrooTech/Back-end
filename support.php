<?php 
    include('db_connect.php');
    session_start();
    $id = $_SESSION["id"];
    $result = mysqli_query($connection, "SELECT * FROM registration WHERE id = $id");
    $row = mysqli_fetch_array($result);
    if($row["userType"] != 'admin' && $row["userType"] != 'user'){
        header('Location: mainpage.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
    <?php
        include('head.php');
        include('aside.php');
    ?>
    <div class="support_container">
        <h2 class="main_text_support">Select content of issue</h2>
        <div class="support_problems_list">
            <a href="support_submit_form.php" class="support_keyword_linker">
            <div class="support_problem_account support_problem_common">
                <div class="support_problem_common_inner_box">
                    <i class='bx bx-user'></i>
                    <h2>User Problem</h2>
                </div>
            </div>
            </a>
            <a href="support_submit_form_product.php" class="support_keyword_linker">
                <div class="support_problem_product support_problem_common">
                    <div class="support_problem_common_inner_box">
                        <i class='bx bxs-package'></i>
                        <h2>Product Problem</h2>
                    </div>
                </div>
            </a>
            <a href="support_submit_form_undetected.php" class="support_keyword_linker">
                <div class="support_problem_bug support_problem_common">
                    <div class="support_problem_common_inner_box">
                        <i class='bx bxs-bug' ></i>
                        <h2>Undetected Bug</h2>
                    </div>
                </div>
            </a>
            <a href="support_submit_form_missleading.php" class="support_keyword_linker">
                <div class="support_problem_missinformation support_problem_common">
                    <div class="support_problem_common_inner_box">
                        <i class='bx bx-info-circle' ></i>
                        <h2>Missleading information</h2>
                    </div>
                </div>
            </a>
            <a href="support_submit_form_CSProb.php" class="support_keyword_linker">
                <div class="support_problem_cybersecurity support_problem_common">
                    <div class="support_problem_common_inner_box">
                        <i class='bx bx-shield-minus' ></i>
                        <h2>Cyber Securty Problem</h2>
                    </div>
                </div>
            </a>
            <a href="support_submit_form_another.php" class="support_keyword_linker">
                <div class="support_problem_other support_problem_common">
                    <div class="support_problem_common_inner_box">
                        <i class='bx bx-dots-horizontal-rounded' ></i>
                        <h2>Another Problem</h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <script src="toogle.js"></script>
    <?php
        include('footer.php');
    ?>
</html>