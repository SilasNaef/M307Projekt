<?php
$a = 5;     /* Variable a wird "5" gesetzt */
$b = 4;     /* Variable b wird "4" gesetzt */

$c = $a + $b;     /* c wird nun gebildet aus a + b */

echo $c;     /* c wird nun mit Hilfe von echo ausgegeben */


$a = 1.1234 * 13400; /*Mit punkt Kommas abtrennen */
echo '<p>1.1234 *  13400 = '. $a.'</p>';

$a = 1;
$A = -2;
$b = $a + $A;     /* $b = 1 + (-2) */
echo '<p> Ich bin ein '.$b. '</p>';

$a = 1;
$A = -2;
    /* $b = 1 + (-2) */
echo '<p>' .$a + $A. '</p>';

/*
Der Code wird nämlich immer von rechts nach links abgearbeitet, somit erst die Summe gebildet, danach ausgegeben.

Ausser Plus und Minus gibts natürlich noch andere Rechenzeichen:

-dividieren "/"
-multiplizieren "*"
-der Modulo "%"

*/



?>

