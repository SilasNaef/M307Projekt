<?php 

$array = array("Chris", "velo", "pilot", "movie", "asdf");

natsort($array);

$arrayElement = null;
echo "natsort";
foreach($array as $arrayElement)
{
	echo $arrayElement."<br />";
}

sort($array);

$arrayElement = null;
echo "sort";
foreach($array as $arrayElement)
{
	echo $arrayElement."<br />";
}

arsort($array);

$arrayElement = null;
echo "arsort";
foreach($array as $arrayElement)
{
	echo $arrayElement."<br />";
}

asort($array);

$arrayElement = null;
echo "asort";
foreach($array as $arrayElement)
{
	echo $arrayElement."<br />";
}

$anzahlarray = count($array);

echo $anzahlarray;


print_r($array);
?>
