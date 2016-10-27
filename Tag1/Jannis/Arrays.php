<html>
<head>
  <title>Titel</title>
</head>

<body>
  <p>Das ist eine PHP Seite.</p>

  <?php
  $DVD=array("Ocean's Eleven","Herr der Ringe - Die zwei Türme","Herr der Ringe - Die Gefährten",
  "Das Leben des Brian","Fluch der Karibik","Ice Age","Findet Nemo","Fight Club","Road Trip",
  "American History X","Roter Drache","Stigmata");
  print_r($DVD);
  ?>


  <?php
  $DVD = array("Ocean's Eleven", "Herr der Ringe - Die zwei Türme", "Herr der Ringe - Die Gefährten",
  "Das Leben des Brian", "Fluch der Karibik", "Ice Age", "Findet Nemo", "Fight Club", "Road Trip",
  "American History X", "Roter Drache", "Stigmata");

  echo $DVD[6];
  ?>


  <?php
$DVD = array("Ocean's Eleven", "Herr der Ringe - Die zwei Türme", "Herr der Ringe - Die Gefährten",
"Das Leben des Brian", "Fluch der Karibik", "Ice Age", "Findet Nemo", "Fight Club", "Road Trip",
"American History X", "Roter Drache", "Stigmata");

foreach($DVD as $Film) {     /* in der Variable $Film wird immer ein Filmtitel kopiert */
     echo $Film;
     echo "<br />\n";
}
?>

<?php
$DVD = array("Ocean's Eleven", "Herr der Ringe - Die zwei Türme", "Herr der Ringe - Die Gefährten",
"Das Leben des Brian", "Fluch der Karibik", "Ice Age", "Findet Nemo", "Fight Club", "Road Trip",
"American History X", "Roter Drache", "Stigmata");

foreach($DVD as $Film) {
     $Film = "";     /* $Film wird eine leere Zeichenfolge zugewiesen, $Film ist also nichts mehr */
}
     /* da dies aber keine Auswirkung auf das Array hat, bleibt das Array unberührt: */
print_r($DVD);
?>

<?php
$Color = array();     /* ein leeres Array wird erstellt */
// dieser Schritt ist nicht unbedingt notwendig, aber verhinderte eventuelle Fehler

$Color[ ] = "white";
$Color[ ] = "blue";
$Color[ ] = "yellow";

print_r($Color);
?>


<?php
$Color = array();

$Color['Schrift'] = "white";
$Color['Tabelle'] = "blue";
$Color['Hintergrund'] = "yellow";

print_r($Color);
?>

 <?php
$Color = array();

$Color['Schrift'] = "white";
$Color['Tabelle'] = "blue";
$Color['Hintergrund'] = "yellow";

?>
<html>
     <body bgcolor="<?php echo $Color['Hintergrund'];?>">
          <table bgcolor="<?php echo $Color['Tabelle'];?>">
               <tr>
                    <td>
                         <font color="<?php echo $Color['Schrift'];?>">
                              Schöne tolle Farben... <br />
                              Und alle stehen in nur einem Array
                         </font>
                    </td>
               <tr>
          </table>
     </body>
</html>

<?php
$Color = array('Schrift' => "white",
     'Tabelle' => "blue",
     'Hintergrund' => "yellow",
     100 => "Geht auch mit Zahlen als Index");

print_r($Color);
?>

<?php
$Color = array();

$Color['Schrift'] = "white";
$Color['Tabelle'] = "blue";
$Color['Hintergrund'] = "yellow";

echo "<strong>So ist das Setup:</strong><br />\n<br />\n";

foreach($Color as $key => $value)
     {
     echo "Der Schlüssel \"$key\" hat den Wert \"$value\"<br />\n";
     }
?>

<?php
$Color = array();
$Color['Schrift'] = "white";
$Color['Tabelle'] = "blue";
$Color['Hintergrund'] = "yellow";

echo "<form action=\"\" method=\"post\">";

foreach($Color as $index => $value)
{
     echo "$index --> ";
     echo "<input type=\"text\" "
          . "name=\"$index\" "
          . "value=\"$Color[$index]\">"     /* es ginge statt "$Color[$index]" auch "$value" */
          . "<br />\n";
}
?>
<input type="submit" name="ColSended" value="absenden"><br />
</form>

</body>
</html>
