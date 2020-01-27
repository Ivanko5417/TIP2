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
  $a = 5;
  $b = 10;
  if ($a > 0 & $b > 0) {
    echo $a - $b;
  } else if ($a < 0 & $b < 0) {
    echo $a * $b;
  } else {
    echo $a + $b;
  };
  echo "<br>";

  echo "2. ";
  $a = 10;
  switch ($a) {
    case 0:
      echo "0<br>";
    case 1:
      echo "1<br>";
    case 2:
      echo "2<br>";
    case 3:
      echo "3<br>";
    case 4:
      echo "4<br>";
    case 5:
      echo "5<br>";
    case 6:
      echo "6<br>";
    case 7:
      echo "7<br>";
    case 8:
      echo "8<br>";
    case 9:
      echo "9<br>";
    case 10:
      echo "10<br>";
    case 11:
      echo "11<br>";
    case 12:
      echo "12<br>";
    case 13:
      echo "13<br>";
    case 14:
      echo "14<br>";
    case 15:
      echo "15<br>";
  }

  echo "<br>";

  echo "3. ";
  function plus($x, $y) {
    return $x + $y;
  }

  function multiply($x, $y) {
    return $x * $y;
  }

  function minus($x, $y) {
    return $x - $y;
  }

  function remainder($x, $y) {
    return $x % $y;
  }

  echo plus(5, 3);
  echo "<br>";
  echo minus(5, 3);
  echo "<br>";
  echo multiply(5, 3);
  echo "<br>";
  echo remainder(5, 3);
  echo "<br>";
  echo "<br>";

  echo "4. ";
  function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
      case "minus":
      return minus($arg1, $arg2);
      case "plus":
      return plus($arg1, $arg2);
      case "multiply":
      return multiply($arg1, $arg2);
      case "remainder":
      return remainder($arg1, $arg2);
    }
  }
  echo mathOperation(5, 3, 'plus');
  echo "<br>";
  echo mathOperation(5, 3, 'minus');
  echo "<br>";
  echo mathOperation(5, 3, 'multiply');
  echo "<br>";
  echo mathOperation(5, 3, 'remainder');
  echo "<br>";
  echo "<br>";

  echo "5. ";
  function power($val, $pow) {
    if ($pow == 1) return $val;
    return $val * power($val, $pow -1);
  };
  echo power(2, 3);
  echo "<br>";
  echo "<br>";

  echo "6. ";
  $hours = (string) date('H');
  $minutes = (string) date('i');
  function getHoursNaming($lastDigit) {
    switch ($lastDigit) {
      case '0':
      case '5':
      case '6':
      case '7':
      case '8':
      case '9':
      return "часов";
      case '1':
      return 'час';
      case '2':
      case '3':
      case '4':
      return "часа";
    }
  }

  function getMinutesNaming($lastDigit) {
      switch ($lastDigit) {
        case '0':
        case '5':
        case '6':
        case '7':
        case '8':
        case '9':
        return "минут";
        case '1':
        return 'минута';
        case '2':
        case '3':
        case '4':
        return "минуты";
      }
    }

   echo $hours . ' ' . getHoursNaming($hours[strlen($hours) - 1]) . ' ' . $minutes . ' '. getMinutesNaming($minutes[strlen($minutes) - 1])
?>
</body>
</html>
