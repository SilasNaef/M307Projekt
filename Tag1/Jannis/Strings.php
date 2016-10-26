<html>
<head>
  <title>Titel</title>
</head>

<body>
  <p>Das ist eine PHP Seite.</p>

  <?php
  $text = "Freude schöner Götterfunken,
  Tochter aus Elysium,
  Wir betreten Feuertrunken,
  Himmlische, dein Heiligtum!
  Deine Zauber binden wieder,
  Was die Mode streng geteilt.
  Alle Menschen werden Brüder,
  Wo dein sanfter Flügel weilt.";

  $sub = substr($text,0,10);

  echo $sub;
  ?>

  <?php
  $text = "Freude schöner Götterfunken,
  Tochter aus Elysium,
  Wir betreten Feuertrunken,
  Himmlische, dein Heiligtum!
  Deine Zauber binden wieder,
  Was die Mode streng geteilt.
  Alle Menschen werden Brüder,
  Wo dein sanfter Flügel weilt.";

  $x = 0;

  while($x < strlen($text))     /* solange $x kleiner als die Länge von $text... */
  {
       echo substr($text, $x, 5) . "<br />\n";
       /* substr ab der Stelle $x, 5 Buchstaben lang. */
       $x = $x + 5;
  }
  ?>
  <?php
  $text = "Freude schöner Götterfunken,
  Tochter aus Elysium,
  Wir betreten Feuertrunken,
  Himmlische, dein Heiligtum!
  Deine Zauber binden wieder,
  Was die Mode streng geteilt.
  Alle Menschen werden Brüder,
  Wo dein sanfter Flügel weilt.";

  $sub = substr($text,-6,6);

  echo "Die letzten 6 Zeichen: " . $sub;
  ?>

  <?php
$text = "Freude schöner Götterfunken,
Tochter aus Elysium,
Wir betreten Feuertrunken,
Himmlische, dein Heiligtum!
Deine Zauber binden wieder,
Was die Mode streng geteilt.
Alle Menschen werden Brüder,
Wo dein sanfter Flügel weilt.";


$sub = substr($text,0,-10);

echo $sub;
?>

<?php
$text = "Freude schöner Götterfunken,
Tochter aus Elysium,
Wir betreten Feuertrunken,
Himmlische, dein Heiligtum!
Deine Zauber binden wieder,
Was die Mode streng geteilt.
Alle Menschen werden Brüder,
Wo dein sanfter Flügel weilt.";

echo substr($text,25);     /* einmal ab stelle 25 */
?>

<br />
<br />
<?php
echo substr($text,-25);     /* und einmal ab 25 Stellen vor dem Ende */
?>

<?php
$text = "Freude schöner Götterfunken,
Tochter aus Elysium,
Wir betreten Feuertrunken,
Himmlische, dein Heiligtum!
Deine Zauber binden wieder,
Was die Mode streng geteilt.
Alle Menschen werden Brüder,
Wo dein sanfter Flügel weilt.";

echo str_replace("Freude", "Trauer", $text);
?>

<?php
$kinderlied = "Drei Chinesen mit dem Kontrabaß saßen auf der Straße und erzählten sich was.<br />
Da kam die Polizei: \"Ja was ist denn das?\"<br />
Drei Chinesen mit dem Kontrabaß";

echo $kinderlied;
echo "<br />\n<br />\n<font color=red>";

$a = $kinderlied;
$a = str_replace("e", "a", $a);
$a = str_replace("i", "a", $a);
$a = str_replace("o", "a", $a);
$a = str_replace("u", "a", $a);

echo $a;
?>

<?php
$kinderlied = "Drei Chinesen mit dem Kontrabaß saßen auf der Straße und erzählten sich was.<br />
Da kam die Polizei: \"Ja was ist denn das?\"<br />
Drei Chinesen mit dem Kontrabaß";

echo $kinderlied;
echo "<br />\n<br />\n<font color=red>";

$zeichen = array("a", "e", "i", "o", "u",
          "A", "E", "I", "O", "U");

echo str_replace($zeichen, "a", $kinderlied);     /* alle in $zeichen enthaltene Zeichen werden ersetzt durch "a""; */

echo "</font><br />\n<br />\n<font color=blue>";


     /* oder in PHP5: */
$zeichen = array("a", "e", "i", "o", "u");

echo str_ireplace($zeichen, "u", $kinderlied);     /* durch das "i" in str_ireplace würde auch z.B. große E durch "u" ersetzt"; */

echo "</font>";
?>

<?php
$kinderlied[0] = "Drei Chinesen mit dem Kontrabaß saßen auf der Straße und erzählten sich was.<br />\n
Da kam die Polizei: \"Ja was ist denn das?\"<br />\n
Drei Chinesen mit dem Kontrabaß";

$kinderlied[1] = "Fuchs du hast die Gans gestohlen...";

$kinderlied = str_replace("die", "<b>die</b>", $kinderlied);

echo $kinderlied[0] . "<br />\n<br />\n" .
     $kinderlied[1];
?>

<?php
$text = "Freude schöner Götterfunken,
Tochter aus Elysium,
Wir betreten Feuertrunken,
Himmlische, dein Heiligtum!
Deine Zauber binden wieder,
Was die Mode streng geteilt.
Alle Menschen werden Brüder,
Wo dein sanfter Flügel weilt.";

echo strtolower($text);
?><br /><br /><?php
echo strtoupper($text);
?>

<?php
if(strtolower($_POST['Passwort']) == strtolower("GeHeIm")) {
     echo "Passwort korrekt";
} else {
     echo "Passwort falsch....";
}
?>

<?php
$text = "Freude schöner Götterfunken,
Tochter aus Elysium,
Wir betreten Feuertrunken,
Himmlische, dein Heiligtum!
Deine Zauber binden wieder,
Was die Mode streng geteilt.
Alle Menschen werden Brüder,
Wo dein sanfter Flügel weilt.";

echo "<b>ohne nl2br():</b><br />\n";
echo $text;

?>

<br />
<br />
<?php

echo "<b>mit nl2br():</b><br />\n";
echo nl2br($text);
?>


<?php
if(trim(strtolower($_POST['Passwort'])) == trim(strtolower(" GeHeIm")))
{
     echo "Passwort korrekt";
}
else {
     echo "Passwort falsch....";
}
?>
<form method="post" action="/script.php">
          Passwort: <input type="text" name="Passwort"><br />
          <input type="submit" name="absenden" value="Script starten">
     </form>

</body>
</html>
