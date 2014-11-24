<?php

//Dump arg count

//Dump agr vars
var_dump($argc);
// Exit with 0 errors
var_dump($argv);
echo $argv[1] . PHP_EOL;
echo $argv[2] . PHP_EOL;

$count = 0;

		if (is_numeric($argv[1]) && is_numeric($argv[2]) && $argc == 3) {
			$number = mt_rand($argv[1],$argv[2]);
			do{
			//ask user to guess a number
			fwrite(STDOUT, 'Guess');
			$user = trim(fgets(STDIN));
			
			//check users number vs computers number
				if ($user == $number) {
				 	
				 	echo "Great Guess! \n";
				 	echo "final count" . " " . $count++ . PHP_EOL;
				 }
				 
				elseif($user > $number) {
					echo "$user too high \n";
				} 
				
				elseif ($user < $number) {
					echo "$user too low \n";		
				}
		 		$count++;
			  	
		 	} while ( $number != $user);
		}			
		else {
				echo "Please pick a number next time" . PHP_EOL;

			}


	

