<?php

/**main page of admin account */

/**opening add picking data from database database */
$cons = "";
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
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Admin home page </title>
    <link rel="stylesheet" href="css/main_page.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body onload="startTime()">
    <?php if (isset($user)) : ?>


        <!--start of navbar -->

        <nav>
            <div class="navbar">
                <i class='bx bx-menu'></i>
                <div class="logo"><a href="test_home_page.php">Home : <?= $cons ?> <?= htmlspecialchars($user["firstname"]) ?> <?= htmlspecialchars($user["middlename"]) ?> <?= htmlspecialchars($user["lastname"]) ?> </a></div>
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
                                <li><a href="#">LIST</a></li>
                                <li><a href="#">CHANGE DATA</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">DATABASE</a>
                            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                            <ul class="htmlCss-sub-menu sub-menu">
                                <li><a href="create_object1.php">CREATE OBJECT</a></li>
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
        <script src="js/main_page.js"></script>
        <br>
        <br>
        <br>



        <!--end of navbar -->
        <p>Users first name : <?= htmlspecialchars($user["firstname"]) ?></p>
        <p>Users middle name : <?= htmlspecialchars($user["middlename"]) ?></p>
        <p>Users last name : <?= htmlspecialchars($user["lastname"]) ?></p>
        <p>Users email : <?= htmlspecialchars($user["email"]) ?></p>
        <p>Users phone Code : <?= htmlspecialchars($user["countryCode"]) ?></p>
        <p>Users phone : <?= htmlspecialchars($user["phone"]) ?></p>
        <p>Users password_hash : <?= htmlspecialchars($user["password_hash"]) ?></p>
        <p>Users position : <?= htmlspecialchars($user["position"]) ?></p>
    <?php else : ?>
    <?php endif; ?>
</body>

</html>