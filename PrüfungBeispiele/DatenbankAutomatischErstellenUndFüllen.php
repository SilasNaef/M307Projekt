<?php
//DatenBankVerbindung wählen
$createdb = new mysqli("localhost","root","");
//createdb
$CreateDataBase = mysqli_query($createdb,"CREATE DATABASE IF NOT EXISTS maengelliste");
//DatenBank Benutzen
$UseCreateDB = mysqli_connect("localhost","root","","maengelliste");
//TableErstellen
$CreateDataBaseTable = mysqli_query($UseCreateDB, "CREATE TABLE IF NOT EXISTS MaengelTable( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, UserVorname VARCHAR(30) NOT NULL, UserNachname VARCHAR(30) NOT NULL, ErfassDatum Date NOT NULL, Schaden VARCHAR(100), Loesung VARCHAR(100))");
//Datensätze Einfügen falls keine Vorhanden
if(mysqli_num_rows($StartQuery)==0) {
  $InsertQuery1 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Silas','Naef','".$timestamp."','Mixxer Kaputt','Neuen Mixxer kaufen')");
  $InsertQuery2 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Sasha','Keller','".$timestamp."','TV Kaputt','Neuen TV kaufen')");
  $InsertQuery3 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Christopher','Buchmann','".$timestamp."','Backofen Kaputt','Neuen Backofen kaufen')");
  $InsertQuery4 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Jannis','Thymnios','".$timestamp."','Herd Kaputt','Neuen Herd kaufen')");
  $InsertQuery5 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Dueen','Brunner','".$timestamp."','Stereoanlage Kaputt','Neue Stereoanlage kaufen')");
  $InsertQuery6 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('David','Brogli','".$timestamp."','PC Kaputt','Neuen PC kaufen')");
  $InsertQuery7 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Emmanuel','Egli','".$timestamp."','Router Kaputt','Neuen Router kaufen')");
  $InsertQuery8 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Julian','Ammonn','".$timestamp."','AccessPoint Kaputt','Neuen AccessPoint kaufen')");
  $InsertQuery9 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Mike','VanRojen','".$timestamp."','WC Kaputt','Neues WC kaufen')");
  $InsertQuery10 = mysqli_query($UseCreateDB,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('Adem','Bilali','".$timestamp."','Dusche Kaputt','Neue Dusche kaufen')");
}


?>
