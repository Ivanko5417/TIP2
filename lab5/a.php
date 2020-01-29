<?php
  session_start();
  $email = $_SESSION['email'];
  if (isset($email)) {
    $_SESSION['page'] = 'a.php';
  } else {
    header("Location: ./login.php");
  }
?>
<html>
  <head>
  <title>Page A</title>
  <?php
    $theme = $_COOKIE['theme'];
    if ($theme) echo "<link rel='stylesheet' href='$theme.css'>";
  ?>
  </head>
  <body>
    <h1>
      This is Page A
      <br>
      <a href="./b.php">Link to page B</a>
      <a href="./settings.php">Settings</a>
    </h1>
  </body>
</html>
