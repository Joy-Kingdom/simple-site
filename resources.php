<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$files = glob("files/*");
?>
<!DOCTYPE html>
<html>
<head><title>Resources</title></head>
<body style="font-family:sans-serif; text-align:center; margin-top:50px;">
    <h2>Resources Library</h2>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</p>
    <a href="logout.php">Logout</a>
    <hr>
    <h3>Available Downloads:</h3>
    <ul style="list-style:none;">
        <?php foreach ($files as $file): ?>
            <li><a href="<?php echo $file; ?>" download><?php echo basename($file); ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>