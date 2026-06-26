<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ฟอร์มสมัครงาน</title>
</head>
<body>

    <h2>ฟอร์มสมัครงาน</h2>
    <form action="registeration-accept.php" method="POST">
        
        <p>
            <label>ชื่อ-นามสกุล:</label><br>
            <input type="text" name="name" required>
        </p>

        <p>
            <label>อีเมล:</label><br>
            <input type="email" name="email" required>
        </p>

        <p>
            <label>เบอร์โทรศัพท์:</label><br>
            <input type="tel" name="phone" required>
        </p>

        <p>
            <label>รหัสผ่าน (สำหรับเข้าสู่ระบบ):</label><br>
            <input type="password" name="password" required>
        </p>

        <p>
            <label>เงินเดือนที่คาดหวัง:</label><br>
            <input type="number" name="salary" required>
        </p>

        <p>
            <label>วันที่เริ่มงานได้:</label><br>
            <input type="date" name="start_date" required>
        </p>

        <p>
            <label>เพศ:</label><br>
            <input type="radio" name="gender" value="ชาย" checked> ชาย
            <input type="radio" name="gender" value="หญิง"> หญิง
            <input type="radio" name="gender" value="อื่น ๆ"> อื่น ๆ
        </p>

        <p>
            <label>ตำแหน่งที่สนใจ:</label><br>
            <select name="position">
                <option value="โปรแกรมเมอร์">โปรแกรมเมอร์</option>
                <option value="กราฟิกดีไซน์">กราฟิกดีไซน์</option>
                <option value="การตลาด">การตลาด</option>
            </select>
        </p>

        <p>
            <label>ทักษะความสามารถ (เลือกได้มากกว่า 1):</label><br>
            <input type="checkbox" name="skills[]" value="PHP"> PHP
            <input type="checkbox" name="skills[]" value="HTML"> HTML
            <input type="checkbox" name="skills[]" value="CSS"> CSS
            <input type="checkbox" name="skills[]" value="SQL"> SQL
        </p>

        <p>
            <label>แนะนำตัวเพิ่มเติม:</label><br>
            <textarea name="intro" rows="4" cols="50"></textarea>
        </p>

        <p>
            <button type="submit">ส่งใบสมัคร</button>
            <button type="reset">ล้างข้อมูล</button>
        </p>

    </form>

</body>
</html>