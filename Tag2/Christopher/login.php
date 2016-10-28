<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<?php
	include("header.php");
	?>

	<title>Login</title>
</head>
<body>
<section class="container">
	<div>
	<h1>Melden Sie sich an:</h1>
	<form action ="selectabfrage.php" method="post">

		<h4>Benutzername: </h4>
       		<input type="text" name="name" class="form-control" value="" placeholder="name eingeben">
            <h4>Passwort: </h4>
            <input type="password" name="passwort" class="form-control" value="">
            <br>
            <button type="submit" value="absenden" class="form-control btn btn-default">Login</buttons> 
   	</form>
   	</div>

	<?php
		include("Datenbankverbindung1.php");
		session_start();		
		$angemeldet = FALSE;

		
	if(@$_POST['name'] != '' && @$_POST['passwort'] != '')
	{
		$query = mysqli_query($db, "SELECT * FROM person WHERE name = '".$_POST['name']."' AND passwort = '".$_POST['passwort']."'");
		
		if(mysqli_num_rows($query) == 0)
		{
			echo "Ihre Anmeldedaten sind falsch!";
			$angemeldet = FALSE;

			
		}
		else
		{
			echo "SIE SIND ANGEMELDET";
			$angemeldet = TRUE;
			while ($row = mysqli_fetch_assoc($query)) {
			$_SESSION['pid'] = $row['P_ID'];
			$_SESSION['name'] = $row['name'];
			//$_SESSION['vorname'] = $row->vorname;
			//$_SESSION['passwort'] = $row->passwort;
			//$_SESSION['file'] = $row->file;
			//$_SESSION['email'] = $row->EMAIL;
			//$_SESSION['lieblingsfarbe'] = $row->Lieblingsfarbe;
			}

			//echo $_SESSION['name'];




		}

	}
	else
	{
		echo "Bitte geben Sie Ihre Anmeldedaten ein!";
		$angemeldet = FALSE;

	}

	if($angemeldet == TRUE)
	{

	}
	
	?>

	</section>

</body>
</html>