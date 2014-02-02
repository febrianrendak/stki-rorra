<?php

$cost = 0;
$nextcost = 3;
$syarat =1;

while ($syarat != 0) {
	if ($cost < $nextcost) 
	{ 
	echo $cost . " yoda was here.. <br>"; 
	}
	
	else 
	{
	echo $cost . " join me to the darkside <br>";
	$syarat = 0;
	}
	
	$cost++;
}
?>