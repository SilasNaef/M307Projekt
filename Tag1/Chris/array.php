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

$DVD = array("Item1", "Item2", "Item3", "Item4", "Item5", "Item6", "Item7", "Item8", "Item9", "Item10", "Item11", "Item13", "Item14");

print_r($DVD);

echo "<br />".$DVD[6];


foreach($DVD as $Film)
{
	echo"<br />";
	echo $Film;
}


$Color = array();     /* ein leeres Array wird erstellt */
// dieser Schritt ist nicht unbedingt notwendig, aber verhinderte eventuelle Fehler
echo "<br />";
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






