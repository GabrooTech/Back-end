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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div class="dashboard_container">
        <div class="main_info">
        <div class="main_info_box">
                <div class="main_info_left_box">
                    <p>142</p>
                    <h2>Views</h2>
                </div>
                <div class="main_info_right_box">
                    <i class='bx bx-user'></i>
                </div>
        </div>
        <div class="main_info_box">
                <div class="main_info_left_box">
                    <?php 
                    $products_result = mysqli_query($connection, "SELECT * FROM products");
                    if($products_result){
                         while($products_row = mysqli_fetch_assoc($products_result)){
                             $id_product_result=$products_row['product_id'];
                             $id_product_result = new ArrayObject(
                                array($id_product_result)
                             );
                             $count = $id_product_result->count();
                               for ($i =0; $i<=strlen($count);$i++){  
                                $rem=$count%10;  
                                $sum = $sum + $rem;  
                                $count=$count/10;  
                            }
                         }
                        echo '<p>'.$sum.'</p>';
                    }
                    ?>
                    <h2>Products</h2>
                </div>
                <div class="main_info_right_box">
                    <i class='bx bxs-package'></i>
                </div>
        </div>
        <div class="main_info_box">
                <div class="main_info_left_box">
                    <p>25</p>
                    <h2>Sales</h2>
                </div>
                <div class="main_info_right_box">
                    <i class='bx bx-cart' ></i>
                </div>
        </div>
        <div class="main_info_box">
                <div class="main_info_left_box">
                    <p>500$</p>
                    <h2>Income</h2>
                </div>
                <div class="main_info_right_box">
                    <i class='bx bx-money' ></i>
                </div>
        </div>
        </div>
        <div class="orders_first_chart">
            <div class="orders_box">
                <h1>Recent Orders</h1>
                <div class="order_main_grid">
                    <div class="gird_answer">
                    <div class="username_title">username</div>
                        <div class="first_answer">George</div>
                        <div class="first_answer">David</div>
                        <div class="first_answer">Levan</div>
                        <div class="first_answer">George</div>
                        <div class="first_answer">David</div>
                        <div class="first_answer">Levan</div>
                        <div class="first_answer">George</div>
                        <div class="first_answer">David</div>
                        <div class="first_answer">Levan</div>
                        <div class="first_answer">George</div>
                        <div class="first_answer">David</div>
                        <div class="first_answer">Levan</div>
                    </div>
                    <div class="gird_answer">
                        <div class="quantity_title">quantity</div>
                        <div class="first_answer product_quantity">5</div>
                        <div class="first_answer product_quantity">3</div>
                        <div class="first_answer product_quantity">6</div>
                        <div class="first_answer product_quantity">5</div>
                        <div class="first_answer product_quantity">3</div>
                        <div class="first_answer product_quantity">6</div>
                        <div class="first_answer product_quantity">5</div>
                        <div class="first_answer product_quantity">3</div>
                        <div class="first_answer product_quantity">6</div>
                        <div class="first_answer product_quantity">5</div>
                        <div class="first_answer product_quantity">3</div>
                        <div class="first_answer product_quantity">6</div>
                    </div>
                    <div class="gird_answer">
                        <div class="price_title">price</div>
                        <div class="first_answer single_item_price">45$</div>
                        <div class="first_answer single_item_price">15$</div>
                        <div class="first_answer single_item_price">200$</div>
                        <div class="first_answer single_item_price">45$</div>
                        <div class="first_answer single_item_price">15$</div>
                        <div class="first_answer single_item_price">200$</div>
                        <div class="first_answer single_item_price">45$</div>
                        <div class="first_answer single_item_price">15$</div>
                        <div class="first_answer single_item_price">200$</div>
                        <div class="first_answer single_item_price">45$</div>
                        <div class="first_answer single_item_price">15$</div>
                        <div class="first_answer single_item_price">200$</div>
                    </div>
                    <div class="gird_answer">
                        <div class="time_title">time</div>
                        <div class="first_answer time_of_order">02.25.23</div>
                        <div class="first_answer time_of_order">03.25.23</div>
                        <div class="first_answer time_of_order">07.11.23</div>
                        <div class="first_answer time_of_order">02.25.23</div>
                        <div class="first_answer time_of_order">03.25.23</div>
                        <div class="first_answer time_of_order">07.11.23</div>
                        <div class="first_answer time_of_order">02.25.23</div>
                        <div class="first_answer time_of_order">03.25.23</div>
                        <div class="first_answer time_of_order">07.11.23</div>
                        <div class="first_answer time_of_order">02.25.23</div>
                        <div class="first_answer time_of_order">03.25.23</div>
                        <div class="first_answer time_of_order">07.11.23</div>
                    </div>
                    <div class="gird_answer">
                        <div class="status_title">status</div>
                        <div class="first_answer current_product_status pending_status">pending</div>
                        <div class="first_answer current_product_status declined_status">declined</div>
                        <div class="first_answer current_product_status delivered_status">dlivered</div>
                        <div class="first_answer current_product_status pending_status">pending</div>
                        <div class="first_answer current_product_status declined_status">declined</div>
                        <div class="first_answer current_product_status delivered_status">dlivered</div>
                        <div class="first_answer current_product_status pending_status">pending</div>
                        <div class="first_answer current_product_status declined_status">declined</div>
                        <div class="first_answer current_product_status delivered_status">dlivered</div>
                        <div class="first_answer current_product_status pending_status">pending</div>
                        <div class="first_answer current_product_status declined_status">declined</div>
                        <div class="first_answer current_product_status delivered_status">dlivered</div>
                    </div>
                </div>
            </div>
            <!-- <div class="first_chart">
                <h1>Interes in products by sales</h1>
                <div id="chart_div"></div>
            </div> -->
        </div>
        <div class="user_crud" id="outsoucrce_linker">
            <h2>Users</h2>
            <div class="user_crud_main_grid_titles">
            <div class="user_crud_user_id">
                    <div class="username_title">id</div>
                </div>
                <div class="user_crud_user_name">
                    <div class="username_title">name</div>
                </div>
                <div class="user_crud_user_email">
                    <div class="username_title">email</div>
                </div>
                <div class="user_crud_user_password">
                    <div class="username_title">password</div>
                </div>
                <div class="user_crud_user_type">
                    <div class="username_title">user Type</div>
                </div>
                <div class="user_crud_edit_button">
                    <div class="username_title">Update</div>
                </div>
                <div class="user_crud_edit_button">
                    <div class="username_title">Delete</div>
                </div>
            </div>
            <div class="user_crud_main_grid">
                <?php 
                    $resultcrud = mysqli_query($connection, "SELECT * FROM registration");
                    if($resultcrud){
                        while($row = mysqli_fetch_assoc($resultcrud)){
                            $idcrud=$row['id'];
                            $username=$row['username'];
                            $email=$row['email'];
                            $pass=$row['passwords'];
                            $userType=$row['userType'];
                            if($userType == "admin"){ 
                                $userColorSelector = "user_type_admin";
                            }else if($userType == "user"){ $userColorSelector = "user_type_user";}
                            echo '
                            <div class="user_crud_user_id">
                                <div class="first_answer">'.$idcrud.'</div>
                            </div>
                            <div class="user_crud_user_name">
                                <div class="first_answer">'.$username.'</div>
                            </div>
                            <div class="user_crud_user_email">
                                <div class="first_answer">'.$email.'</div>
                            </div>
                            <div class="user_crud_user_password">
                                <div class="first_answer">'.$pass.'</div>
                            </div>
                            <div class="user_crud_user_type">
                                <div class="first_answer '.$userColorSelector.'" id="userType">'.$userType.'</div>
                            </div>
                            <div class="user_crud_edit_button">
                                <button class="custom_for_button btn_9 ."><a href="update.php? updateid='.$idcrud.'">Edit</a></button>
                            </div>
                            <div class="user_crud_edit_button">
                                <button class="custom_for_button btn_9"><a href="delete.php? deleteid='.$idcrud.'">Delete</a></button>
                            </div>
                            ';
                        }
                    }
                ?>
            </div>
        </div>
        <div class="user_crud" id="ticketsource_linker">
            <h2>Support Tickets</h2>
            <div class="user_crud_main_grid_titles_support">
            <div class="user_crud_user_id">
                    <div class="username_title">sender_user_id</div>
                </div>
                <div class="user_crud_user_name">
                    <div class="username_title">reson</div>
                </div>
                <div class="user_crud_user_email">
                    <div class="username_title">content</div>
                </div>
                <div class="user_crud_user_password">
                    <div class="username_title">timestamp</div>
                </div>
                <div class="user_crud_user_type">
                    <div class="username_title">state</div>
                </div>
                <div class="user_crud_edit_button">
                    <div class="username_title">Detailed</div>
                </div>
                <div class="user_crud_edit_button">
                    <div class="username_title">Solution</div>
                </div>
                <div class="user_crud_edit_button">
                    <div class="username_title">Delete</div>
                </div>
            </div>
            <div class="user_crud_main_grid_support">
                <?php 
                    $supportresult = mysqli_query($connection, "SELECT * FROM support");
                    if($supportresult){
                        while($rowsupport = mysqli_fetch_assoc($supportresult)){
                            $idresult=$rowsupport['id'];
                            $reason=$rowsupport['reason'];
                            $content=$rowsupport['content'];
                            $ticketdate=$rowsupport['submit_time'];
                            $ticketstate=$rowsupport['ticket_state'];
                            $ticketid=$rowsupport['ticket_id'];
                            if($ticketstate == "unsolved"){ 
                                $stateColorSelector = "tikcet_state_outsource";
                            }else if($ticketstate == "solved"){ 
                                $stateColorSelector = "tikcet_state_outsource_solved";
                            }
                            echo '
                            <div class="user_crud_user_id">
                                <div class="first_answer">'.$idresult.'</div>
                            </div>
                            <div class="user_crud_user_name">
                                <div class="first_answer">'.$reason.'</div>
                            </div>
                            <div class="user_crud_user_email">
                                <div class="first_answer string_counter">'.$content.'</div>
                            </div>
                            <div class="user_crud_user_password">
                                <div class="first_answer">'.$ticketdate.'</div>
                            </div>
                            <div class="user_crud_user_type">
                                <div class="first_answer support_ticket_color '.$stateColorSelector.'" id="userType">'.$ticketstate.'</div>
                            </div>
                            <div class="user_crud_edit_button">
                                <button class="custom_for_button btn_9 ."><a href="ticket_detail.php? ticketDetailId='.$ticketid.'">Detail</a></button>
                            </div>
                            <div class="user_crud_edit_button">
                                <button class="custom_for_button btn_9"><a href="solveticket.php? solveticketid='.$ticketid.'">Solve</a></button>
                            </div>
                            <div class="user_crud_edit_button">
                                <button class="custom_for_button btn_9"><a href="ticket_delete.php? deletesupportid='.$ticketid.'">Delete</a></button>
                            </div>
                            ';
                        }
                    }
                ?>
            </div>
        </div>
        <div class="user_crud" id="product_source_linker">
        <h2>Products</h2>
            <div class="user_crud_main_grid_titles product_crud_variant">
            <div class="user_crud_user_id">
                    <div class="username_title">product id</div>
                </div>
                <div class="user_crud_user_name">
                    <div class="username_title">img</div>
                </div>
                <div class="user_crud_user_email">
                    <div class="username_title">product name</div>
                </div>
                <div class="user_crud_user_password">
                    <div class="username_title">price</div>
                </div>
                <div class="user_crud_user_type">
                    <div class="username_title">final price</div>
                </div>
                <div class="user_crud_edit_button">
                    <div class="username_title">upload date</div>
                </div>
                <div class="user_crud_edit_button">
                    <div class="username_title">Update</div>
                </div>
                <div class="user_crud_edit_button">
                    <div class="username_title">Delete</div>
                </div>
            </div>
            <div class="user_crud_main_grid product_crud_main_grid_variaty">
                <?php 
                    $products_result = mysqli_query($connection, "SELECT * FROM products");
                    if($products_result){
                        while($products_row = mysqli_fetch_assoc($products_result)){
                            $id_product_result=$products_row['product_id'];
                            $main_img=$products_row['main_photo'];
                            $product_name=$products_row['product_name'];
                            $publish_date=$products_row['time'];
                            $product_price=$products_row['product_price'];
                            $product_final_price=$products_row['final_price'];
                            if($product_price == $product_final_price){ 
                                $match_color_selector = "matched_prices_color";
                                $match_color_selector_final = "matched_prices_color";
                            }else if($product_price !=  $product_final_price){
                                $match_color_selector = "matched_prices_color";
                                $match_color_selector_final = "umatched_prices_color";
                            }
                            echo '
                            <div class="user_crud_user_id">
                                <div class="first_answer">'.$id_product_result.'</div>
                            </div>
                            <div class="user_crud_user_name">
                                <img src=img/'.$main_img.' alt="product img" class="product_crud_img_box">
                            </div>
                            <div class="user_crud_user_email">
                                <div class="first_answer string_counter">'.$product_name.'</div>
                            </div>
                            <div class="user_crud_user_password">
                                <div class="first_answer '.$match_color_selector.'">'.$product_price.'$</div>
                            </div>
                            <div class="user_crud_user_type">
                                <div class="first_answer support_ticket_color '.$match_color_selector_final.'" id="userType">'.$product_final_price.'$</div>
                            </div>
                            <div class="user_crud_user_password">
                                <div class="first_answer">'.$publish_date.'</div>
                            </div>
                            <div class="user_crud_edit_button">
                                <button class="custom_for_button btn_9"><a href="editproduct.php? editproduct='.$id_product_result.'">Edit</a></button>
                            </div>
                            <div class="user_crud_edit_button">
                                <button class="custom_for_button btn_9"><a href="delete_product.php? deleteproductid='.$id_product_result.'">Delete</a></button>
                            </div>
                            ';
                        }
                    }
                ?>
            </div>
        </div>
        <div class="curd_user_add_grid">
            <div class="user_crud_add_user">
                <a href="crudadduser.php">
                    <i class='bx bx-plus plus_sign'></i>
                    <a href="crudadduser.php">Add User</a>
                </a>
            </div>
            <div class="product_crud_add_user">
            <a href="addProductBrakePoint.php">
                    <i class='bx bx-plus plus_sign'></i>
                    <a href="addProductBrakePoint.php">Add Product</a>
                </a>
            </div>
        </div>
    
        <div class="second_chart_to_do_list">
            <div class="second_chart">SECOND CHART</div>
            <div class="to_do_list">TO DO LIST</div>
        </div>
    </div>
    
    <?php
    include('footer.php'); 
    ?>
    <script src="chart.js"></script>
</html>