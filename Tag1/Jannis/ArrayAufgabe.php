<html>
<head>
  <title>Titel</title>
</head>

<body>
  <p>Das ist eine PHP Seite.</p>

  <?php

  $array = array("Element1", "Element2", "Element3", "Element4", "Element5");

  $length = count($array);
  echo "Natsort:";
  echo "<br />";
  natsort($array);
  foreach ($array as $ausgabe) {
    echo $ausgabe . " ";
  }
  echo "<br />";
  echo "Sort:";
  echo "<br />";
  sort($array);
  foreach ($array as $ausgabe) {
    echo $ausgabe . " ";
  }
  echo "<br />";
  echo "Arsort:";
  echo "<br />";
  arsort($array);
  foreach ($array as $ausgabe) {
    echo $ausgabe . " ";
  }
  echo "<br />";
  echo "Asort:";
  echo "<br />";
  asort($array);
  foreach ($array as $ausgabe) {
    echo $ausgabe . " ";
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
