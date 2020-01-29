<?php function upload_file($file) {
  function resize_image($file, $w, $h, $crop=FALSE) {
      list($width, $height) = getimagesize($file);
      $r = $width / $height;
      if ($crop) {
          if ($width > $height) {
              $width = ceil($width-($width*abs($r-$w/$h)));
          } else {
              $height = ceil($height-($height*abs($r-$w/$h)));
          }
          $newwidth = $w;
          $newheight = $h;
      } else {
          if ($w/$h > $r) {
              $newwidth = $h*$r;
              $newheight = $h;
          } else {
              $newheight = $w/$r;
              $newwidth = $w;
          }
      }

      $src = imagecreatefromjpeg($file);
      $dst = imagecreatetruecolor($newwidth, $newheight);
      imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

      return $dst;
  };

  $type = explode('/', $file['type'])[0];
  $size = $file['size'];

  if ($type != 'image') {
    echo 'Только картинки!<br>';
    return;
  }
  if ($file['name'] == '') {
    echo 'Файл не выбран!<br>';
    return;
  }
  $ext=explode('.', $file['name'])[1];
  $src = $file['tmp_name'];
  $name = time().".$ext";
  $dest = 'img/'.$name;
  $result = copy($src, $dest);
  if($result) {
    echo 'Файл успешно загружен<br>';
    $minimage = resize_image($dest, 200, 200);
    imagejpeg($minimage, "img/min-".$name);
  }
  else {
    echo 'Ошибка загрузки файла<br>';
    echo $src . " " . $dest;
  }}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="cp1251"/>
<title>Загрузка файла на сервер</title>
</head>
<body>
<h1>Пример загрузки файла на сервер</h1>
<?php
  if (isset($_FILES['file'])) {
    upload_file($_FILES['file']);
  }
  $dirname = "img/";
  $images = glob($dirname."min-*.*");
  foreach ($images as $image) {
    echo '<a target="_blank" href="'.explode('min-', $image)[0].explode('min-', $image)[1].'">';
    echo '<img style="padding-right: 20px" src="'.$image.'" width="200"/>';
    echo '</a>';
  };
?>
  <form method="post" enctype="multipart/form-data">
  <input type="file" name="file" accept="image/jpeg" />
  <input type="submit" value="Загрузить файл!" />
</form>
</body>
</html>
