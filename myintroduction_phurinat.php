<?php
$name = "นายภูรินาท สำลีแก้ว";
$faculty = "เทคโนโลยีสารสนเทศ";
$studentId = "69319010017";
$age = 18;
?>

<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>แนะนำตัว</title>

<style>
    body{
        font-family: Arial, sans-serif;
        background-color: #f0f4ff;
        margin: 0;
        padding: 0;
    }

    .box{
        width: 400px;
        margin: 50px auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h1{
        text-align: center;
        color: #333;
    }

    p{
        font-size: 18px;
        margin: 10px 0;
    }

    strong{
        color: #2563eb;
    }
</style>
</head>

<body>

<div class="box">
    <h1>การแนะนำตัว</h1>

    <p><strong>ชื่อ:</strong> <?php echo $name; ?></p>
    <p><strong>แผนก:</strong> <?php echo $faculty; ?></p>
    <p><strong>รหัสนักศึกษา:</strong> <?php echo $studentId; ?></p>
    <p><strong>อายุ:</strong> <?php echo $age; ?> ปี</p>
</div>

</body>
</html>
```
