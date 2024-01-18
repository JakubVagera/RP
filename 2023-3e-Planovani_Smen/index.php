<?php
/** Test version main login page */
/**It haso use in program */
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
    <title>Home</title>
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
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    
