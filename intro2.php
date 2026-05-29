<?php
$name = "ภูรินาท สำลีแก้ว";
$about = "ฉันเป็นผู้ที่สนใจการพัฒนาเว็บ เรียนรู้ PHP, HTML และ CSS เพื่อสร้างเว็บไซต์ที่ใช้งานได้จริง";
$contact = "phurinat9084@gmail.com";
?>
<!DOCTYPE html>
<html lang="th">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>แนะนำตัว — <?php echo $name; ?></title>
	<style>
		body{font-family:Arial,Helvetica,sans-serif;background:#f7f9fc;color:#222;margin:0;padding:20px}
		.container{max-width:800px;margin:36px auto;background:#fff;padding:24px;border-radius:10px;box-shadow:0 6px 18px rgba(0,0,0,0.06)}
		.header{display:flex;align-items:center;gap:16px}
		.avatar{width:96px;height:96px;border-radius:50%;background:linear-gradient(135deg,#6c63ff,#00c6ff);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:32px}
		h1{margin:0;font-size:22px}
		.lead{margin:10px 0;color:#555}
		.section{margin-top:18px}
		ul{margin:6px 0 0 20px}
		.contact{background:#f1f9ff;padding:10px;border-radius:8px;color:#055a8c}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="avatar"><?php echo mb_substr($name,0,1,'UTF-8'); ?></div>
			<div>
				<h1><?php echo $name; ?></h1>
				<div class="lead">ยินดีที่ได้รู้จัก — นี่คือนำเสนอสั้น ๆ เกี่ยวกับฉัน</div>
			</div>
		</div>

		<div class="section">
			<h2>เกี่ยวกับฉัน</h2>
			<p><?php echo $about; ?></p>
		</div>

		<div class="section">
			<h2>ทักษะ</h2>
			<ul>
				<li>HTML / CSS</li>
				<li>PHP (พื้นฐาน)</li>
				<li>JavaScript (พื้นฐาน)</li>
			</ul>
		</div>

		<div class="section">
			<h2>ติดต่อ</h2>
			<div class="contact"><?php echo $contact; ?></div>
		</div>
	</div>
</body>
</html>

