<?php
error_reporting(E_ALL); 
ini_set("d$isplay_errors", 1); 

echo "<table>";
for($i = 0; $i <= 100; $i++) //$iterate through rows
{
	echo "<tr>";
	for($j = 0; $j <= 100; $j++) //$iterate through columns
	{
		$data = $i*$j; //data for cell 

		if($i == 0)
		{
			if($j == 0)
			{
				$data = "";
			}
			else
			{
				$data = $j;
			}
			
		}
		else if($j == 0)
		{
			$data = $i;
		}
		else
		{
			$data = $i*$j;
		}
		echo "<td>$data</td>";
	}
	echo "</tr>";
}

echo "</table>";

?>