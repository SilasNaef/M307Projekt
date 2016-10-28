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
<body class="HideMe">
  <section class="container">
    <div class="row">
      <h1>Mein Formular<i onclick='DropDown();'class="fa fa-caret-down" aria-hidden="true"></i></h1>
      <div class="col-md-12">
        <p class="hidden" id="unhideMe">Dies ist ein Text der Jetzt angezeigt wird</p>
        <form action="Affenformular.php" method="post" id="MeinFormular">
          <p onclick='getConfirmation("Parameter");'>UserName</p><input type="text" name="vorname" class="form-control testuser" />
          <br/>
          <p onclick='jQueryTest("String");'class="custom">Passwort</p><input type="password" name="pw1" class="form-control testpw" />
          <br/>
          <p onclick='jQueryTest("String");'class="custom">TestFeld</p><input type="text" name="testfeld" class="form-control test" />
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
