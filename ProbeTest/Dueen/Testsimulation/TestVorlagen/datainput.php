<?php
echo "<form action='test.php' method='post'>
<input type='date' name='date' class='form-control'></br>
<input type='text' name='Antragsteller' placeholder='Antragsteller' class='form-control'></br>
<input type='text' name='Schaden' placeholder='Schadensbeschreibung' class='form-control'></br>
<input type='text' name='Loesung' placeholder='Lösung' class='form-control'></br>
<input type='submit' value='Datensatz erfassen' class='btn btn-primary'>
</form>";
if ($_POST)
{
  if (empty(@$_POST['date']) OR empty(@$_POST['Antragsteller']) OR empty(@$_POST['Schaden']) OR empty(@$_POST['Loesung'])) {
    echo "<FONT COLOR='#FF0000'>Fehlende Eingabe!</FONT>";
  }
  else
  {
    $date=trim(htmlspecialchars(@$_POST['date']));
    $name = trim(htmlspecialchars(@$_POST['Antragsteller']));
    $schaden = trim(htmlspecialchars(@$_POST['Schaden']));
    $loesung = trim(htmlspecialchars(@$_POST['Loesung']));
    $conn->query("INSERT INTO hausschaden (Erfassungsdatum, Antragsteller, Schaden, Loesung) VALUES ('".$date."','".$name."','".$schaden."','".$loesung."')");
    echo "Eintrag erfolgreich!";
  }
}
echo "</br>";
}
?>
