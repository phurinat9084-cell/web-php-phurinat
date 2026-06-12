<?php
// week4.php - ฟอร์มแสดงสูตรคูณและการบวกเลขแบบง่าย
function esc($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$action = $_POST['action'] ?? '';
	if ($action === 'table') {
		$num = $_POST['number'] ?? null;
		if ($num === null || $num === '') {
			$message = 'กรุณาป้อนตัวเลขเพื่อแสดงสูตรคูณ';
		} elseif (!is_numeric($num)) {
			$message = 'ค่าที่ป้อนไม่ใช่ตัวเลข';
		} else {
			$n = (int)$num;
			$message = "<h2>สูตรคูณของ " . esc($n) . "</h2>\n<ul>";
			for ($i = 1; $i <= 12; $i++) {
				$message .= '<li>' . esc($n) . ' × ' . esc($i) . ' = ' . esc($n * $i) . '</li>';
			}
			$message .= '</ul>';
		}

	} elseif ($action === 'add') {
		$a = $_POST['a'] ?? null;
		$b = $_POST['b'] ?? null;
		if ($a === '' || $b === '' || $a === null || $b === null) {
			$message = 'กรุณาป้อนตัวเลขทั้งสองช่องเพื่อทำการบวก';
		} elseif (!is_numeric($a) || !is_numeric($b)) {
			$message = 'ค่าที่ป้อนไม่ใช่ตัวเลข';
		} else {
			$sum = $a + $b;
			$message = '<h2>ผลลัพธ์การบวก</h2>' . esc($a) . ' + ' . esc($b) . ' = ' . esc($sum);
		}
	}
}
?>
<!doctype html>
<html lang="th">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Week4 - สูตรคูณและการบวก</title>
	<style>
		body{font-family:Arial,Helvetica,sans-serif;max-width:760px;margin:24px auto;padding:0 12px}
		form{border:1px solid #ddd;padding:12px;margin-bottom:16px;border-radius:6px}
		label{display:inline-block;width:120px}
		input[type="number"]{width:140px;padding:4px}
		input[type="submit"]{padding:6px 12px}
		ul{padding-left:20px}
	</style>
</head>
<body>
	<h1>ตัวอย่าง PHP: สูตรคูณ และ การบวก</h1>

	<form method="post">
		<input type="hidden" name="action" value="table">
		<h3>1) ป้อนตัวเลขแล้วแสดงสูตรคูณ</h3>
		<label for="number">ตัวเลข:</label>
		<input type="number" id="number" name="number" required>
		<input type="submit" value="แสดงสูตรคูณ">
	</form>

	<form method="post">
		<input type="hidden" name="action" value="add">
		<h3>2) ป้อนตัวเลข 2 ตัวเพื่อนำไปบวกกัน</h3>
		<label for="a">ตัวเลขที่ 1:</label>
		<input type="number" id="a" name="a" required>
		<br><br>
		<label for="b">ตัวเลขที่ 2:</label>
		<input type="number" id="b" name="b" required>
		<br><br>
		<input type="submit" value="บวกเลข">
	</form>

	<div id="result">
		<?php if ($message !== '') echo $message; ?>
	</div>

</body>
</html>

