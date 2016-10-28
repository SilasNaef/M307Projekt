<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Formular</title>
  <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="Style.css" rel="stylesheet">
  <script src="script.js"></script>
<body>
  <section class="container">
    <div class="row">
      <h1>Mein Formular</h1>
      <div class="col-md-12">
        <form action="Affenformular.php" method="post">
          <p onclick='getConfirmation("Parameter");'>UserName</p><input type="text" name="vorname" value="<?=@$_POST['vorname']?>" class="form-control" />
          <br/>
          <p onclick='jQueryTest("String");'class="custom">Passwort</p><input type="password" name="pw1" value="<?= @$_POST['pw1']?>"class="form-control" />
          <br/>
          <button type="submit" value="absenden" class="form-control btn btn-default"><i class="fa fa-diamond"></i>Absenden<i class="fa fa-diamond"></i></button>
          <br/>
          <br/>
          <button type="button" onclick='getConfirmation(this.value);' value="TEXT" class="form-control btn btn-default"><i class="fa fa-diamond"></i>getConfirmation<i class="fa fa-diamond"></i></button>
      </div>
    </div>
    <div class="col-md-12">
       <?php
       ?>
    </div>
  </section>

</body>
</html>
