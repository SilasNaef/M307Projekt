<?php
$MYSQL_HOST = "localhost";
$MYSQL_USER = "root";
$MYSQL_PW = "";
$MYSQL_DB = "phpdb";
$conn = new mysqli($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW, $MYSQL_DB);
$conn->query("CREATE DATABASE IF NOT EXISTS PHPDB");
$conn->query("CREATE TABLE IF NOT EXISTS hausschaden (
  schadenID int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Erfassungsdatum date,
  Antragsteller VARCHAR(255),
  Schaden VARCHAR(255),
  Loesung VARCHAR(255)
  )");
  $result=$conn->query("SELECT * FROM hausschaden");
  if(mysqli_num_rows($result)==0)
  {
    $conn->query("INSERT INTO hausschaden (Erfassungsdatum, Antragsteller, Schaden, Loesung)
                  VALUES ('2016-01-01', 'Max Mustermann', 'Fatal Error', 'Neustart')");
  }
?>
