<?php
  session_start();
  $email = $_SESSION['email'];
  if (isset($email)) {
  } else {
    header("Location: ./login.php");
  }
  $theme = $_POST['theme'];
  if ($theme) {
    setcookie("theme", $theme, time() + 3600 * 24 * 7);
    header("Location: ./");
  }
?>
<html>
  <head>
  <title>Settings</title>
  <?php
    $theme = $_COOKIE['theme'];
    if ($theme) echo "<link rel='stylesheet' href='$theme.css'>";
  ?>
  </head>
  <body>
    <form method="POST">
      <select name="theme">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
      <input type="submit" value="Save theme"></input>
    </form>
  </body>
</html>
