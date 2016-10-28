
<!DOCTYPE html>
<html>
<head>

	<?php
	include("header.php");
	include("Datenbankverbindung1.php");


	$sqldatabases = mysqli_query($db, "CREATE DATABASE IF NOT EXISTS personendaten");
	$db = mysqli_connect("localhost", "root", "", "personendaten");
	$query = mysqli_query($db, "CREATE TABLE IF NOT EXISTS person(P_ID int, name varchar(255), vorname varchar(255), passwort varchar(255), file varchar(255), EMail varchar(255), Lieblingsfarbe varchar(255), filmkategorieA varchar(255), filmkategorieB varchar(255), filmkategorieC varchar(255), wahlenoptions varchar(255), selectmenu varchar(255), PRIMARY KEY(P_ID))");
		?>
	<title>Abfragen</title>


	
</head>
<body class="customer">

<header class="container">
		
</header>
	<section class="container">
	<h1>Registrieren Sie sich! </h1>
		<h2>Registrieren
<i class="fa fa-space-shuttle" aria-hidden="true"></i>
		</h2>


		<div class="col-md-12">
			<!--Mein Formular -->
       			<form action ="abfragen.php" method="post" id="velo"> <!-- get und _GET geht auch aber oben in HTML zeile im Browser sichtbar-->

            <h4>Name:</h4>
       			<input type="text" name="name" class="form-control " value="" placeholder="name eingeben">
       			<br>
             <h4>Vorname:</h4>
            <input type="text" name="vorname" class="form-control " value="">
            <br>
            <h4>E-Mail:</h4>
            <input type="email" name="email" class="form-control " value="">
            <br>
             <h4>Passwort:</h4>
            <input type="password" name="passwort" class="form-control " value="">
            <br>
            <h4 >Passwort wiederholen:</h4>
            <input type="password" name="passwortbest" class="form-control " value="">
            <br>
            <h4>Datei einfügen:</h4>
            <input type="file" name="bildinput" class="form-control " value="">
            <br>
            <h4 onclick="getConfirmation('GEHEIMER KNOPF')">Lieblingsfarbe:</h4>
            <input type="color" class="" name="color">
            <br>
            <h4>Filmkategorien:</h4>
            <div class="checkbox">
            <label>
            	<input type="checkbox" name="actioncheckbox" value="Action" >
            	 Action 
            </label>
            <label>
            	<input type="checkbox" id="comedycheckbox" value="Comedy">
            	 Comedy 
            </label>
            <label>
            	<input type="checkbox" id="horrorcheckbox" value="Horror">
            	 Horror 
            </label>
            </div>
            <br>
            <h4>Wen wählen Sie?</h4>
            <div class="radio">
  				<label>
   					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" disabled>
    				Donald Trump
 				</label>
 				<br>
  				<label>
    				<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" disabled>
    				Hillary Clinton
  				</label>
  				<br>
  				<label>
    				<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" checked>
    				Christopher Buchmann
  				</label>
  			</div>
  			<div class="form-group">
      			<label for="disabledSelect">Select Menu</label>
      			<select id="disabledSelect" name="disabledSelect" class="form-control">
        			<option>OptionA</option>
        			<option>OptionB</option>
        			<option>OptionC</option>
        			<option>OptionD</option>
        			<option>OptionE</option>
      			</select>
    		</div>
            <br>
       			<button type="submit" value="absenden" class="form-control btn btn-default">Registrieren</buttons>       			
       			</form>
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

	$sql1 = "INSERT INTO person(P_ID, name, vorname, passwort, file, EMail, Lieblingsfarbe, filmkategorieA, filmkategorieB, filmkategorieC, wahlenoptions, selectmenu) VALUES (".$newPID.", '".@$_POST['name']."', '".@$_POST['vorname']."', '".@$_POST['passwort']."', '".@$_POST['bildinput']."', '".@$_POST['email']."', '".@$_POST['color']."', '".@$_POST['actioncheckbox']."', '".@$_POST['comedycheckbox']."', '".@$_POST['horrorcheckbox']."', '".@$_POST['optionsRadios']."', '".@$_POST['disabledSelect']."')";

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

<footer class="container">
	
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
		<button type="button" onclick="getConfirmation(this.value)" value="logout" class="form-control btn btn-default">MEINCOOLERBUTTON</buttons>       			
       			</form>
</footer>
</html>