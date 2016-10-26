<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $array = array(12,57,1,78,34,65,28,93);
      $length = count($array);
      echo "Natsort:";
      echo "<br />";
      natsort($array);
      foreach ($array as $feld) {
        echo $feld . " ";
      }
      echo "<br />";
      echo "Sort:";
      echo "<br />";
      sort($array);
      foreach ($array as $feld) {
        echo $feld . " ";
      }
      echo "<br />";
      echo "Arsort:";
      echo "<br />";
      arsort($array);
      foreach ($array as $feld) {
        echo $feld . " ";
      }
      echo "<br />";
      echo "Asort:";
      echo "<br />";
      asort($array);
      foreach ($array as $feld) {
        echo $feld . " ";
      }
      echo "<br />";
      echo "Sonstige Angaben:";
      echo "<br />";
      print_r($array);
      echo "<br />";
      echo "Der Array hat ".$length . " Felder.";
      echo "<br />";

    ?>
  </body>
</html>
