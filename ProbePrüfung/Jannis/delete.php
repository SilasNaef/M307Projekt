<?php
$id = @$_GET["id"];/* Diese Daten teilt dir dein Provider mit: */
$MYSQL_HOST = "localhost";
$MYSQL_USER = "root";
$MYSQL_PW = "";


$conn = new mysqli($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW);      /* verbindet zu MySQL an sich */
if ($conn->connect_error){
  die("Fehler: " . $conn->connect_error);
}     /* verbindet zu der gewählten Datenbank auf dem Server */
else {
  $conn->select_db("TestJannis");
  $sql = "DELETE FROM MyGuests WHERE MyGuests.id =" . $id;

  if ($conn->query($sql) === TRUE) {
    echo $id;
  }
  else {
    echo false;
  }
}
//echo "Connected";//
//echo "<br>";



//$sql =  mysql_query("INSERT INTO kunden(Name) VALUES('$username')");


?>
