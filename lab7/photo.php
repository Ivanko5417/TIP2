<!DOCTYPE html>
<html>
<head>
<meta charset="cp1251"/>
<title>Фото</title>
</head>
<body>
<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
ini_set('error_reporting', E_ALL);

    $server = 'localhost'; // Адрес сервера, на котором находится база
    $username = 'tip';
    $password = '12345678';
    $db = 'tip';
    $connection = mysqli_connect($server, $username, $password, $db);

    function showImage() {
        global $connection;
        $id = $_GET['id'];
        if (!$id) {
            return false;
        }

        $sql = "UPDATE images SET clickCount = clickCount + 1 WHERE id = $id";
        $connection->query($sql);

        $sql = "SELECT * FROM `images` WHERE  id = $id;";
        $result = $connection->query($sql);

        if ($result->num_rows === 0) {
            return false;
        }

        $row = $result->fetch_assoc();
        $count = $row["clickCount"];
        $imgName = $row["imgName"];
        echo "Количество переходов: " . $count;
        echo "<br/>";
        echo '<img src="img/'.$imgName.'"/>';
        return true;
    }

    if (!showImage()) {
        echo 'Не получается найти картинку:(';
    }
?>
</body>
</html>
