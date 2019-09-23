<?php
print("hoeveel");
$hoeveel = readline(":");
readline_add_history($hoeveel);
for ($i=0; $i <$hoeveel ; $i++) { 
	for ($j=0; $j<$i ; $j++) { 
		printf("*") . PHP_EOL;
	}printf("\n");
}
