<?php
	$terms = 10;
	$first = 0;
	$second = 1;
	echo "Fibonacci series up to $terms terms: ";
	echo $first . ", " . $second;

	for ($i = 3; $i <= $terms; $i++) {
    		$next = $first + $second; 
    		echo ", " . $next;        
    		$first = $second;         
   		 $second = $next;          
	}

	echo "<br><br>";
	echo "Code executed by Armaan Narotra(0221BCA159)(2220100330)";
?>
