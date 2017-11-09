<?php

echo "There are 50% chances that a blond will meet dinosaur at the square and 50% she won't meet if. \n";
echo "If she has met it, press 1!\n";
$handle = fopen ("php://stdin","r");
$input = fgets($handle);

echo ($input == 1) ? "Blond is scared of the dinosaur\n" : "She is safe!\n"; 

echo "\n";