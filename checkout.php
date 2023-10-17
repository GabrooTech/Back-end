<?php
    include('db_connect.php');
    // session_start();
    
    // in case of guest there is no role so we need to asign coockies to make sure all visitors are tracked and checked
?>
<!DOCTYPE html>
<html lang="en">
    <?php
    include('head.php');
    include('aside.php');
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div class="checkout_container">
        <div class="check-out-elemnts">
                <div class="check-out-elemnt-first-div manles">
                    <img  alt="in-product-img" id="output" class="check-out-elemnts-main-img xzoom mnimg" draggable="false">
                    <!-- <div class="lens"></div> -->
                </div>
                <div class="check-out-elemnt-second-div">
                    <p class="check-out-elemnt-second-div-text" id="descriptionOutput"></p>
                    <div class="check-out-elemnt-second-div-price-tag">
                        <h1 class="check-out-elemnt-second-div-price-tag-element" id="price"></h1>
                    </div>
                </div>
                <div class="check-out-elemnt-third-div">
                    <div class="check-out-elemnt-third-div-altimiges altimiges">
                        <div class="check-out-elemnt-third-div-altimige coetdaf altimg" onclick="changeImage(this)">
                            <img alt="Product first-main alt imige"  id="altotp" class="coetdaf altmater" draggable="false" src="img/59933.jpg">
                        </div>
                        <div class="check-out-elemnt-third-div-altimige altimg filtimg" onclick="changeImage(this)">
                            <img alt="Product second alt imige" id="secalt" class="fiximg altmater" draggable="false" src="img/7922055.jpg">
                        </div>
                        <div class="check-out-elemnt-third-div-altimige altimg" onclick="changeImage(this)">
                            <img alt="Product third alt imige" id="thialt" class="fiximg altmater" draggable="false" src="img/chiefer.png">
                        </div>
                        <div class="check-out-elemnt-third-div-altimige altimg" onclick="changeImage(this)">
                            <img alt="Product fourth alt imige" id="foralt" class="fiximg altmater" draggable="false" src="img/gmouse.png">
                        </div>
                        <div class="check-out-elemnt-third-div-altimige coetdal altimg" onclick="changeImage(this)">
                            <img alt="Product fifth alt imige" id="fifalt" class="coetdal altmater" draggable="false" src="img/971.jpg">
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
            <div class="grif_escription_inner">
                <h1>Reason</h1>
                <p>Content</p>
            </div>
        </section>
    </div>
    <?php
    include('footer.php'); 
    ?>
    <script src="counter.js"></script>
    <script src="paginator.js"></script>
</html>