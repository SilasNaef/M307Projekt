<?php
$db = mysqli_connect("localhost", "root", "", "personendaten");
if(!$db)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}

function deletefromsql($pid)
{
	$sqldelete = mysqli_query("DELETE * FROM person WHERE P_ID = ".$pid);
}

function changefromsql($spaltebearbeiten, $neuerwert, $pid)
{
	$sqlchange = mysql_query("UPDATE person SET ".$spaltebearbeiten." = '".$neuerwert."' WHERE P_ID = ".$pid);
}
?>