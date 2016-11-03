<?php
include 'nav.php';
$MYSQL_HOST = "localhost";
$MYSQL_USER = "root";
$MYSQL_PW = "";
$MYSQL_DB = "phpdb";
$conn = new mysqli($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW, $MYSQL_DB);
$result = $conn->query("SELECT * FROM hausschaden");

echo "<h1> Aktuelle Datensätze </h1>";
echo "<table class='table table-striped table-hover table-responsive'>";
echo "<th>ID</th>";
echo "<th>Erfassungsdatum</th>";
echo "<th>Antragsteller</th>";
echo "<th>Schadensbeschreibung</th>";
echo "<th>Lösung</th>";
echo "<th>Bearbeiten</th>";
echo "<th>Löschen</th>";
while($row=$result->fetch_assoc()) /* Ausgabe der Datenbank */
{
  echo "<tr id='".$row['SchadenID']."'>";
  echo "<th>".$row['SchadenID']."</th>";
  echo "<th>".$row['Erfassungsdatum']."</th>";
  echo "<th>".$row['Antragsteller']."</th>";
  echo "<th>".$row['Schaden']."</th>";
  echo "<th>".$row['Loesung']."</th>";
  echo "<th><a href='test.php?id=".$row['SchadenID']."'<button class='form-control btn btn-primary' onclick='editTupel(".$row['SchadenID'].")'><i class='fa fa-pencil'></i></th></a>";
  echo "<th><button class='form-control btn btn-danger' onclick='deleteTupel(".$row['SchadenID'].")'><i class='fa fa-trash'></i></th>";
  echo "</tr>";
}
echo "</table>";
?>
