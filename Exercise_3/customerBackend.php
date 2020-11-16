<?php

	error_reporting(E_ALL); 
	ini_set("display_errors", 1);

	$user = $_POST["username"];
	$pass = $_POST["password"];
	$shoes = $_POST["Shoes"];
	$shirt = $_POST["Shirt"];
	$pants = $_POST["Pants"];
	$shipping = $_POST["Shipping"];

	$totalPrice = $shoes + $shirt + $pants + $shipping;
	echo "<div id=receipt>";

	echo "<p>Welcome!" . $user . "<br> with password: ". $pass." </p>";
	echo "<p>You purchased: </p>";
	if($shoes != 0){
		echo "<p>Fire Gang Shoes TM: $" . $shoes . "</p>";
	}
	if($shirt != 0){
		echo "<p>Based Sweater: $" . $shirt . "</p>";
	}
	if($pants != 0){
		echo "<p>Lit Bottoms : $" . $pants . "</p>";
	}
	echo "<p> Shipping: $" . $shipping . "</p>";
	echo "<p> Total: $" . $totalPrice . "</p>";
	

	echo "<p>Done!</p>";

	echo "</div>";
?>