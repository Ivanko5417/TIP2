<?php
include '../models/model.php';

ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
ini_set('error_reporting', E_ALL);


function upload_file($file)
{
    function resize_image($file, $w, $h, $crop = FALSE)
    {
        list($width, $height) = getimagesize($file);
        $r = $width / $height;
        if ($crop) {
            if ($width > $height) {
                $width = ceil($width - ($width * abs($r - $w / $h)));
            } else {
                $height = ceil($height - ($height * abs($r - $w / $h)));
            }
            $newwidth = $w;
            $newheight = $h;
        } else {
            if ($w / $h > $r) {
                $newwidth = $h * $r;
                $newheight = $h;
            } else {
                $newheight = $w / $r;
                $newwidth = $w;
            }
        }

        $src = imagecreatefromjpeg($file);
        $dst = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        return $dst;
    }

    ;

    $type = explode('/', $file['type'])[0];

    if ($type != 'image') {
        echo 'Только картинки!<br>';
        return;
    }
    if ($file['name'] == '') {
        echo 'Файл не выбран!<br>';
        return;
    }
    $ext = explode('.', $file['name'])[1];
    $src = $file['tmp_name'];
    $name = time() . ".$ext";
    $dest = 'img/' . $name;
    insertImage($name);
    $result = copy($src, $dest);
    if ($result) {
        echo 'Файл успешно загружен<br>';
        $minimage = resize_image($dest, 200, 200);
        imagejpeg($minimage, "img/min-" . $name);
    } else {
        echo 'Ошибка загрузки файла<br>';
        echo $src . " " . $dest;
    }
}
