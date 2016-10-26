<html>
<head>
  <title>Titel</title>
</head>

<body>
  <p>Das ist eine PHP Seite.</p>


  <?php

  $Ziel = "Hamburg";

  switch ($Ziel){
    case "Hamburg":
      echo "Der Zug fährt nach Norddeutschland";
  }


  ?>


  <?php

  $Herkunft = "Frankfurt a.M";
  $Ziel = "Hamburg";

  switch ($Ziel){
    case "Hamburg":
      echo "Der Zug fährt nach Norddeutschland";
      echo "<br  />und er kommt aus " . $Herkunft . "<br  />";
      break;

    case "München":
      echo "Der Zug fährt nach Süddeutschland";
      echo "<br  />und er kommt aus " . $Herkunft . "<br  />";
      break;
  }


  ?>


  <?php

  $Tier = "Schmetterling";

  switch ($Ziel){
    case "Fliege":
    case "Schmetterling":
    case "Ameise":
      echo "Das ist ein Insekt";
      break;
  }


  ?>

  <?php
  switch ($Tier) {
       case "Elefant":
            echo "Ein " . $Tier . " ist grösser als ein Pferd" . "<br />";
       case "Pferd":
            echo "Ein " . $Tier . " ist grösser als ein Hund" . "<br />";
       case "Hund":
            echo "Ein " . $Tier . " ist grösser als ein Kaninchen" . "<br />";
       case "Kaninchen":
            echo "Ein " . $Tier . " ist grösser als ein Wurm" . "<br />";
       default:
            echo "Ein " . $Tier . " ist grösser als ein Atom" . "<br />";
  ?>


  <?php
  $Zahl = 3;

  switch ($Zahl)
  {
      case 5:
            echo "Die Zahl ist grösser als 4" . "<br />";
      case 4:
            echo "Die Zahl ist grösser als 3" . "<br />";
      case 3:
            echo "Die Zahl ist grösser als 2" . "<br />";
      case 2:
            echo "Die Zahl ist grösser als 1" . "<br />";
      case 1:
            echo "Die Zahl ist grösser als 0" . "<br />";
            break;
      default:
        echo "FEHLER: ungültige Zahl" . "<br  />";
    ?>
</body>
</html>
