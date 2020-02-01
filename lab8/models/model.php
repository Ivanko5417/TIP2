<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
ini_set('error_reporting', E_ALL);


$server = 'localhost'; // Адрес сервера, на котором находится база
$username = 'tip';
$password = '12345678';
$db = 'tip';
$table = 'imagesFull';
$connection = mysqli_connect($server, $username, $password, $db);


function insertImage($imgName) {
    global $connection, $table;
    $sql = "INSERT INTO `$table` (imgName) VALUES ('$imgName')";
    if ($connection->query($sql) === TRUE) {
        return $connection->insert_id;
    }
    echo "Error: " . $sql . "<br>" . $connection->error;
    return 0;
}

function getImages() {
    global $connection, $table;

    $sql = "SELECT * FROM `$table` ORDER BY clickCount DESC;";
    return $connection->query($sql);
}

function getImageById($imgId) {
    global $connection, $table;

    $sql = "SELECT * FROM `$table` WHERE  id = $imgId;";
    $result = $connection->query($sql);

    if ($result->num_rows === 0) {
        return false;
    }

    return $result->fetch_assoc();
}

function incrementClick($imgId) {
    global $connection, $table;

    $sql = "UPDATE $table SET clickCount = clickCount + 1 WHERE id = $imgId";
    $connection->query($sql);
}

function updateImageById($imgId, $title, $alt) {
    global $connection, $table;

    $sql = "UPDATE $table SET title = '$title', alt = '$alt' WHERE id = $imgId";
    $connection->query($sql);
}
