<?php
$filename = "./counter.txt";

//Let's open file
$fp = fopen($filename, "r+");

//Let's lock file
while(!flock($fp, LOCK_EX));

//Let's read file content
$counter = fread($fp, filesize($filename));

//Increment it
$counter = $counter + 1;

echo $counter;

//Ok, now, let's do something slow, not like something in counter.txt can change while we are doing this. Or can it? 
$n = Array(); 

for($i = 0; $i < 1000; $i++){
	$n[] = rand(1, 1000);
}

//Write new number
ftruncate($fp, 0);
fseek($fp, 0);
fwrite($fp, $counter);

fflush($fp);
flock($fp, LOCK_UN);

fclose($fp);

