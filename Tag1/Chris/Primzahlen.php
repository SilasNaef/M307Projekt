<?php 
Primzahlen();
function Primzahlen()
{
	for($a = 1; $a <= 1000; $a++)
	{
		$primzahl = null;
		for($teiler = 2; $teiler <= $a; $teiler++)
		{
			$primzahl = true;
			if($a == $teiler)
			{
				$primzahl = true;
				break;
			}
			if($a % $teiler == 0)
			{
				$primzahl = false;
				break;
			}
		}
		if($primzahl)
		{
			echo $a." ";
		}		
	}

}
?>