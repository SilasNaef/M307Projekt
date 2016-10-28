
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<?php
	include("Datenbankverbindung1.php");

	$sqldatabases = mysqli_query($db, "CREATE DATABASE IF NOT EXISTS personendaten");
	$db = mysqli_connect("localhost", "root", "", "personendaten");
	$query = mysqli_query($db, "CREATE TABLE IF NOT EXISTS person(P_ID int, name varchar(255), vorname varchar(255), passwort varchar(255), file varchar(255), PRIMARY KEY(P_ID))")
		?>
	<title>Abfragen</title>
	<h1>Datenbankabfragen</h1>
</head>
<body>
	<section>
		<h2>Registrieren</h2>


		<div class="col-md-12">
			<!--Mein Formular -->
       			<form action ="abfragen.php" method="post"> <!-- get und _GET geht auch aber oben in HTML zeile im Browser sichtbar-->

            <h4>Name:</h4>
       			<input type="text" name="name" class="form-control" value="<?=@$_POST['name']?>">
       			<br>
             <h4>Vorname:</h4>
            <input type="text" name="vorname" class="form-control" value="<?=@$_POST['vorname']?>">
            <br>
             <h4>Passwort:</h4>
            <input type="password" name="passwort" class="form-control" value="<?=@$_POST['passwort']?>">
            <br>
            <h4>Passwort wiederholen:</h4>
            <input type="password" name="passwortbest" class="form-control" value="<?=@$_POST['passwortbest']?>">
            <br>
            <h4>Datei einfügen:</h4>
            <input type="file" name="bildinput" class="form-control" value="<?=@$_POST['bildinput']?>">
            <br>
            <h4>Lieblingsfarbe:</h4>
            <input type="color" class="form-control">
            <br>
       			<button type="submit" value="absenden" class="form-control btn btn-default">Registrieren</buttons       			</form>
		</div>
<?php

if(@$_POST['passwort'] != '' &&@$_POST['vorname'] != '' &&@$_POST['name'] != '' && @$_POST['passwortbest'] != '')
{
	

if(@$_POST['passwortbest'] != @$_POST['passwort'])
{
	echo "<br>Die Passwörter müssen übereinstimmen!<br>";
}
else
{

	$ergebnisP = mysqli_query($db, "SELECT * FROM person");
//$ergebnisPID = mysqli_query($db, $sql);
$lastPID = 0;

if($ergebnisP != ""){
while ($row = mysqli_fetch_assoc($ergebnisP)) 
{	
	if($lastPID < $row['P_ID'])
	{
		$lastPID = $row['P_ID'];
	}
}
}
$newPID = $lastPID +1;

	$sql1 = "INSERT INTO person(P_ID, name, vorname, passwort, file) VALUES (".$newPID.", '".@$_POST['name']."', '".@$_POST['vorname']."', '".@$_POST['passwort']."', '".@$_POST['bildinput']."')";

	if ($db->query($sql1) === TRUE) {
    echo "<br>New record created successfully<br>";
 }
 else {
    echo "Error: " . $sql1 . "<br>" . $db->error;
}
}
}
else
{
	echo "<br>Mindestens ein Feld ist Leer!<br>";
}


?>

	</section>
</body>

<footer>
	
	<br>
	<br>
	<h4>Unsere Mitglieder:</h4>
		<?php
			$sql2 = "SELECT * FROM person;";
			$ergebnis = mysqli_query($db, $sql2);

			if($ergebnis != null){
			while($row = mysqli_fetch_object($ergebnis))
			{
 			echo $row->name;
  			echo " <br />";
			}
		}
		?>
</footer>
</html>