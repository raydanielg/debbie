<?php
require_once 'config.php';
requireLogin();

// Get user info
$stmt = $pdo->prepare("SELECT username, email, created_at FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Simple Login System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="dashboard">
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
            
            <div class="user-info">
                <h3>Your Profile</h3>
                <table>
                    <tr>
                        <td><strong>Username:</strong></td>
                        <td><?php echo htmlspecialchars($user['username']); ?></td>
                    </tr>
                    <tr>
                        <td><strong>Email:</strong></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                    </tr>
                    <tr>
                        <td><strong>Joined:</strong></td>
                        <td><?php echo htmlspecialchars($user['created_at']); ?></td>
                    </tr>
                </table>
            </div>
            
            <div class="nav">
                <a href="index.php" class="btn">Home</a>
                <a href="logout.php" class="btn btn-secondary">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
