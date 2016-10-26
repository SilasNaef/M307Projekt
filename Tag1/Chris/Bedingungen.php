<?php
echo "<h1>BEDINGUNGEN IN PHP IF ELSEIF</h1>";


$M = date("m");
$d = date("d");
$y = date("Y");
$H = date("H");
$min = date("i");
$se = date("s");
  /*Date gibt nun nur die aktuelle Stunde (dafür steht das "H") zurück und diese wird in der Vriablen $S gespeichert. */

echo $d.".".$M.".".$y. "  ".$H.":".$min.":".$se;

if($H >= 12 && $H <= 13) echo "<p>Es ist mittag!</p>";
elseif($H < 12) echo "<p>Guten Morgen!</p>";
elseif($H > 13) echo "<p>Ich wünsche Ihnen einen schönen Nachmittag!</p>";
elseif($H >= 18) echo "<p>Guten Abend! </p>";

if ($H < 10)
     {
     echo "Guten Morgen";
     echo "<br />wird ausgegeben von 0 bis 10 Uhr<br />";
     }

if ($H >= 10 and $H < 18)
{
     echo "Guten Tag";
     echo "<br />wird ausgegeben von 10 bis 18 Uhr<br />";
}

if ($H >= 18) {
     echo "Guten Abend";
     echo "<br />wird ausgegeben von 18 bis 24 Uhr<br />";
}

/*
== (genau gleich) Vorsicht es ist wirklich "==", nicht "=" !
!= (ungleich / ist nicht)
<= (kleiner oder genau gleich)
>= (grösser oder genau gleich)
< (kleiner)
> (grösser)
*/





?>