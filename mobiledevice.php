<?php
    include('db_connect.php');
    // session_start();
    
    // in case of guest there is no role so we need to asign coockies to make sure all visitors are tracked and checked
?>

    <?php
    include('head.php');
    include('aside.php');
    include('filter.php');
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
            <?php 
                    $products_result = mysqli_query($connection, "SELECT * FROM products");
                    if($products_result){
                        while($products_row = mysqli_fetch_assoc($products_result)){
                            $product_type = $products_row['product_type'];
                            $product_id = $products_row['product_id'];
                            if($product_type == 'Mobile device'){
                                $id_product_result=$products_row['product_id'];
                                $main_img=$products_row['main_photo'];
                                $product_name=$products_row['product_name'];
                                $publish_date=$products_row['time'];
                                $product_price=$products_row['product_price'];
                                $product_final_price=$products_row['final_price'];
                                $off_price=$products_row['off_price'];
                                $key_word=$products_row['link_word'];
                                $bg_color=$products_row['dominant_color'];
                                if($product_final_price != $product_price){
                                    $sale_checker = "sale_checker_true";
                                }else{
                                    $sale_checker = "sale_checker_false";
                                }
                                echo '
                                <div class="card id_'.$product_id.'">
                                    <div class="special_deal '.$sale_checker.'">'.$off_price.'%</div>
                                    <div class="card_img_box">
                                        <img src="img/'.$main_img.'" alt="check your internet connection">
                                    </div>
                                    <div class="content_box">
                                        <h3 class="product_name">'.$product_name.'</h3>
                                        <h2 class="product_price">'.$product_final_price.'₾</h2>
                                        <a href="full_product.php? productDescriptionId='.$id_product_result.'" class="add_to_cart add_button"><span>Check out</span></a>
                                    </div>
                                </div>
                                <style>
                                .id_'.$product_id.'::before{
                                    background-color: '.$bg_color.'
                                }
                                .id_'.$product_id.'::after{
                                    content: "'.$key_word.'"
                                }
                                .id_'.$product_id.':hover::after{
                                    color: '.$bg_color.'
                                }
                                .id_'.$product_id.':hover > .special_deal{
                                    color: '.$bg_color.';
                                }
                                </style>
                                ';
                            }
                        }
                    }
                ?>
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
    <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script>
        const viewPortWidth = window.innerWidth;
        if(viewPortWidth > 420){
            VanillaTilt.init(document.querySelectorAll(".card"),{
		        max: 25,
		        speed: 400
	        });
        }
    </script>
</html>