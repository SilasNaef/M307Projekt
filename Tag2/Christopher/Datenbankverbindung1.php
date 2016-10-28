<?php
//include("Datenbankverbindung.php");

$db = mysqli_connect("localhost", "root", "", "personendaten");

if(!$db)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}
?>