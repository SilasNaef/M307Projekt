<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Formular</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <section class="container">
    <div class="row">
      <h1>Mein Formular</h1>
      <div class="col-md-12">
        <form action="Affenformular.php" method="post">
          <input type="text" name="vorname" value="<?=@$_POST['vorname']?>" class="form-control" />
          <br>
          <p>Passwort 1</p><input type="password" name="pw1" value="<?= @$_POST['pw1']?>"class="form-control" />
          <br>
          <p>Passwort 2</p><input type="password" name="pw2" value="<?= @$_POST['pw2']?>"class="form-control" />
          <br>
          <button type="submit" value="absenden" class="form-control btn btn-default">Absenden</button>
      </div>
    </div>
    <div class="col-md-12">
       <?php
        if (empty($_POST['vorname']) == true) {
          echo "Bitte Vornamen eingeben!";
        } else {
          //if (@$_POST['vorname'] != ' ') {
            echo "Eingetragener Vorname:<br />". @$_POST['vorname'] . "<br />";
          //}
        }
        if (@$_POST['pw1'] == @$_POST['pw2']) {
          echo "Die Passwörter stimmen überein";
        }
        else {
          echo "Bitte überprüfen Sie ihre Passwörter nochmals";
        }

       ?>
    </div>
  </section>

</body>
</html>
