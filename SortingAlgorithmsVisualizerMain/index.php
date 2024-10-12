<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="profile.css">
</head>
<body class="cl">
    
    
    
    <?php if (isset($user)): ?>
        <div id=container>
        <h1>My Profile</h1>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        <p>What would you like to learn today</p>

        <p><a href="index.html">Explore site</a></p>
        <p></p>
        
        <p><a href="logout.php">Log out</a></p>
        
        </div>

    <?php else: ?>
        
        <h1 style="margin:auto">Home</h1>
        
        <p><a href="login.php" style="margin:auto">Log in</a> or <a href="signup.html">Sign up</a></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    