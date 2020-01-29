<?php
  session_start();
  $email = $_SESSION['email'];
  $page = $_SESSION['page'];

  if ($email) {
    if ($page) {
      header("Location: ./$page");
    } else {
      header("Location: ./a.php");
    }
  } else {
    header("Location: ./login.php");
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php
    $theme = $_COOKIE['theme'];
    if ($theme) echo "<link rel='stylesheet' href='$theme.css'>";
  ?>
  <title>Login</title>
</head>
<body>
</body>
</html>
