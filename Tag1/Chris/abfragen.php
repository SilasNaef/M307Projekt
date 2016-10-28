<?php

include("Datenbankverbindung.php");

$sql = "SELECT * FROM person;";
$ergebnis = mysqli_query($db, $sql);

while($row = mysqli_fetch_object($ergebnis))
{
  echo $row->name;
  echo " <br />";
}
?>
