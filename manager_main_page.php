<?php
/**main page of admin account */

session_start();

if (isset($_SESSION["user2_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user2
            WHERE id = {$_SESSION["user2_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Manager page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <h1>Home</h1>
    
    <?php if (isset($user)): ?>
        
        <p>Users first name : <?= htmlspecialchars($user["firstname"]) ?></p>
        <p>Users middle name : <?= htmlspecialchars($user["middlename"]) ?></p>
        <p>Users last name : <?= htmlspecialchars($user["lastname"]) ?></p>
        <p>Users email : <?= htmlspecialchars($user["email"]) ?></p>
        <p>Users phone Code : <?= htmlspecialchars($user["countryCode"]) ?></p>
        <p>Users phone : <?= htmlspecialchars($user["phone"]) ?></p>
        <p>Users password_hash : <?= htmlspecialchars($user["password_hash"]) ?></p>
        <p>Users position : <?= htmlspecialchars($user["position"]) ?></p>
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.php">sign up</a></p>
        
    <?php endif; ?>
    
    <div id="txt"></div>
    <script>
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
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</body>
</html>
    
    
    
    