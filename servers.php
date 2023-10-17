<?php
    include('db_connect.php');
    // session_start();
    
    // in case of guest there is no role so we need to asign coockies to make sure all visitors are tracked and checked
?>

    <?php
    include('head.php');
    include('aside.php');
    include('serversfilter.php');
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div class="product_list_container">
        <div class="search-box" id="schbox">
            <input class="search-txt" type="text" name="" placeholder="Type to search" id="search-input" onkeyup="search()">
            <a href="#" class="search-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>
        <div class="product_layout_grid" id="productList">
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">sduhfe</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="checkout.php" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">jetet</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">gjety</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <div class="card">
                <div class="special_deal">50%</div>
                <div class="card_img_box">
                    <img src="img/test.png" alt="check your internet connection">
                </div>
                <div class="content_box">
                    <h3 class="product_name">1</h3>
                    <h2 class="product_price">₾329</h2>
                    <a href="#" class="add_to_cart add_button"><span>Check out</span></a>
                </div>
            </div>
            <br>
            <h5 class="search_issue">Product with this name can't be found</h5>
        </div>
        
        <div class="paginator">
            <ul id="pgul">

            </ul>
        </div>
    </div>

    <script src="filter.js"></script>
    <script src="paginator.js"></script>
    <?php
    include('footer.php'); 
    ?>
</html>