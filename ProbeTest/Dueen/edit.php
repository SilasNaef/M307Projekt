<?php
$MYSQL_HOST = "localhost";
$MYSQL_USER = "root";
$MYSQL_PW = "";
$MYSQL_DB = "phpdb";

$conn = new mysqli($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW, $MYSQL_DB);
$schaden_ID=@$_POST['sID'];
echo $schaden_ID;
$query = "SELECT * FROM hausschaden WHERE hausschaden.SchadenID=".$schaden_ID;
if ($conn->query($query)) {
  echo $schaden_ID;
}
else
{
  echo false;
}
?>
