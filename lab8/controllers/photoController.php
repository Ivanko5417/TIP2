<?php
include '../models/model.php';
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
ini_set('error_reporting', E_ALL);

function showImage() {
    $id = $_GET['id'];
    if (!$id) {
        return false;
    }

    incrementClick($id);

    $row = getImageById($id);
    if (!$row) {
        return false;
    }

    $count = $row["clickCount"];
    $imgName = $row["imgName"];
    $title = $row["title"];
    $alt = $row["alt"];
    echo "<a href=\"edit.php?id=$id\">Редактировать</a>";
    echo "<br/>";
    echo "Количество переходов: " . $count;
    echo "<br/>";
    echo "<img src='img/$imgName' title='$title' alt='$alt'/>";
    return true;
}

if (!showImage()) {
    echo 'Не получается найти картинку:(';
}