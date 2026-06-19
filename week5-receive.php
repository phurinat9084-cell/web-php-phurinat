<?php
    $name = $_GET['username'];
    $password = $_GET['userpass'];
    $email = $_GET['useremail'];
    $age = $_GET['userAge'];
    $birth = $_GET['userBirth'];
    $gender = $_GET['userGender'];
    $city = $_GET['usercity'];
    $hobby = $_GET['userHobby'];
    echo "สวัสดีคุณ $name<br>";
    echo "รหัสผ่านของคุณคือ: $password<br>";
    echo "อีเมลของคุณคือ: $email<br>";
    echo "อายุของคุณคือ: $age<br>";
    echo "วันเกิดของคุณคือ: $birth<br>";
    echo "เพศของคุณคือ: $gender<br>";
    echo "จังหวัดของคุณคือ: $city<br>";
    echo "งานอดิเรกของคุณคือ: " . implode(", ", $hobby) . "<br>";
?>