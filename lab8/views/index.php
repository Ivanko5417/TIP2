<!DOCTYPE html>
<html>
<head>
<meta charset="cp1251"/>
<title>Загрузка файла на сервер</title>
</head>
<body>
<h1>Пример загрузки файла на сервер</h1>
<?php
    include '../controllers/indexController.php';

    ini_set("display_errors","1");
    ini_set("display_startup_errors","1");
    ini_set('error_reporting', E_ALL);

    if (isset($_FILES['file'])) {
        upload_file($_FILES['file']);
    }
    $result = getImages();
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $title = $row["title"];
        $alt = $row["alt"];
        $imgName = $row["imgName"];
        echo "<a target='_blank' href='photo.php?id=$id'>";
        echo "<img style='padding-right: 20px' title='$title' src='img/min-$imgName' width='200' alt='$alt'/>";
        echo "</a>";
    }
?>
  <form method="post" enctype="multipart/form-data">
  <input type="file" name="file" accept="image/jpeg" />
  <input type="submit" value="Загрузить файл!" />
</form>
</body>
</html>
