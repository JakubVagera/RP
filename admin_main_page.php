<?php
/**main page of admin account */

/**opening add picking data from database database */
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
    <title>Admin page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body onload="startTime()">
    
    <h1>Home</h1>
    
    <?php if (isset($user)): ?>
        <!-- Print of connected user's data -->
        <p>Users first name : <?= htmlspecialchars($user["firstname"]) ?></p>
        <p>Users middle name : <?= htmlspecialchars($user["middlename"]) ?></p>
        <p>Users last name : <?= htmlspecialchars($user["lastname"]) ?></p>
        <p>Users email : <?= htmlspecialchars($user["email"]) ?></p>
        <p>Users phone Code : <?= htmlspecialchars($user["countryCode"]) ?></p>
        <p>Users phone : <?= htmlspecialchars($user["phone"]) ?></p>
        <p>Users password_hash : <?= htmlspecialchars($user["password_hash"]) ?></p>
        <p>Users position : <?= htmlspecialchars($user["position"]) ?></p>
        <p><a href="logout.php">Log out</a></p>
        <p><a href="create_schift.php">Create schift</a></p>
        <p><a href="create_object1.php">Create object</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.php">sign up</a></p>
        <?php endif; ?>
    
    <div id="txt"></div>
    <script>
        /**live time clock */
        /**source: https://www.w3schools.com/js/tryit.asp?filename=tryjs_timing_clock  */
function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i}; 
  return i;
}
</script>
<h1>Colleagues</h1>
    <!-- source: https://www.geeksforgeeks.org/how-to-fetch-data-from-localserver-database-and-display-on-html-table-using-php/ -->
        <table>
            <tr>
                <th>ID</th>
                <th>First</th>
                <th>Email</th>
                <th>Position</th>
            </tr>
            <section>
            <?php 
            /**repeats printing rows */
                while($rows=$result1->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['firstname'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['position'];?></td>
            </tr>
            <?php
                }
            ?>
            </section>
        </table>
</body>
</html>
    
    
    
    