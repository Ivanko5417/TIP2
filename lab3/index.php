<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
  echo "1. ";
  $x = 0;
  while ($x < 101) {
    if ($x % 3 == 0) {
      echo $x;
      echo "<br>";
  }
    $x++;
  }
  echo "<br>";
  echo "<br>";

  echo "2. ";
  $x = 0;
  do {
    if ($x == 0) {
      echo "$x - это ноль";
      echo "<br>";
    } elseif ($x % 2 == 0) {
      echo "$x - чётное число";
      echo "<br>";
    } else {
      echo "$x - нечётное число";
      echo "<br>";
    }
    $x++;
  } while ($x < 11);

  echo "<br>";
  echo "<br>";

  echo "3. ";
  for ($x = 0; $x < 10; print $x++ . "<br>") {}

  echo "<br>";
  echo "<br>";

  echo "4. ";
  $x = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская  область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская  область" => ["Новомичуринск", "Шацк", "Касимов"],
  ];
  foreach ($x as $key => $value) {
    echo "$key:";
    echo "<br>";
    echo "&nbsp;&nbsp;" . implode(", ", $value);
    echo "<br>";
  }

  echo "<br>";
  echo "<br>";

  echo "5. ";
  function startsWithK($city) {
    return iconv_substr ($city, 0, 1) == 'К' & 1;
  };
  $x = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская  область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская  область" => ["Новомичуринск", "Шацк", "Касимов"],
  ];
  foreach ($x as $key => $value) {
    echo "$key:";
    $value = array_filter($value, "startsWithK");
    echo "<br>";
    echo "&nbsp;&nbsp;" . implode(", ", $value);
    echo "<br>";
  }
  echo "<br>";
  echo "<br>";

  echo "6. ";
  function translit($str) {
  $x = ["а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "yo", "ж" => "zh", "з" => "z",
    "и" => "i", "й" => "y", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r",
    "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h", "ц" => "c", "ч" => "ch", "ш" => "sh", "щ" => "sch",
    "ъ" => "'", "ы" => "y", "ь" => "'", "э" => "e", "ю" => "yu", "я" => "ya", " " => " "];
    $arr = preg_split('//u', $str);
    foreach ($arr as $letter) {
      $z[] = $x[$letter];
    };
    return implode('', $z);
  }

  echo translit("университет");

  echo "<br>";
  echo "<br>";

  echo "7. ";
  $str = "String to update";
  echo implode("_", explode(" ", $str));

  echo "<br>";
  echo "<br>";

  echo "8. ";
  echo implode("_", explode(" ", translit("это была русская строка с пробелами")));
?>
</body>
</html>
