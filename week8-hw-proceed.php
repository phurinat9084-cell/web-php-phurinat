<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $remember = isset($_POST['remember']) ? $_POST['remember'] : '';

    if ($username === "admin" && $password === "admin1234") {
     
        $_SESSION['username'] = $username;

        if ($remember === "yes") {
            setcookie("remember_user", $username, time() + 86400, "/"); 
        } else {
            setcookie("remember_user", "", time() - 3600, "/");
        }

        $status = "success";
        $message = "ล็อคอินสำเร็จ";
    } else {
        $status = "fail";
        $message = "ล็อคอินไม่สำเร็จ";
    }
} else {
    header("Location: week8-hw-login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Processing Login</title>
</head>
<body>

    <?php if ($status === "success"): ?>
        <h1><?php echo $message; ?></h1>
        <p>กำลังเปลี่ยนหน้าไปยัง Dashboard...</p>
        <meta http-equiv="refresh" content="2;url=week8-hw-dashboard.php">
    <?php else: ?>
        <h1><?php echo $message; ?></h1>
        <p><a href="week8-hw-login.php">กลับไปหน้า Login</a></p>
    <?php endif; ?>

</body>
</html>