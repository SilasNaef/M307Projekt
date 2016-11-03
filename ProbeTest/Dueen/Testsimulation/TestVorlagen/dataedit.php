<?php
$id = @$_GET['id'];
if (isset($id))
{
  $link='test.php?id='.$id;
  $result=$conn->query("SELECT * FROM hausschaden WHERE hausschaden.SchadenID=".$id);
  while($row=$result->fetch_assoc()) /* Ausgabe der Datenbank */
  {
    echo "<form action=$link method='post'>
    <input type='date' name='dateact' value='".$row['Erfassungsdatum']."' class='form-control'></br>
    <input type='text' name='Antragstelleract' value='".$row['Antragsteller']."' placeholder='Antragsteller' class='form-control'></br>
    <input type='text' name='Schadenact' value='".$row['Schaden']."' placeholder='Schadensbeschreibung' class='form-control'></br>
    <input type='text' name='Loesungact' value='".$row['Loesung']."' placeholder='Lösung' class='form-control'></br>
    <input type='submit' value='Datensatz aktualisieren' class='btn btn-primary'>
    </form>";
  }
  if ($_POST)
  {
    if (empty(@$_POST['dateact']) OR empty(@$_POST['Antragstelleract']) OR empty(@$_POST['Schadenact']) OR empty(@$_POST['Loesungact']))
    {
      echo "<FONT COLOR='#FF0000'>Fehlende Eingabe!</FONT>";
    }
    else
    {
      $dateact= trim(htmlspecialchars(@$_POST['dateact']));
      $nameact = trim(htmlspecialchars(@$_POST['Antragstelleract']));
      $schadenact = trim(htmlspecialchars(@$_POST['Schadenact']));
      $loesungact = trim(htmlspecialchars(@$_POST['Loesungact']));
      $conn->query("UPDATE hausschaden SET Erfassungsdatum='".$dateact."', Antragsteller='".$nameact."', Schaden='".$schadenact."', Loesung='".$loesungact."' WHERE schadenID=".$id);
      echo "Aktualisierung erfolgreich!";
    }
  }
  $result=$conn->query("SELECT * FROM hausschaden WHERE schadenID=".$id);
}
  else {
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
