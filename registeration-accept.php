<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
    $salary = isset($_POST['salary']) ? htmlspecialchars($_POST['salary']) : 0;
    $start_date = isset($_POST['start_date']) ? htmlspecialchars($_POST['start_date']) : '';
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
    $position = isset($_POST['position']) ? htmlspecialchars($_POST['position']) : '';
    $intro = isset($_POST['intro']) ? htmlspecialchars($_POST['intro']) : '';

    if (isset($_POST['skills']) && is_array($_POST['skills'])) {
        $skills_text = implode(", ", $_POST['skills']);
    } else {
        $skills_text = "ไม่มี (ไม่ได้ระบุ)";
    }
    echo "<!DOCTYPE html>";
    echo "<html lang='th'>";
    echo "<head>";
    echo "    <meta charset='UTF-8'>";
    echo "    <title>ผลการลงทะเบียน</title>";
    echo "</head>";
    echo "<body>";

    echo "    <h2>ข้อมูลผู้สมัครงานที่ได้รับระบบ</h2>";
    echo "    <hr>";
    echo "    <p>ชื่อผู้สมัคร: " . $name . "</p>";
    echo "    <p>อีเมล: " . $email . "</p>";
    echo "    <p>เบอร์โทรศัพท์: " . $phone . "</p>";
    echo "    <p>รหัสผ่าน: " . $password . "</p>";
    echo "    <p>เงินเดือนที่คาดหวัง: " . number_format($salary) . " บาท</p>";
    echo "    <p>วันที่เริ่มงานได้: " . $start_date . "</p>";
    echo "    <p>เพศ: " . $gender . "</p>";
    echo "    <p>ตำแหน่งที่สนใจ: " . $position . "</p>";
    echo "    <p>ทักษะความสามารถ: " . htmlspecialchars($skills_text) . "</p>";
    echo "    <p>แนะนำตัวเพิ่มเติม: " . nl2br($intro) . "</p>";
    
    echo "    <br>";
    echo "    <a href='registeration-form.php'>กลับไปหน้าฟอร์ม</a>";

    echo "</body>";
    echo "</html>";

} else {
    header("Location: registeration-form.php");
    exit();
}
?>