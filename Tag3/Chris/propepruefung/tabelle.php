<!DOCTYPE html>
<html>
<head>
	<?php
		include("header.php");
		include("databaseinsert.php");

	$selectabfrage = mysqli_query($db, "SELECT * FROM maengelliste");

		if(mysqli_num_rows($selectabfrage) == 0)
		{
		$sqlinsert = mysqli_query($db, "INSERT INTO maengelliste(name, erfassungsdatum, schaden, loesung, file) VALUES ('name', '2016-12-13', 'meinccschaden', 'meinelösung', 'meinfile')");
		}

	?>
	<title>schadensfaelle</title>
	<script type="text/javascript" src="deletecustomer.js"></script>

</head>
<body>

<header>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Alle Mängel</a></li>
      <li><a href="maengelliste.php">Schadensfall eintragen</a></li>
    </ul>
  </div>
</nav>
</nav>
</header>

<section class="container">
	
<div>
<table class="table">
  <thead>
  <tr>
  <th>ID</th><th>Name</th><th>Erfassungsdatum</th><th>Schaden</th><th>Lösung</th><th>File</th><th>Löschen</th><th>Bearbeiten</th>
  </tr>
  </thead>
	<?php

		$selectabfrage = mysqli_query($db, "SELECT * FROM maengelliste");
 			
 		while($row = mysqli_fetch_object($selectabfrage))
		{

			$id = $row->P_ID;

			echo "<tr id=".$row->P_ID."><td>".$row->P_ID."</td>";
 			echo "<td>".$row->name."</td>";
 			echo "<td>".$row->erfassungsdatum."</td>";
 			echo "<td>".$row->schaden."</td>";
 			echo "<td>".$row->loesung."</td>";
 			echo "<td>".$row->file."</td>";
 			echo "<td><button class='button' onclick='deletecustomer(".$id.")'><i class='fa fa-eraser' aria-hidden='true'></i></button></td>";
 			echo "<td><a class='button' href='maengelliste.php?id=".$id."'><i class='fa fa-magic' aria-hidden='true'></i></a></td></tr>";
		} 

	?>
	</table>
	</div>

</section>


</body>
</html>