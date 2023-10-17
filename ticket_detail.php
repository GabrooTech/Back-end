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
    // include('db_connect.php');
    // session_start();
    $reason = $content = $ticketdate = $ticketstate = '';
    $ticketid = $_GET['ticketDetailId'];
    $id = $_SESSION["id"];
    $soldved_ticket_row = mysqli_query($connection, "SELECT * FROM support WHERE ticket_id = $ticketid");
    $already_solved = mysqli_fetch_array($soldved_ticket_row);
    $reason = $already_solved['reason'];
    $content = $already_solved['content'];
    $ticketdate = $already_solved['submit_time'];
    $ticketstate = $already_solved['ticket_state'];
    if($ticketstate == "unsolved"){ 
        $stateColorSelector = "tikcet_state_outsource";
    }else if($ticketstate == "solved"){ $stateColorSelector = "tikcet_state_outsource_solved";}
?>

<!DOCTYPE html>
<html lang="en">
    <?php
    include('head.php');
    include('aside.php');
    ?>
    <div class="user_crud_container ticket_detailed_container">
        <div class="detailed_ticket_box_header">
            <h1>Main Subject: <strong class="strong_for_support"><?php echo htmlspecialchars($reason)?></strong></h1>
        </div>
        <div class="detailed_ticket_box">
            <div class="ticket_content">Ticket Content</div>
            <div class="ticket_content_box"><?php echo htmlspecialchars($content)?></div>
        </div>
        <div class="ticket_support_footer">
            <div class="support_right_box"><?php echo htmlspecialchars($ticketdate)?></div>
            <?php echo '<div class="left_box '.$stateColorSelector.'">'.$ticketstate.'</div>' ?>
            <a href="dashboard.php#ticketsource_linker" class="ticket_detail_getback"><button>Go back to dashboard</button></a>
        </div>
    </div>
    
    <?php
    include('footer.php'); 
    ?>
</html>