<?php
  $a = $_POST['a'];
  $b = $_POST['b'];
  if(isset($_POST['a']) && isset($_POST['b'])) {
    switch ($_POST['op']) {
      case '+':
      $result = $_POST['a'] + $_POST['b'];
      break;
      case '-':
      $result = $_POST['a'] - $_POST['b'];
      break;
      case '*':
      $result = $_POST['a'] * $_POST['b'];
      break;
      case '/':
      if ($_POST['b'] == 0) {
        $result = "ERROR";
        break;
      }
      $result = $_POST['a'] / $_POST['b'];
      break;
    }
  }
  else
  $result = "";
?>
<html>
<head>
<title>Галерея изображений</title>
</head> <body> <form method="post">
<?php
  echo "<input type='text' value='$a' name='a'/>";
?>
<?php
  echo "<input type='text' value='$b' name='b'/>";
?>
<input name="op" type="submit" value="+" />
<input name="op" type="submit" value="-" />
<input name="op" type="submit" value="*" />
<input name="op" type="submit" value="/" />
<?php echo $result; ?>
</form>
</body>
</html>
