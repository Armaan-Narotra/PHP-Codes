<?php
	//First Method
	$salaries = array("armaan" => 2000, "shivansh" => 1000, "vansh" => 500);
	echo "Salary of Armaan is: " . $salaries['armaan'] . "<br/>";
	echo "Salary of Shivansh is: " . $salaries['shivansh'] . "<br/>";
	echo "Salary of Vansh is: " . $salaries['vansh'] . "<br><br>";
	
	//Second Method
	$salaries['armaan'] = "High";
	$salaries['shivansh'] = "Medium";
	$salaries['vansh'] = "Low";
	
	echo "Salary of Armaan is: " . $salaries['armaan'] . "<br/>";
	echo "Salary of Shivansh is: " . $salaries['shivansh'] . "<br/>";
	echo "Salary of Vansh is: " . $salaries['vansh'] . "<br/>";
	
	echo "<br>";
	echo "Code executed by Armaan Narotra(0221BCA159)(2220100330)";
?>

