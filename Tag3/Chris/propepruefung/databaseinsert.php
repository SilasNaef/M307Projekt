	<?php
	$db = mysqli_connect("localhost", "root", "", "");

	$sqldatabases = mysqli_query($db, "CREATE DATABASE IF NOT EXISTS haushalt");
	$db = mysqli_connect("localhost", "root", "", "haushalt");
	
	$query = mysqli_query($db, "CREATE TABLE IF NOT EXISTS maengelliste(P_ID int(6) NOT NULL AUTO_INCREMENT, name varchar(255), erfassungsdatum date, schaden varchar(255), loesung varchar(255), file varchar(255), PRIMARY KEY (P_ID))");
	?>