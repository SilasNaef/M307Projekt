<html>
<head>
  <title>Formulare</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>

<body>
  <section class="container">

    <div class ="row">
      <h1>Mein Formular</h1>
      <div class="col-md-12">
        <form action="Formulare.php" method="post">
          <input type="text" name="vorname" value="<?=@$_POST['vorname']?>" placeholder="Benutzername" class="form-control"/>
          <br>
          <input type="password" name="passswort" value="<?=@$_POST['passwort']?>" placeholder="Passwort" class="form-control"/>
          <br>
          <input type="password" name="passwortbe"  placeholder="Passwort bestätigen" class="form-control"/>
          <br>
          <button type="submit" value="absenden" class="form-control btn
          btn-default">Absenden</button>
        </form>
      </div>
    </div>
    <div class="col-md-12">
      <!--PHP Teil -->
      <?php
      @$username = $_POST['vorname'];
      @$password = $_POST['passwort'];
      @$confirm  = $_POST['passwortbe'];
        if ( empty ($username) == true &&
             empty ($password) == true &&
             empty ($confirm) == true){
          echo "Bitte geben Sie Ihre Benutzererkennung ein.";
        }
        else{
          //if (@$_POST['vorname'] != null) {
            echo "Benutzername:<br> ". $_POST['vorname'] . "<br>";
            if($password == $confirm && $password != "" && $confirm != ""){
              echo "Passwort Bestätigt";
            }
        }

      ?>
    </div>
  </section>



</body>
</html>
