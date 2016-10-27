<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $dbhandle = $db = mysql_connect("localhost","root","","TestDB")
        or die("Unable to connect to MySQL");
      echo "Connected to MySQL<br />";

      $select = 'SELECT * FROM TestTable'
      $result = mysql_query($select,$db)
      echo $result;
    ?>
  </body>
</html>
