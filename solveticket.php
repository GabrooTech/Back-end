<?php 
    include('db_connect.php');
    include("head.php");
    session_start();
    $id = $_SESSION["id"];
    $result = mysqli_query($connection, "SELECT * FROM registration WHERE id = $id");
    $row = mysqli_fetch_array($result);
    if($row["userType"] != 'admin'){
        header('Location: mainpage.php');
    }
    if(isset($_GET['solveticketid'])){
        $ticketid = $_GET['solveticketid'];
        $soldved_ticket_row = mysqli_query($connection, "SELECT * FROM support WHERE ticket_id = $ticketid");
        $already_solved = mysqli_fetch_array($soldved_ticket_row);
        if($already_solved["ticket_state"] == 'solved'){
            echo '<script>alert("It is already solved")</script><a href="dashboard.php#ticketsource_linker" class="solved_probelm_getback"><button>Go Back</button></a>';
        }else{
            $sql = "UPDATE support SET ticket_state = 'solved' WHERE ticket_id = $ticketid";
            $resultcrud = mysqli_query($connection, $sql);
            if($resultcrud){
                header('Location: dashboard.php#ticketsource_linker');
            }else{
                "Somthing went wrong!";
            }
        }
    }
?>
