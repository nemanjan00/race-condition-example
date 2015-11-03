<?php
$counter = file_get_contents("./counter.txt");

$counter = $counter + 1;

echo $counter."\n";

$n = Array(); 

for($i = 0; $i < 1000; $i++){
	$n[] = rand(1, 1000);
}


file_put_contents("./counter.txt", $counter);

