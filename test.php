<?php
// Lets just read number from file
$counter = file_get_contents("./counter.txt");

//Increment it
$counter = $counter + 1;

//Ok, now, let's do something slow, not like something in counter.txt can change while we are doing this. Or can it? 
$n = Array(); 

for($i = 0; $i < 1000; $i++){
	$n[] = rand(1, 1000);
}

//Write new number
file_put_contents("./counter.txt", $counter);

