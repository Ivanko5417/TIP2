<?php
  session_start();
  $email = $_POST['email'];
  $password = $_POST['password'];
  $remember = $_POST['remember'];
  if ($email) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    if ($remember == "on") {
      setcookie("email", $email, time() + 60 * 2);
      setcookie("password", $password, time() + 60 * 2);
    }
    header("Location: ./");
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
  <form method="POST">
    <label for="email">Email: </label>
    <input id="email" name="email" required />
    <br>
    <label for="password">Password: </label>
    <input id="password" name="password" type="password" required />
    <br>
    <label for="remember">Remember me: </label>
    <input id="remember" type="checkbox" name="remember" >
    <input type="submit" value="Send"/>
  </form>
</body>
</html>
