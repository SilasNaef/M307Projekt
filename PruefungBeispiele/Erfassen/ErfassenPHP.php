<?php
  $db = mysqli_connect("localhost","root","","maengelliste");

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
        echo 'Bitte füllen Sie alle Feler aus!';
  }
  mysqli_close($db);
?>
