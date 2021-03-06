<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP|Index</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <?php
  @$getid = $_GET['id'];
  if (isset($getid)) {
    $Link = "MaengelForm.php?id=".@$getid."";
    $db = mysqli_connect("localhost","root","","maengelliste");
    $SelectQuery = mysqli_query($db,"SELECT * FROM MaengelTable WHERE id='$getid'");
    while ($row = mysqli_fetch_assoc($SelectQuery)) {
      $sendVorname = $row['UserVorname'];
      $sendNachname = $row['UserNachname'];
      $sendDatum = $row['ErfassDatum'];
      $sendSchaden = $row['Schaden'];
      $sendLoesung = $row['Loesung'];
    }
    @$UserVorname = htmlspecialchars($_POST['UserVorname']);
    @$UserNachname = htmlspecialchars($_POST['UserNachname']);
    @$ErfassDatum = htmlspecialchars($_POST['ErfassDatum']);
    @$Schaden = htmlspecialchars($_POST['Schaden']);
    @$Loesung = htmlspecialchars($_POST['Loesung']);
    if(empty($_POST['UserVorname']) == false && empty($_POST['UserNachname']) == false && empty($_POST['ErfassDatum']) == false && empty($_POST['Schaden']) == false && empty($_POST['Schaden']) == false && empty($_POST['Loesung']) == false) {
      $UpdateQuery = mysqli_query($db,"UPDATE MaengelTable SET UserVorname='".$UserVorname."', UserNachname='".$UserNachname."', ErfassDatum='".$ErfassDatum."', Schaden='".$Schaden."',Loesung='".$Loesung."' WHERE id='$getid'");
    }
    else {
        echo '<script language="javascript">';
        echo 'alert("Bitte füllen Sie alle Felder aus!")';
        echo '</script>';
    }
    $SelectQuery = mysqli_query($db,"SELECT * FROM MaengelTable WHERE id='$getid'");
    while ($row = mysqli_fetch_assoc($SelectQuery)) {
      $sendVorname = $row['UserVorname'];
      $sendNachname = $row['UserNachname'];
      $sendDatum = $row['ErfassDatum'];
      $sendSchaden = $row['Schaden'];
      $sendLoesung = $row['Loesung'];
    }
  }
  else {
    $Link = "MaengelForm.php";
    $db = mysqli_connect("localhost","root","","maengelliste");
    @$UserVorname = htmlspecialchars($_POST['UserVorname']);
    @$UserNachname = htmlspecialchars($_POST['UserNachname']);
    @$ErfassDatum = htmlspecialchars($_POST['ErfassDatum']);
    @$Schaden = htmlspecialchars($_POST['Schaden']);
    @$Loesung = htmlspecialchars($_POST['Loesung']);
    if(empty($_POST['UserVorname']) == false && empty($_POST['UserNachname']) == false && empty($_POST['ErfassDatum']) == false && empty($_POST['Schaden']) == false && empty($_POST['Schaden']) == false && empty($_POST['Loesung']) == false) {
      $InsertQuery1 = mysqli_query($db,"INSERT INTO MaengelTable(UserVorname, UserNachname, ErfassDatum, Schaden, Loesung) VALUES ('".$UserVorname."','".$UserNachname."','".$ErfassDatum."','".$Schaden."','".$Loesung."')");
      if ($InsertQuery1) {
        echo '<script language="javascript">';
        echo 'alert("Datensatz erfasst!")';
        echo '</script>';
      }
      else {
        echo '<script language="javascript">';
        echo 'alert("Datensatz konnte nicht hinzugefügt werden!")';
        echo '</script>';
      }

    }
    else {
          echo '<br><br><br>Bitte füllen Sie alle Feler aus!';
    }
    mysqli_close($db);
  }
  ?>
  <nav>
    <div class="container">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="Startseite.php">WebSiteName</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="Startseite.php">Home</a></li>
            <li class="active"><a href="MaengelForm.php">MaengellisteFormular</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </nav>
  <br>
  <br>
  <section class="container">
    <div class="row">
      <h1>Neuen Datensatz anlegen</h1>
      <div class="col-md-12">
        <form action="<?= $Link?>" method="post">
          <label for="UserVorname">UserVorname:</label>
          <input type="text" name="UserVorname" class="form-control" value="<?= @$sendVorname?>" />
          <br>
          <label for="UserNachname">UserNachname:</label>
          <input type="text" name="UserNachname" class="form-control" value="<?= @$sendNachname?>"/>
          <br>
          <label for="ErfassDatum">Erfassdatum:</label>
          <input type="date" name="ErfassDatum" class="form-control" value="<?= @$sendDatum?>"/>
          <br>
          <label for="Schaden">Schaden:</label>
          <textarea class="form-control" name="Schaden" rows="3"><?= @$sendSchaden?></textarea>
          <br>
          <label for="Loesung">Loesung:</label>
          <textarea class="form-control" name="Loesung" rows="3" ><?= @$sendLoesung?></textarea>
          <br>
          <button type="submit" value="absenden" class="form-control btn btn-default">Query Ausführen</button>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        </div>
      </div>
    </section>

  </body>
  </html>
