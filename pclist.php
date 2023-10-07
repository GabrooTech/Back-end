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
    <div class="container">

    </div>

    <script src="filter.js"></script>
    <?php
    include('footer.php'); 
    ?>
</html>