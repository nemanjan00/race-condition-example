<?php
for($i = 0; $i < 100; $i++){
	//execute it and do not wait :)
	system("php test.php  > /dev/null 2>/dev/null &");
}
