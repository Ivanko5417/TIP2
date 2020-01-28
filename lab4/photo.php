<?php $id = $_GET['id'];?>
<html>
<head>
<title>
Просмотр картинки №
<?php echo $id;?>
</title>
</head>
<body>
<img src="img/<?php echo $id;?>.jpg" width="300"/>
<h2>Какое-то описание картинки</h2>
</body>
</html>
