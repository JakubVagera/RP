<?php

/**Main page of admin account */

/**Opening add picking data from database database */
$cons = "";
$space = "";
session_start();

if (isset($_SESSION["user2_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user2
            WHERE id = {$_SESSION["user2_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

$mysqli1 = require __DIR__ . "/database.php";
$sql1 = " SELECT * FROM user2 ORDER BY id DESC ";
$result1 = $mysqli1->query($sql1);
$mysqli1->close();

?>

<!DOCTYPE html>
<html>

<head>
    <title>EMPLOYEES LIST</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main_page.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /**CSS for popup*/
        /**Source - https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_popup */
        .cont {
            margin-bottom: 25px;
            border: 1px solid;
            margin: auto;
            width: 80%;
            padding: 10px;
            box-shadow: 5px 10px #888888;
        }
        .head{
            margin: auto;
            width: 80%;
            padding: 10px;
            margin-bottom: 25px;
        }

        .popup {
            position: relative;
            display: inline-block;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* The actual popup */
        .popup .popuptext {
            visibility: hidden;
            width: 160px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 8px 0;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -80px;
        }

        /* Popup arrow */
        .popup .popuptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        /* Toggle this class - hide and show the popup */
        .popup .show {
            visibility: visible;
            -webkit-animation: fadeIn 1s;
            animation: fadeIn 1s;
        }

        .popup .disapear {
            visibility: visible;
            -webkit-animation: fadeOut 1s;
            animation: fadeOut 1s;
        }

        /* Add animation (fade in the popup) */
        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>
</head>

<body onload="startTime()">

    <?php if (isset($user)) : ?>



        <nav>
            <div class="navbar">
            
                <i class='bx bx-menu'></i>
                <div class="logo"><a href="admin_main_page.php">Home : <?= $cons ?> <?= htmlspecialchars($user["firstname"]) ?> <?= htmlspecialchars($user["middlename"]) ?> <?= htmlspecialchars($user["lastname"]) ?> </a></div>
                <div class="nav-links">
                    <div class="sidebar-logo">
                        <span class="logo-name">Home page</span>
                        <i class='bx bx-x'></i>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="#">EMPLOYEES</a>
                            <i class='bx bxs-chevron-down js-emarrow arrow '></i>
                            <ul class="em-sub-menu sub-menu">
                                <li><a href="signup.php">ADD TO SYSTEM</a></li>
                                <li><a href="list_of_employees.php">LIST</a></li>
                                <li><a href="#">CHANGE DATA</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">DATABASE</a>
                            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                            <ul class="htmlCss-sub-menu sub-menu">
                                <li><a href="create_object.php">CREATE OBJECT</a></li>
                                <li><a href="create_shift.php">CREATE SHIFT</a></li>
                                <li><a href="#">CURRENT SCHEDULE</a></li>
                                <li class="more">
                                    <span><a href="#">More</a>
                                        <i class='bx bxs-chevron-right arrow more-arrow'></i>
                                    </span>
                                    <ul class="more-sub-menu sub-menu">
                                        <li><a href="#"></a></li>
                                        <li><a href="#">Pre-loader</a></li>
                                        <li><a href="#">Glassmorphism</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">HISTORY</a>
                            <i class='bx bxs-chevron-down js-arrow arrow '></i>
                            <ul class="js-sub-menu sub-menu">
                                <li><a href="#">Dynamic Clock</a></li>
                                <li><a href="#">Form Validation</a></li>
                                <li><a href="#">Card Slider</a></li>
                                <li><a href="#">Complete Website</a></li>
                            </ul>
                        </li>
                        <li><a href="#">STATISTICS</a></li>
                        <li><a href="logout.php">LOG OUT</a></li>
                    </ul>
                </div>
               
                <div class="search-box">
                    <i class='bx bx-search'></i>
                    <div class="input-box">
                        <input type="text" placeholder="Search...">
                    </div>
                </div>
                
            </div>
        </nav>

        <br><br>

        <div id="txt"></div>
        <script src="js/main_page.js"></script>





        <?php
        $mysqli2 = require __DIR__ . "/database.php";
        $sql2 = " SELECT * FROM user2 ORDER BY id ASC ";
        $result2 = $mysqli2->query($sql2);
        $result3 = $mysqli2->query($sql2);
        $mysqli2->close();
        ?>
        <div class="head">
        <h1>Colleagues</h1>
        </div>

        <?php
        /**Repeats print of rows */
        while ($rows = $result3->fetch_assoc()) {
        ?>
            <div id="<?php echo $rows['id'] ?>div" class="cont">

                <p><?php echo $rows['firstname']; ?> <?php echo $rows['middlename']; ?> <?php echo $rows['lastname']; ?> -
                    <?php
                    if ($rows['position'] == "admin") {
                        echo "Admin";
                    } else if ($rows['position'] == "fulltime_employee") {
                        echo "HPP";
                    } else if($rows['position'] == "manager") {
                        echo "Manager";
                    }else{
                        echo "DPP";
                    }
                    ?>

                </p>
                <div class="popup">
                    <button id="<?php echo $rows['id'] ?>" style="display:inline" onclick="copyfunction1(this.id)"></button>
                    <p style="display:inline">&nbsp;&nbsp;</p>
                    <p id="<?php echo $rows['id'] ?> p1" style="display:inline"><?php echo $rows['email']; ?></p>
                    <span class="popuptext" id="<?php echo $rows['id'] ?> pop1">Email copied</span>
                </div>
                <br>
                <div class="popup">
                    <button id="<?php echo $rows['id'] ?>" style="display:inline" onclick="copyfunction2(this.id)"></button>
                    <p style="display:inline">&nbsp;&nbsp;</p>
                    <p id="<?php echo $rows['id'] ?> p2+" style="display:inline">+<?php echo $rows['countryCode'];?></p>
                    <p style="display:inline">&nbsp;</p>
                    <p id="<?php echo $rows['id'] ?> p2" style="display:inline"><?php echo $rows['phone']; ?></p>
                    <span class="popuptext" id="<?php echo $rows['id'] ?> pop2">Phone copied</span>
                </div>

            </div>
            <br>
        <?php
        }
        ?>
    <?php else : ?>

        <p>You are log out. You can log in <a href="login.php">HERE</a></p>
    <?php endif; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!--Code for copy buttons -->
     <!-- Source - https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_copy_clipboard-->
    <script>
        function copyfunction1(clicked_id) {
            var s = clicked_id;
            var t = s + " p1";
            var copyText = document.getElementById(t).innerText;
            var h = s + " pop1";
            var popup = document.getElementById(h);
            popup.classList.toggle("show");
            var l = "#" + h;
            const q = document.getElementById(h);

            setTimeout(() => {
                q.style.opacity = 0;
            }, 2000);
            navigator.clipboard.writeText(copyText);
        }

        function copyfunction2(clicked_id) {
            var s = clicked_id;
            var t = s + " p2";
            var z = t + "+"
            var copyText1 = document.getElementById(t).innerText;
            var copyText2 = document.getElementById(z).innerText;
            var ct = copyText2 + copyText1;
            var x = s + " pop2";
            var popup = document.getElementById(x);
            popup.classList.toggle("show");
            const i = document.getElementById(x);
            setTimeout(() => {
                i.style.opacity = 0;
            }, 2000);

            navigator.clipboard.writeText(ct);

        }
    </script>
</body>

</html>