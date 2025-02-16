<?php
	function selfMultiply(&$number){
		$number *= $number;
		return $number;
	}
	
	$mynum = 5;
	echo "The number is: " . $mynum;
	echo "<br>";
	selfMultiply($mynum);
	echo "Number after multiplication: " . $mynum;
	echo "<br><br>";
	echo "Code executed by Armaan Narotra(0221BCA159)(2220100330)";
?>
