<?php 
    include('head.php');
    include('db_connect.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<div class="main_filter_box">
    <div class="inner_filter_container">
        <div class="filter_variaties">
            <div class="main_filter_branch">
                <h2>From</h2>
                <input type="text" class="main_filter_branch_from_input">
                <h2>To</h2>
                <input type="text"  class="main_filter_branch_to_input">
                <h2>Brands</h2>
                <select name="brands" class="brand_selector">
                    <option selected>INTEL</option>
                    <option>AMD</option>
                    <option>TOSHIBA</option>
                    <option>NVIDEA</option>
                    <option>NZXT</option>
                    <option>CORSAIR</option>
                    <option>EVGA</option>
                </select>
            </div>
            <div class="filtered_products_variaties">
                    <div class="filtered_product_common_class_outsorce filtered_product_box_animator">
                        <div class="filtered_product_common_class">CPU</div>
                    </div>
                    <div class="filtered_product_common_class_outsorce filtered_product_box_animator">
                        <div class="filtered_product_common_class">GPU</div>
                    </div>
                    <div class="filtered_product_common_class_outsorce filtered_product_box_animator">
                        <div class="filtered_product_common_class">HDD</div>
                    </div>
                    <div class="filtered_product_common_class_outsorce filtered_product_box_animator">
                        <div class="filtered_product_common_class">SSD</div>
                    </div>
                    <div class="filtered_product_common_class_outsorce filtered_product_box_animator">
                        <div class="filtered_product_common_class">RAM</div>
                    </div>
                    <div class="filtered_product_common_class_outsorce filtered_product_box_animator">
                        <div class="filtered_product_common_class">CASE</div>
                    </div>
                    <div class="filtered_product_common_class_outsorce filtered_product_box_animator">
                        <div class="filtered_product_common_class">MOTHERBOARD</div>
                    </div>
                    <div class="filtered_product_common_class_outsorce filtered_product_box_animator">
                        <div class="filtered_product_common_class">PSU</div>
                    </div>
                    <div class="filtered_product_common_class_outsorce filtered_product_box_animator">
                        <div class="filtered_product_common_class">COOLER</div>
                    </div>
                </div>
        </div>
    </div>
    <div class="filter_slider">
    <i class='bx bxs-down-arrow down_arrow'></i>
    </div>
</div>

<?php
    include('footer.php'); 
?>