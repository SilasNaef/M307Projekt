<html>
<head>
  <title>Maengelliste im Haushalt</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
  <link rel="stylesheet" href="style.css">


 <script src="delete.js"></script>

<body>
    <section class="container">

      <div class ="row">
        <h1>Maengelliste</h1>
        <div class="col-md-12">
          <form action="edit.php" method="get">
            <input type="text" name="vorname"  placeholder="Vorname" class="form-control" value="<?=@$_GET['firstname']?>"/>
            <br>
            <input type="text" name="nachname"  placeholder="Nachname" class="form-control" value="<?=@$_GET['lastname']?>"/>
            <br>
            <input type="date" name="datum" class="form-control" value="<?=@$_GET['datum']?>"/>
            <br>
            <textarea name="schaden" placeholder="Schaden" class="form-control" rows="8" value="<?=@$_GET['schaden']?>"></textarea>
            <br>
            <textarea name="loesung" placeholder="Lösung" class="form-control" rows="8" value="<?=@$_GET['loesung']?>"></textarea>
            <br>
            <button type="submit" value="absenden" class="form-control btn
            btn-default">Absenden</button>
            <br>
            <br>
  <?php

  $id = @$_GET["id"];/* Diese Daten teilt dir dein Provider mit: */
  $firsname = @$_GET["firstname"];
  $lastname = @$_GET["lastname"];
  $datum = @$_GET["datum"];
  $schaden = @$_GET["schaden"];
  $loesung = @$_GET["loesung"];
  $MYSQL_HOST = "localhost";
  $MYSQL_USER = "root";
  $MYSQL_PW = "";


  $conn = new mysqli($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW);      /* verbindet zu MySQL an sich */
  if ($conn->connect_error){
    die("Fehler: " . $conn->connect_error);
  }     /* verbindet zu der gewählten Datenbank auf dem Server */
  else {
    $conn->select_db("Haushalt");

    if ( empty ($firstname) == False &&
         empty ($lastname) == False &&
         empty ($datum) == False &&
         empty ($schaden) == false &&
         empty ($loesung) == False){
           echo "Eintrag von Benutzer: ". $_GET['firstname'] . " wurde gespeichert";
           $sql = ("UPDATE Problem
                   SET firstname= '$firstname',
                       lastname = '$lastname',
                       datum= '$datum',
                       schaden= '$schaden',
                       loesung= '$loesung'
                       WHERE Problem.id='$id'");

    }
    else{
      //if (@$_POST['vorname'] != null) {
          echo "Bitte geben Sie alle Daten ein.";

    }



    if ($conn->query($sql) === TRUE) {
      echo $id;
    }
    else {
      echo false;
    }
  }
  ?>

</body>
</html>
