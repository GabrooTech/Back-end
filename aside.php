<?php 
    ini_set('display_errors', 0);
    include('head.php');
    include('db_connect.php');
    session_start();
    if(!empty($_SESSION["id"])){
        $id = $_SESSION["id"];
        if($username == $row["username"] && $passwords == $row['passwords']){
            $result = mysqli_query($connection, "SELECT * FROM registration WHERE id = $id");
            $row = mysqli_fetch_array($result);
        }
    }
    $adminsCounter = $_SESSION["adminsCounter"];
    $userCounter = $_SESSION["userCounter"];
    if($row['userType'] == 'admin' && $adminsCounter == 1){
        echo '
        <aside class="sidebar" id="navbar">
        <div class="slider" id="spdr"></div>
        <img src="img\logo.png" alt="logo" class="company_logo null_txtdecor">
        <ul class="sidebar_ul">
            <li class="aside_list">
                <div class="bar" id="btn">
                    <i class="fa-solid fa-bars" id="btn"></i>
                </div>
            </li>
            <li class="aside_list">
                <a href="mainpage.php" class="aside_link">
                    <div class="test">
                        <div class="home_color tooltip_asigner">
                            <i class="bx bx-home-smile null_txtdecor home_center" >
                            </i>
                        </div>
                        <span class="tooltip">Home</span>
                    </div>
                </a>
            </li>
            <li class="aside_list">
            <a href="#" class="aside_link">
                <div class="test">
                    <div class="dashboard_color tooltip_asigner">
                        <i class="bx bxs-dashboard null_txtdecor dashboard_center" >
                        </i>
                    </div>
                    <span class="tooltip">Dashboard</span>
                </div>
            </a>
        </li>
            <li class="aside_list">
                <a href="#" class="aside_link">
                    <div class="test">
                        <div class="chat_color tooltip_asigner">
                            <i class="bx bx-chat null_txtdecor chat_center">
                            </i>
                        </div>
                        <span class="tooltip">Chat</span>
                    </div>
                </a>
            </li>
            <li class="aside_list">
                <a href="#" class="aside_link">
                    <div class="test">
                        <div class="forum_color tooltip_asigner">
                            <i class="bx bx-message-square-add null_txtdecor forum_center">
                            </i>
                        </div>
                        <span class="tooltip">Forum</span>
                    </div>
                </a>
            </li>
            <li class="aside_list bottom"> 
            <div class="user"><?php echo $row["username"] ?></div>
                <a href="logout.php" class="aside_link">
                    <div class="test">
                        <div class="login_bar tooltip_asigner">
                            <i class="bx bx-log-out null_txtdecor login_center"></i>
                        </div>
                        <span class="tooltip_login">Log out</span>
                    </div>
                </a>
            </li>
        </ul>
    </aside>
    ';
    }
    else if($row['userType'] == 'user' && $userCounter == 1){
        echo '
        <aside class="sidebar" id="navbar">
        <div class="slider" id="spdr"></div>
        <img src="img\logo.png" alt="logo" class="company_logo null_txtdecor">
        <ul class="sidebar_ul">
            <li class="aside_list">
                <div class="bar" id="btn">
                    <i class="fa-solid fa-bars" id="btn"></i>
                </div>
            </li>
            <li class="aside_list">
                <a href="mainpage.php" class="aside_link">
                    <div class="test">
                        <div class="home_color tooltip_asigner">
                            <i class="bx bx-home-smile null_txtdecor home_center" >
                            </i>
                        </div>
                        <span class="tooltip">Home</span>
                    </div>
                </a>
            </li>
            <li class="aside_list">
                <a href="#" class="aside_link">
                    <div class="test">
                        <div class="chat_color tooltip_asigner">
                            <i class="bx bx-chat null_txtdecor chat_center">
                            </i>
                        </div>
                        <span class="tooltip">Chat</span>
                    </div>
                </a>
            </li>
            <li class="aside_list">
                <a href="#" class="aside_link">
                    <div class="test">
                        <div class="forum_color tooltip_asigner">
                            <i class="bx bx-message-square-add null_txtdecor forum_center">
                            </i>
                        </div>
                        <span class="tooltip">Forum</span>
                    </div>
                </a>
            </li>
            <li class="aside_list bottom"> 
            <div class="user"><?php echo $row["username"] ?></div>
                <a href="logout.php" class="aside_link">
                    <div class="test">
                        <div class="login_bar tooltip_asigner">
                            <i class="bx bx-log-out null_txtdecor login_center"></i>
                        </div>
                        <span class="tooltip_login">Log out</span>
                    </div>
                </a>
            </li>
        </ul>
    </aside>
        ';
    }elseif($row['userType']  != 'admin' || 'user'){
        echo '
        <aside class="sidebar" id="navbar">
        <div class="slider" id="spdr"></div>
        <img src="img\logo.png" alt="logo" class="company_logo null_txtdecor">
        <ul class="sidebar_ul">
            <li class="aside_list">
                <div class="bar" id="btn">
                    <i class="fa-solid fa-bars" id="btn"></i>
                </div>
            </li>
            <li class="aside_list">
                <a href="mainpage.php" class="aside_link">
                    <div class="test">
                        <div class="home_color tooltip_asigner">
                            <i class="bx bx-home-smile null_txtdecor home_center" >
                            </i>
                        </div>
                        <span class="tooltip">Home</span>
                    </div>
                </a>
            </li>
            <li class="aside_list">
                <a href="#" class="aside_link">
                    <div class="test">
                        <div class="chat_color tooltip_asigner">
                            <i class="bx bx-chat null_txtdecor chat_center">
                            </i>
                        </div>
                        <span class="tooltip">Chat</span>
                    </div>
                </a>
            </li>
            <li class="aside_list">
                <a href="#" class="aside_link">
                    <div class="test">
                        <div class="forum_color tooltip_asigner">
                            <i class="bx bx-message-square-add null_txtdecor forum_center">
                            </i>
                        </div>
                        <span class="tooltip">Forum</span>
                    </div>
                </a>
            </li>
            <li class="aside_list bottom"> 
            <div class="user"><?php echo $row["username"] ?></div>
                <a href="logout.php" class="aside_link">
                    <div class="test">
                        <div class="login_bar tooltip_asigner">
                            <i class="bx bx-log-in null_txtdecor login_center"></i>
                        </div>
                        <span class="tooltip_login">Log in</span>
                    </div>
                </a>
            </li>
        </ul>
    </aside>
        ';
    }
?>








