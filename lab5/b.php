<?php
  session_start();
  $email = $_SESSION['email'];
  if (isset($email)) {
    $_SESSION['page'] = 'b.php';
  } else {
    header("Location: ./login.php");
  }
?>
<html>
  <head>
  <title>Page B</title>
  <?php
    $theme = $_COOKIE['theme'];
    if ($theme) echo "<link rel='stylesheet' href='$theme.css'>";
  ?>
  </head>
  <body>
    <h1>
      This is Page B
      <br>
      <a href="./a.php">Link to page A</a>
      <a href="./settings.php">Settings</a>
    </h1>
  </body>
</html>
