<!DOCTYPE html>
<html lang='th'>
<head>
    <meta charset='UTF-8'>
    <title>Page Title</title>
</head>
<body>
    <form action="week5-receive.php" method="get">
        <label>username</label>
        <input type="text" name="username" required>
        <br>

        <label>Password</label>
        <input type="password" name="userpass">
        <br>

        <label>email</label>
        <input type="email" name="useremail">
        <br>

        <label>อายุ</label>
        <input type="number" name="userAge">
        <br>

         <label>วันเกิด</label>
        <input type="date" name="userBirth">   
        <br>

         <label>เพศ</label>
        <input type="radio" name="userGender" value="ชาย">ชาย
        <input type="radio" name="userGender" value="หญิง">หญิง
        
        <br>
        
         <label>จังหวัด</label>
         <select name="usercity">
            <option value="ไม่ระบุ">-</option>
            <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
            <option value="เชียงใหม่">เชียงใหม่</option>
        </select>
        <br>

        <label>งานอดิเรก</label>
        <input type="checkbox" name="userHobby[]" value="อ่านหนังสือ"> อ่านหนังสือ
        <input type="checkbox" name="userHobby[]" value="ฟังเพลง"> ฟังเพลง
        <input type="checkbox" name="userHobby[]" value="เล่นเกม"> เล่นเกม
        <br>

        <input type="submit" value="ส่งข้อมูล">
    </form>
</body>
</html>