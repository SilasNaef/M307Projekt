<!DOCTYPE html>
<html lang="de">
  <head>
	<meta charset="utf-8">
    <title>Formulare</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  
  
  <body>


       <section class="container">
       <div class="row">
       <?php
        $PHP_SELF = $_SERVER['PHP_SELF'];

        echo "Dateiname: ";
        print_r ($PHP_SELF);
       ?>
       		<h1>Mein Formular</h1>
       		<div class="col-md-12">
       		<!--Mein Formular -->
       			<form action ="Password.php" method="post"> <!-- get und _GET geht auch aber oben in HTML zeile im Browser sichtbar-->
            <h4>Benutzername:</h4>
       			<input type="text" name="vorname" class="form-control" value="<?=@$_POST['vorname']?>">
       			<br>
             <h4>Password:</h4>
            <input type="password" name="password" class="form-control" value="<?=@$_POST['password']?>">
            <br>
             <h4>Password bestätigen:</h4>
            <input type="password" name="passwordb" class="form-control" value="<?=@$_POST['passwordb']?>">
            <br>
            <input type="color">
       			<button type="submit" value="absenden" class="form-control btn btn-default">Absenden</button>
       			</form>
       		</div>

       		<div class="col-md-12">
			<?php

      session_start();
      
      if ( empty ($_POST['vorname']) == TRUE || empty ($_POST['password'] ) == TRUE || empty ($_POST['passwordb']) == TRUE )
			{
				echo "Ihre Benutzerdaten sind nicht vollständig.";
      }
      else
			{
				if(@$_POST['vorname'] != '')
				{
					echo "eingetragener Benutzername: " .@$_POST['vorname']."<br>"; 
				}
		  }

      if(@$_POST['passwordb'] == @$_POST['password'] && @$_POST['password'] != '')
      {
        $_SESSION['benutzername'] = @$_POST['vorname'];
        $_SESSION['passwort'] =@$_POST['password'];
        echo "das Password ist korrekt<br>";
        $_SESSION['eingeloggt'] = TRUE;
        session_cache_limiter(3600);
      }
      else
      {
        $_SESSION['eingeloggt'] = FALSE;
      }

      if($_SESSION['eingeloggt'] == TRUE)
      {
        echo "Hallo ". $_SESSION['benutzername']." Sie sind jetzt eingeloggt.";
      }



			?>
      <!--function htmlcodes($var)
      {
      echo $var;
      return htmlspecialchar($var)
      }-->
			</div>
       	</div>
       </section>
  </body>
</html>
