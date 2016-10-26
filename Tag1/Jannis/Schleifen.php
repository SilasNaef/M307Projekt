<html>
<head>
  <title>Titel</title>
</head>

<body>
  <p>Das ist eine PHP Seite.</p>


  <?php
for ($x = 0; $x <= 100; $x = $x + 10)
     echo "$x<br />\n";
     /* \n führt zu einem Zeilenumbruch im Quelltext, nicht allerdings in der HTML-Ansicht, hierfür ist <br /> zuständig.
Ich benutzte \n hier nur, um den Quelltext übersichtlicher erscheinen zu lassen, es hat keine Auswirkung auf das Script */
?>

<?php
for ($x = 0; $x <= 100; $x = $x + 10)
{     /* Klammer wird geöffnet */

     $x_quadrat = $x * $x;     /* ein wenig Gerechne: * ist das Multiplikationszeichen */

     echo "Das Quadrat von " . $x . " ist: ";
     echo $x_quadrat;

     echo "<br />\n";

}     /* Klammer wird geschlossen */
?>

<?php     /* $_POST[Startwert] wird vom Formular übergeben */

$Startwert = $_POST[Startwert];

if($Startwert == "") {
     echo "Keine Zahl eingegeben";
     exit;     /* = Script sofort beenden */
}

if($Startwert < 10000) {     /* Sicherung, denn sonst könnte die ausgebene Datei größer sein als der Browser verträgt */
     for ($x = $Startwert; $x >= 0; $x = $x - 1) {     /* Beginn der Schleife */
          echo $x;
          echo "<br />\n";
     }
}
else echo "Bitte eine niedrigere Zahl eingeben";
?>

<?php
$x = 0;

do   {     /* tue ... */
     echo $x . "<br />\n";     /* ... diese Ausgabe ... */
     $x = $x + 1;
} while($x > 0 and $x <= 10);     /* ... solange wie das hier (stimmt) */
?>

<?php
$x = 0;

while($x > 0 and $x <= 10) {
     echo $x . "<br />\n";
     $x++;
}
?>



</body>
</html>
