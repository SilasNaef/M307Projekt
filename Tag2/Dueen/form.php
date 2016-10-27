<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <div id="container">
    <div class="container">
      <h1>Geiles Formular</h1>
      <div class="col-md-12">
        <p class="standardtext">
          Sind irgendwelche Anregungen, Kritiken oder Fragen entstanden? Sende mir doch ein Mail:
          Hans.Mustermann@myemail.com
          <form action="form.php" method="post">
            <input type="text" name="vorname" class="form-control" placeholder="Vorname" value="<?=@$_POST["vorname"]?>" />
          </br>
          <input type="password" name="pw" placeholder="Passwort" class="form-control" />
        </br>
        <input type="password" name="pwb" placeholder="Passwort bestätigen" class="form-control" />
      </br>
      <input type="submit" value="absenden" class="form-control btn btn-primary"/>
    </form>
  </p>
</div>
</div>
<div class="col-md-12">
  <?php if (empty ($_POST["vorname"])==True) /* Überprüfung ob Variable leer ist */
  echo "Bitte geben Sie Ihren Vornamen ein.";
  else
  echo "Eingetragener Vorname: ". @$_POST["vorname"]."</br>";
  $pw ="geheim";
  if(@$_POST["pw"]==$pw and @$_POST["pwb"]==$pw)
  echo "Passwort ok";
  elseif (@$_POST["pw"]=="" or @$_POST["pwb"]=="")
  {

  }
  else
  {
    echo "</br> Passwort falsch :(";
  }
  ?>
</div>
</div>
</body>
</html>
