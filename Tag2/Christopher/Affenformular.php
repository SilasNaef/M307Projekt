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
       		<h1>Mein Formular</h1>
       		<div class="col-md-12">
       		<!--Mein Formular -->
       			<form action ="Affenformular.php" method="post"> <!-- get und _GET geht auch aber oben in HTML zeile im Browser sichtbar-->
       			<input type="text" name="vorname" class="form-control" value="<?=@$_POST['vorname']?>">
       			<br>
       			<button type="submit" value="absenden" class="form-control btn btn-default">Absenden</button>
       			</form>
       		</div>

       		<div class="col-md-12">
			<?php
			if ( empty ($_POST['vorname']) == TRUE )
			{
				echo "Bitte geben Sie Ihren Vornamen ein.";
			}
			else
			{
				if(@$_POST['vorname'] != '')
				{
					echo "eingetragener name: " .@$_POST['vorname']."<br>"; 
				}
		}
			?>
			</div>
       	</div>
       </section>
  </body>
</html>
