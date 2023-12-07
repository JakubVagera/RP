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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/main_page.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
    

    <!--<form method="post" name="myform" action="create_object1.php" novalidate>-->
    <form method="post" name="myform" novalidate>
      <label for="new_object"></label>
      <p><a href="admin_main_page.php">Return </a></p>
      <?php
      function create_table()
      {
        $is_empty = true;
        if (!empty($_POST["new_object"])) {
          $is_empty = false;
        }
        if ($is_empty == false) {
          $name = $_POST['new_object'];
          $replacement = array(" ", "/", "*", "'", "[");
          $slot = str_replace($replacement, '_', $name);
          /*echo ($slot);*/



          $mysqli = require __DIR__ . "/database.php";


          $conn = new mysqli($host, $username, $password, $dbname);
          $query = "select 1 from $slot ";
          $isTableExists = mysqli_query($conn, $query);

          if (!$isTableExists) {
            echo "Table do not exists";

            $sql = "CREATE TABLE $slot (
     id_object INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     sub_table_name VARCHAR(255) NOT NULL,
     sub_real_table_name VARCHAR(255) NOT NULL
      )";

            $conn->query($sql);



            $sql1 = "INSERT INTO list_of_tables (table_name, real_table_name)
        VALUES (?,?)";

            $stmt = $mysqli->stmt_init();
            $stmt->prepare($sql1);

            $stmt->bind_param(
              "ss",
              $slot,
              $_POST["new_object"]
            );
            $stmt->execute();
            $conn->close();
          } else {
            echo "Table exists";
            $conn->close();
          }
        }
      }
      ?>
      <input id="new_object" name="new_object" type="text">
      <button onclick="<?php create_table() ?>">Submit</button>
      <?php
      session_start();
      if (isset($_SESSION["user2_id"])) {

        $mysqli = require __DIR__ . "/database.php";

        $sql = "SELECT * FROM user2
              WHERE id = {$_SESSION["user2_id"]}";

        $result = $mysqli->query($sql);

        $user = $result->fetch_assoc();
      }

      $mysqli2 = require __DIR__ . "/database.php";
      $sql2 = " SELECT * FROM list_of_tables ORDER BY id_tables DESC ";
      $result2 = $mysqli2->query($sql2);
      $result3 = $mysqli2->query($sql2);
      $mysqli2->close();
      ?>
      <h1>Colleagues</h1>
      <!-- source: https://www.geeksforgeeks.org/how-to-fetch-data-from-localserver-database-and-display-on-html-table-using-php/ -->
      <table>
        <tr>
          <th>ID</th>
          <th>SQL Name</th>
          <th>Real name</th>
        </tr>
        <section>
          <?php
          /**repeats printing rows */
          while ($rows = $result2->fetch_assoc()) {
          ?>
            <tr>
              <td><?php echo $rows['id_tables']; ?></td>
              <td><?php echo $rows['table_name']; ?></td>
              <td><?php echo $rows['real_table_name']; ?></td>
            </tr>
          <?php
          }
          ?>
        </section>
      </table>
      <br>
      <?php
      /**repeats printing rows */
      while ($rows1 = $result3->fetch_assoc()) {
      ?>
        <input type="checkbox" id="box" name="box" value="<?php $rows1['table_name']; ?>">
        <label for="box"> <?php echo $rows1['real_table_name']; ?></label>
        <br>
      <?php
      }
      ?>
    </form>

  <?php else : ?>
  <?php endif; ?>

</body>

</html>