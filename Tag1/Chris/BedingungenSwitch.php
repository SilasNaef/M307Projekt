<p><form action="BedingungenSwitch.php " method="post">
        <input type="text" name="vname">
       <input type="submit" /></form></p>

<?php
/* weichensteller Hamburg */

$Ziel = "London";
$Gleis = null;
if(!is_null($Gleis))
{
$Gleis = $_POST["vname"];
}




if($Gleis == 1)
{
	$Ziel = "London";
}
elseif($Gleis == 2)
{
	$Ziel = "Bern";
}
elseif($Gleis == 3)
{
	$Ziel = "Hamburg";
}
elseif($Gleis == "Bus")
{
	$Ziel = "Bern";
}


switch($Ziel)
{
	case "Hamburg": 
		echo "Der Zug fährt nach Hamburg";
		break;

	case "Amsterdam":
		echo "Der Zug fährt nach Amsterdam";
		break;

	case "Bern":
		echo "Der Zug fährt nach Bern";
		break;

	case "London":
		echo "Der Zug fährt nach London";
		break;
}


?>

