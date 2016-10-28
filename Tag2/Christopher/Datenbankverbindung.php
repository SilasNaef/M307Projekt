<?php
//include("Datenbankverbindung.php");

$db = mysqli_connect("localhost", "root", "", "personendaten");

if(!$db)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}

$sql = "SELECT * FROM person;";
$ergebnis = mysqli_query($db, $sql);

while($row = mysqli_fetch_object($ergebnis))
{
  echo $row->name;
  echo " <br />";
}
?>