<?php 
    include('db_connect.php');
?>


<!DOCTYPE html>
<html lang="en">
    <?php
    include('head.php');
    // include('header.php');
    include('aside.php');
    include('maincontent.php');
    include('footer.php');
    
    ?>
    <script src="slidecount.js"></script>
    <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card"),{
		max: 25,
		speed: 400
	});
    </script>
</html>