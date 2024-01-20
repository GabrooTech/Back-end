<?php
    include('db_connect.php');
    session_start();
    $main_img = $product_name = $product_price = $link_word = $off_price = $final_price = $dominant_color =
    $second_img = $third_img = $fourth_img = $fifth_img = $product_description = $time = '';
    $id_product_result = $_GET['productDescriptionId'];
    $result = mysqli_query($connection, "SELECT * FROM products WHERE product_id = $id_product_result");
    $product_row = mysqli_fetch_array($result);
    $main_img = $product_row['main_photo'];
    $product_name = $product_row['product_name'];
    $product_price = $product_row['product_price'];
    $link_word = $product_row['link_word'];
    $off_price = $product_row['off_price'];
    $final_price = $product_row['final_price'];
    $dominant_color = $product_row['dominant_color'];
    $second_img = $product_row['second_img'];
    $third_img = $product_row['third_img'];
    $fourth_img = $product_row['fourth_img'];
    $fifth_img = $product_row['fifth_img'];
    $product_description = $product_row['product_description'];
    $time = $product_row['time'];
?>

<!DOCTYPE html>
<html lang="en">
    <?php
    include('head.php');
    include('aside.php');
    ?>
    <div class="checkout_container">
        <div class="check-out-elemnts">
                <div class="check-out-elemnt-first-div manles">
                    <img src="img/<?php echo ''.$main_img.''?>" alt="in-product-img" id="output" class="check-out-elemnts-main-img xzoom mnimg" draggable="false">
                </div>
                <div class="check-out-elemnt-second-div">
                    <p class="check-out-elemnt-second-div-text" id="descriptionOutput"><?php echo ''.$product_description.''?></p>
                    <div class="check-out-elemnt-second-div-price-tag">
                        <h1 class="check-out-elemnt-second-div-price-tag-element" id="price"><?php echo ''.$final_price.''?>₾</h1>
                    </div>
                </div>
                <div class="check-out-elemnt-third-div">
                    <div class="check-out-elemnt-third-div-altimiges altimiges">
                        <div class="check-out-elemnt-third-div-altimige coetdaf altimg" onclick="changeImage(this)">
                            <img alt="Product first-main alt imige"  id="altotp" class="coetdaf altmater" draggable="false" src="img/<?php echo ''.$main_img.''?>">
                        </div>
                        <div class="check-out-elemnt-third-div-altimige altimg filtimg" onclick="changeImage(this)">
                            <img alt="Product second alt imige" id="secalt" class="fiximg altmater" draggable="false" src="img/<?php echo ''.$second_img.''?>">
                        </div>
                        <div class="check-out-elemnt-third-div-altimige altimg" onclick="changeImage(this)">
                            <img alt="Product third alt imige" id="thialt" class="fiximg altmater" draggable="false" src="img/<?php echo ''.$third_img.''?>">
                        </div>
                        <div class="check-out-elemnt-third-div-altimige altimg" onclick="changeImage(this)">
                            <img alt="Product fourth alt imige" id="foralt" class="fiximg altmater" draggable="false" src="img/<?php echo ''.$fourth_img.''?>">
                        </div>
                        <div class="check-out-elemnt-third-div-altimige coetdal altimg" onclick="changeImage(this)">
                            <img alt="Product fifth alt imige" id="fifalt" class="coetdal altmater" draggable="false" src="img/<?php echo ''.$fifth_img.''?>">
                        </div>
                    </div>
                </div>
                <div class="check-out-elemnt-fourth-div">
                    <a href="cart.html">
                        <div class="counter-container">
                            <span id="counter">1</span>
                            <i class='bx bx-cart'></i>
                        </div>
                    </a>
                    <button id="add-animation">Add to Cart</button>
                </div>
        </div>
        <section class="grif_description">
                <?php 
                // echo "working";
                    $brif_field_results = mysqli_query($connection, "SELECT * FROM fields");
                    $brif_field_results_second = mysqli_query($connection, "SELECT * FROM fields");
                    $brif_field_content_results = mysqli_query($connection, "SELECT * FROM fields_content");
                    $products_result = mysqli_query($connection, "SELECT * FROM products");
                    while($products_row_field_second = mysqli_fetch_assoc($brif_field_results_second)){
                        $fetched_fields_id_second = $products_row_field_second['id'];
                        $fetched_fields_last_id = $fetched_fields_id_second;
                    }
                    for($i = $fetched_fields_id_second; $i != 0; $i--){
                        $fetched_fields_id_array[$i] = $i;
                    }
                    $reversed_fetcched_field_id_array = array_reverse($fetched_fields_id_array);
                    if($brif_field_results && $brif_field_content_results && $products_result){
                        while($products_row_field = mysqli_fetch_assoc($brif_field_results)){
                            $products_row_content = mysqli_fetch_assoc($brif_field_content_results);
                            $main_products = mysqli_fetch_assoc($products_result);
                            $product_id = $products_row_content['product_id'];
                            $fetched_product_id = $products_row_content['field_id'];
                            $fetched_product_content = $products_row_content['content'];
                            $fetched_fields_id = $products_row_field['id'];
                            for($i = $fetched_fields_id_second; $i != 0; $i--){
                                if($fetched_fields_id_second[$i] == $reversed_fetcched_field_id_array[$i] && $product_id == $id_product_result){
                                    $matching_id_name = mysqli_query($connection, "SELECT * FROM fields WHERE id = $fetched_product_id");
                                    $matching_id_assoc = mysqli_fetch_assoc($matching_id_name);
                                    $matching_id_name_result = $matching_id_assoc['name'];
                                    echo '
                                    <div class="grif_escription_inner">
                                        <h1>'.$matching_id_name_result.'</h1>
                                        <p>'.$fetched_product_content.'</p>
                                    </div>
                                    ';
                                }
                            }
                        }
                    }
                ?>
        </section>
    </div>
    
    <script src="counter.js"></script>
    <script src="paginator.js"></script>
    <?php
    include('footer.php'); 
    ?>
</html>

