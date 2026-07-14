<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: week8-hw-dashboard.php");
    exit();
}

$remembered_user = isset($_COOKIE['remember_user']) ? $_COOKIE['remember_user'] : '';
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เข้าสู่ระบบ (Login)</title>
</head>
<body>

    <h2>Login</h2>
    
    <form action="week8-hw-proceed.php" method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($remembered_user); ?>" required>
        </div>
        <br>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <br>
        <div>
            <input type="checkbox" id="remember" name="remember" value="yes" <?php echo !empty($remembered_user) ? 'checked' : ''; ?>>
            <label for="remember">Remember me</label>
        </div>
        <br>
        <button type="submit">เข้าสู่ระบบ</button>
    </form>

</body>
</html>
