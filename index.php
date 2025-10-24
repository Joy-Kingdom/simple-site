<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Resources Library</title>
</head>
<body style="font-family:sans-serif; text-align:center; margin-top:100px;">
    <h2>Resources Library</h2>

    <?php if (isset($_SESSION['user'])): ?>
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</p>
        <a href="resources.php">Go to Resources</a><br><br>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="register.php">Sign Up</a> | 
        <a href="login.php">Sign In</a>
    <?php endif; ?>
</body>
</html>