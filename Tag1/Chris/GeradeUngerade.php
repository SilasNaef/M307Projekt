<table id="1">
  <tr>
  <th>Gerade</th><th>Ungerade</th>
  </tr>

<?php
$a = 1;
while($a <= 1000)
{
	if($a % 2 == 0)
	{
		echo "<tr><td>".$a."</td>";
		++$a;
		echo "<td>".$a."</td></tr>";
	}
	else
	{
		$a++;
	}
}
?>
</table>