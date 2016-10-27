<html>
<head>
  <title>Titel</title>
</head>

<body>
  <p>Das ist eine PHP Seite.</p>

<?php     /* Diese Daten teilt dir dein Provider mit: */
$MYSQL_HOST = "localhost";
$MYSQL_USER = "root";
$MYSQL_PW = "";
$MYSQL_DB = "Produkte";

$conn = mysql_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW);      /* verbindet zu MySQL an sich */
mysql_select_db($MYSQL_DB, $conn);     /* verbindet zu der gewählten Datenbank auf dem Server */

?>

<?php
include("connect_mySQL.php");

$abfrage = mysql_query("SELECT * FROM `Kunden`");

?>
</body>
</html>
