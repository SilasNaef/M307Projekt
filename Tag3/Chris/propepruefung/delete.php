<?php

include("databaseinsert.php");

$sqlid = $_GET["id"];

if($sqlid != null){

$sqldelete = mysqli_query($db, "DELETE FROM maengelliste WHERE P_ID =$sqlid");
echo $sqldelete;
}



?>