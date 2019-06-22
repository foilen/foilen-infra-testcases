<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>PHP MySql</title>
</head>

<body>

<?php
  if (isset($_POST["hostPost"])) {


    $mysqli = new mysqli($_POST["hostPost"], $_POST["user"], $_POST["pass"]);
    if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    }

    if ($result = $mysqli->query('SHOW databases')) {
      // Printing results in HTML
      echo "<table>\n";

      while ($row = $result->fetch_row()) {
        echo "\t<tr>\n";
        foreach ($row as $col_value) {
          echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
      }
      echo "</table>\n";
      $result->close();
    }


    $mysqli->close();


  }
 ?>

<form method="post">
  <input name="hostPost" type="text" value="127.0.0.1:3306" />
  <input name="user" type="text" value="root" />
  <input name="pass" type="password" value="" />
  <input type="submit">
</form>

</body>

</html>
