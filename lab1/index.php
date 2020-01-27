<html>
  <head><title>Первый РНР-сценарий</title></head>
  <body>
    <br/>
    <?php
      $int = 7;
      $double = 7.6;
      $bool = true;
      $string = "aasdasd";
      define('GROUP', '620602');

      echo $int;
      echo '<br>';
      echo $double;
      echo '<br>';
      echo $bool;
      echo '<br>';
      echo $string;
      echo '<br>';
      echo GROUP;
      echo '<br>';

      echo '<br>';
      echo '<br>';

      echo "$int";
      echo '<br>';
      echo "$double";
      echo '<br>';
      echo "$bool";
      echo '<br>';
      echo "$string";
      echo '<br>';
      echo "GROUP";
      echo '<br>';

      echo '<br>';
      echo '<br>';

      echo '$int';
      echo '<br>';
      echo '$double';
      echo '<br>';
      echo '$bool';
      echo '<br>';
      echo '$string';
      echo '<br>';
      echo 'GROUP';
      echo '<br>';

      echo '<br>';
      echo '<br>';

      $first = "Бездомная Лягушка пела - квакала,<br>";
      $second = "Печально пела и при этом плакала.<br>";
      $third = "Наплакала Лягушка целый пруд.<br>";
      $fourth = "С тех самых пор лягушки в нём живут.<br>";
      $author = "<u>Г. Сапгир</u>";

      echo $first;
      echo $second;
      echo $third;
      echo $fourth;
      echo $author;

      echo '<br>';
      echo '<br>';

      echo $first . $second . $third . $fourth . $author;
    ?>
  </body>
</html>
