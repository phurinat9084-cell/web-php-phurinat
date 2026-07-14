<?php
session_start();

$is_logged_in = false;
$display_name = "";
$message = "";

if (isset($_SESSION['username'])) {
    $is_logged_in = true;
    $display_name = $_SESSION['username'];
    $message = "ยินดีต้อนรับ " . htmlspecialchars($display_name);
} 
elseif (isset($_COOKIE['remember_user'])) {
    $_SESSION['username'] = $_COOKIE['remember_user'];
    $is_logged_in = true;
    $display_name = $_SESSION['username'];
    $message = "ยินดีต้อนรับ " . htmlspecialchars($display_name);
} 

else {
    $message = "โปรดล็อคอิน";
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

    <h2>Dashboard ระบบ</h2>
    <hr>
    
    <?php if ($is_logged_in): ?>
        <p><?php echo $message; ?></p>
        <p>นี่คือพื้นที่สำหรับผู้ใช้งานที่เข้าสู่ระบบสำเร็จแล้วเท่านั้น</p>
        
        <p><a href="?action=logout">ออกจากระบบ (Logout)</a></p>
    <?php else: ?>
        <p><?php echo $message; ?></p>
        <p><a href="week8-hw-login.php">ไปหน้า Login</a></p>
    <?php endif; ?>

<?php
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header("Location: week8-hw-dashboard.php");
    exit();
}
?>

</body>
</html>