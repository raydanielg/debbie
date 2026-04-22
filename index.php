<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Simple Login System</h1>
        <p>A basic PHP authentication system with sessions and password hashing.</p>
        
        <div class="nav">
            <?php if (isLoggedIn()): ?>
                <a href="dashboard.php" class="btn">Dashboard</a>
                <a href="logout.php" class="btn btn-secondary">Logout</a>
            <?php else: ?>
                <a href="login.php" class="btn">Login</a>
                <a href="register.php" class="btn btn-secondary">Register</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
