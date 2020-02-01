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
    $row = getImageById($id);
    if (!$row) {
        return false;
    }

    $imgName = $row["imgName"];
    $title = $row["title"];
    $alt = $row["alt"];
    echo "<img src='img/min-$imgName' title='$title' alt='$alt'/>";
    echo "<br/>";
    echo "<br/>";
    echo "<form method='post'>";
    echo "Title:  ";
    echo "<input type='text' name='title' value='$title'/>";
    echo "<br/>";
    echo "Alt:  ";
    echo "<input type='text' name='alt' value='$alt'/>";
    echo "<br/>";
    echo "<input type='Submit' value='Сохранить'/>";
    echo "</form>";

    return true;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $alt = $_POST['alt'];
    updateImageById($id, $title, $alt);
}

if (!showImage()) {
    echo 'Не получается найти картинку:(';
}