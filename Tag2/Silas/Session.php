<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <section class="container">
  <div class="row">
    <h1>Mein Formular</h1>
    <div class="col-md-12">
      <form action="Session.php" method="post">
        <p>Username</p><input type="text" name="vorname" value="<?=@$_POST['vorname']?>" class="form-control" />
        <br>
        <p>Passwort</p><input type="password" name="pw1" value="<?= @$_POST['pw1']?>"class="form-control" />
        <br>
        <button type="submit" value="absenden" class="form-control btn btn-default">Absenden</button>
      </div>
    </div>
    <div class="col-md-12">
      <?php
      session_start();
      session_cache_limiter(3600);
      $expectedUsername = "SilasNaef";
      $expectedPasswort = "Adminadmin1";
      if(@$_POST['vorname'] == @$expectedUsername && @$_POST['pw1'] == @$expectedPasswort) {
        @$_SESSION['eingeloggt'] = true;
        @$_SESSION['loggedinusername'] = @$_POST['vorname'];
        @$_SESSION['loggedinpassword'] = @$_POST['pw1'];
      } else {
        @$_SESSION['eingeloggt'] = false;
        echo "Falsches Passwort oder Benutzername<br />";
      }
      if ($_SESSION['eingeloggt'] == true) {
        echo "Willkommen " . @$_SESSION['loggedinusername'];

      }
      else {
      }

      ?>
    </div>
  </section>
</body>
</html>
