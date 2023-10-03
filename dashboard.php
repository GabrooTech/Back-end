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
                    <p>725</p>
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
            <div class="first_chart">
                <h1>Interes in products by sales</h1>
                <div id="chart_div"></div>
            </div>
        </div>
        <div class="user_crud">
            <!-- <form method="">
                <div class="user_crud_grid">
                    <div class="user_crud_username">
                        <label for="username">Username</label>
                        <input type="text" name="username">
                    </div>
                </div>
            </form> -->
            <h2>User checkBoard</h2>
        </div>
        <div class="curd_user_add_grid">
            <div class="user_crud_add_user">
                <a href="crudadduser.php">
                    <i class='bx bx-plus plus_sign'></i>
                    <a href="crudadduser.php">Add User</a>
                </a>
            </div>
            <div class="product_crud_add_user">
            <a href="#">
                    <i class='bx bx-plus plus_sign'></i>
                    <a href="#">Add Product</a>
                </a>
            </div>
        </div>
        <div class="product_crud">PRODUCTS CRUD</div>
        <div class="second_chart_to_do_list">
            <div class="second_chart">SECOND CHART</div>
            <div class="to_do_list">TO DO LIST</div>
        </div>
    </div>

    
    <?php
    include('footer.php'); 
    ?>
</html>