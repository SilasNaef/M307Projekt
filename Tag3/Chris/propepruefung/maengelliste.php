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
	<title>Abfragen</title>


	
</head>
<body class="customer">

<header>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="tabelle.php">Alle Mängel</a></li>
      <li class="active"><a href="">Schadensfall eintragen</a></li>
    </ul>
  </div>
</nav>
</nav>
		
</header>

	<section class="container">
	<h1></h1>
		<h2>Schadensfall eintragen:</h2>

		<?php

		if(ISSET($_GET['id']) == TRUE)
		{
		$select = mysqli_query($db, "SELECT * FROM maengelliste WHERE P_ID =".$_GET['id']);

		while($row = mysqli_fetch_object($select))
		{
			$ausgabeName = $row->name;
			$ausgabeDatum = $row->erfassungsdatum;	
			$ausgabeschaden = $row->schaden;	
			$ausgabeloesung = $row->loesung;	
			$ausgabeFile = $row->file;	
		}

			$_POST['name'] = $ausgabeName;
			$_POST['erfassungsdatum'] = $ausgabeDatum;
			$_POST['schaden'] = $ausgabeschaden;
			$_POST['loesung'] = $ausgabeloesung;
			$_POST['file'] = $ausgabeFile;

		}



		?>

		<div class="col-md-12">
			<!--Mein Formular -->
       			<form action ="maengelliste.php" method="post"> <!-- get und _GET geht auch aber oben in HTML zeile im Browser sichtbar-->

            <h4>Name:</h4>
       			<input type="text" name="name" class="form-control " value="<?php echo @$_POST['name']; ?>" placeholder="name eingeben"> 
       			<br>
             <h4>Erfassungsdatum:</h4>
            <input type="date" name="erfassungsdatum" class="form-control" value="<?php echo @$_POST['erfassungsdatum'];?>">
            <br>
            <h4 >Schaden:</h4>
            <input type="text" name="schaden" class="form-control " value="<?php echo @$_POST['schaden'];?>">
            <br>
            <h4>Lösung</h4>
            <input type="text" name="loesung" class="form-control " value="<?php echo @$_POST['loesung'];?>">
            <br>
            <h4>Schadensbild einfügen:</h4>
            <input type="file" name="bildinput" class="form-control " value="<?php echo @$_POST['file'];?>">
            <br>

                <br>
       			<button type="submit" value="absenden" class="form-control btn btn-default">Schadensfall einreichen</buttons>       			
       			</form>
		</div>
<?php

		if(@$_GET['id'] == "")
		{
if(EMPTY(@$_POST['name']) == FALSE && @$_POST['erfassungsdatum'] != '' && @$_POST['loesung'] != '' && @$_POST['schaden'] != '')
{

	$Name = trim(htmlspecialchars($_POST['name']));
	$Erfassungsdatum = trim(htmlspecialchars($_POST['erfassungsdatum']));
	$Schaden = trim(htmlspecialchars($_POST['schaden']));
	$Bild = trim(htmlspecialchars($_POST['bildinput']));
	$Loesung = trim(htmlspecialchars($_POST['loesung']));

	$sql1 = "INSERT INTO maengelliste(name, erfassungsdatum, schaden, loesung, file) VALUES ('".$Name."', '".$Erfassungsdatum."' , '".$Schaden."', '".$Loesung."', '".$Bild."')";
	$Name = null;
	$Erfassungsdatum = null;
	$Schaden = null;
	$Bild = null;
	$Loesung = null;

	if ($db->query($sql1) === TRUE) {
    echo "<br>New record created successfully<br>";
 }
 else {
    echo "Error: " . $sql1 . "<br>" . $db->error;
}
}
else
{
	echo "<br>Mindestens ein Feld ist Leer!<br>";
}
}
?>

	</section>
</body>

<footer class="container">
	
	<br>
	<br>
		<?php
			$sql2 = "SELECT * FROM maengelliste;";
			$ergebnis = mysqli_query($db, $sql2);

			if($ergebnis != null){
			while($row = mysqli_fetch_object($ergebnis))
			{
 			echo $row->name;
  			echo " <br />";
			}
		}
		?>
    </form>
</footer>
</html>