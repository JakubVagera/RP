<?php

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
<!--not finnished -->
<!--code that generates new schifts -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/main_page.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

  <?php if (isset($user)) : ?>
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
    <br>
    <h3>Create new schift</h3>
    <br>
    <label for="start">Where schift starts:</label>
    <input type="date" id="start" name="start">
    <br>
    <label for="repeat">After what time they should repeat:</label>
    <input type="text" id="repeat" name="repeat">
    <br>
    <label>Pick certain days</label>
    <br>
    <input type="checkbox" id="monday" name="monday">
    <label for="monday"> Monday</label><br>
    <input type="checkbox" id="tuesday" name="tuesday">
    <label for="tuesday"> Tuesday</label><br>
    <input type="checkbox" id="wednesday" name="wednesday">
    <label for="wednesday"> Wednesday</label><br>
    <input type="checkbox" id="thursday" name="thursday">
    <label for="thursday"> Thursday</label><br>
    <input type="checkbox" id="friday" name="friday">
    <label for="Friday"> Friday</label><br>
    <input type="checkbox" id="saturday" name="saturday">
    <label for="saturday"> Saturday</label><br>
    <input type="checkbox" id="sunday" name="sunday">
    <label for="sunday"> Sunday</label><br>
    <script>
      document.getElementById('start').valueAsDate = new Date();
    </script>
  <?php else : ?>
  <?php endif; ?>
</body>

</html>