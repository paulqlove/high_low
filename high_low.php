<?php


$number = mt_rand(0, 100);
$count = 1;

do {
	//ask user to guess a number
	fwrite(STDOUT, 'Guess');
	$user = trim(fgets(STDIN));
	
	//check users number vs computers number
	if ($user == $number) {
	 	
	 	echo "Great Guess! \n";
	 	
	 
	 }
	 
	elseif($user > $number) {
		echo "$user too high \n";
	} 
	
	elseif ($user < $number) {
		echo "$user too low \n";		
	}
	
	
 $count++;
	  
	 
	
} while ( $number != $user);

echo "final count" . $count++ . PHP_EOL;




