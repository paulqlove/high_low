<?php


$number = mt_rand(0, 100);

do {
	//ask user to guess a number
	fwrite(STDOUT, 'Guess');
	$user = trim(fgets(STDIN));
	//check users number vs computers number
	if ($user == $number) {
	 	
	 	echo "Great Guess! \n";
	 
	 }
	 
	elseif($user > $number) {
		echo "$user to high \n";
	} 
	
	elseif ($user < $number) {
		echo "$user to low \n";		
	}

	

	  
	 
	
} while ( $number != $user);






