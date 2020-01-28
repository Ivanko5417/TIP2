<?php
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
<input type="text" name="a" />
<select name="op">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
</select>
<input type="text" name="b" />
<input type="submit" value="=" />
<?php echo $result; ?>
</form>
</body>
</html>
