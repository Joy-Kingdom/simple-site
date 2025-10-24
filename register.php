<?php
session_start();
require 'db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try {
        $stmt = $db->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt->execute([$email, $password]);
        $message = "Account created! <a href='login.php'>Login here</a>.";
    } catch (PDOException $e) {
        $message = "Error: Email already exists.";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body style="font-family:sans-serif; text-align:center; margin-top:100px;">
    <h2>Sign Up</h2>
    <p style="color:green;"><?php echo $message; ?></p>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Sign Up</button>
    </form>
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>