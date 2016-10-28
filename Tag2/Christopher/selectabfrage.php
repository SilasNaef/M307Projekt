<?php 
session_start();
include("Datenbankverbindung1.php");
$name = $_SESSION['name'];
echo $name; 

$sql2 = "SELECT * FROM person;";
			$ergebnis = mysqli_query($db, $sql2);

			if($ergebnis != null){
			while($row = mysqli_fetch_object($ergebnis))
			{
			echo $row->P_ID;
 			echo $row->name; 			
 			echo $row->vorname;
 			echo $row->passwort;
 			echo $row->file;
 			echo $row->EMail;
 			echo $row->Lieblingsfarbe;
 			echo $row->filmkategorieA;
 			echo $row->filmkategorieB;
 			echo $row->filmkategorieC;
 			echo $row->wahlenoptions;
 			echo $row->selectmenu;

  			echo " <br />";
			}
		}



 ?>
