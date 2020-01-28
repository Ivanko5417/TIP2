<html>
<head>
<title>
Галерея изображений
</title>
</head>
<body>
<h2>Какое-то описание картинки</h2>
<?php for($i = 1; $i <= 4; $i++) echo "<a href = photo.php?id=$i >Картинка №$i</a><br/>"; ?>
<?php for($i = 1; $i <= 2; $i++) echo "<a href = calc$i.php >Калькулятор №$i</a><br/>"; ?>
</body> </html>
