<?php
	error_reporting(E_ALL); 
	ini_set("display_errors", 1);


	function checkAnswer($Q, $num){
		echo "<p> Your answer for Question ". $num . " is " . $Q . ". </p>";
	}

	
	$Q1 = $_POST["Q1"];
	$Q2 = $_POST["Q2"];
	$Q3 = $_POST["Q3"];
	$Q4 = $_POST["Q4"];
	$Q5 = $_POST["Q5"];

	$ANS1 = "The closed loop line integral of the E field will be non-zero if the B field is moving away from the region";
	$ANS2 = "Div D = 0";
	$ANS3 = "w|<b>B</b>||<b>A</b>|sin(wt)";
	$ANS4 = "<b>0</b>";
	$ANS5 = "There is an <b>H</b>; satisfies |<b>H</b>| = |<b>E</b>|/z; z != 0";

	$counter = 0;
	
	echo "<p> Question 1: Which of the following is a consequence of Faraday's Law?</p>";
	echo "<p> Your Answer: ". $Q1 . "</p>";
	echo "<p> Correct Answer: The closed loop line integral of the E field will be non-zero if the B field is moving away from the region</p>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<p> Question 2: Consider angular frequency 'w'. Which of the following must be true for source-free equations in the frequency domain? </p>";
	echo "<p> Your Answer: ". $Q2 . "</p>";
	echo "<p> Correct Answer: Div D = 0 </p>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<p> Question 3: Consider a closed conducting loop with an Area A rotating around a magnet with magnetic field B at an angular frequency of w in a vacuum. Which of the following returns voltage? </p>";
	echo "<p> Your Answer: ". $Q3 . "</p>";
	echo "<p> Correct Answer: w|<b>B</b>||<b>A</b>|sin(wt)</p>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<p> Question 4: Consider an electric field in a vacuum with permittivity e0. What is the Electric field through a source-free spherical region with surface area A?</p>";
	echo "<p> Your Answer: ". $Q4 . "</p>";
	echo "<p> Correct Answer: <b>0</b></p>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<p> Question 5: Which of the following is true about the relationship of H and E in a plane-wave?</p>";
	echo "<p> Your Answer: ". $Q5 . "</p>";
	echo "<p> Correct Answer: There is an <b>H</b>; satisfies |<b>H</b>| = |<b>E</b>|/z; z != 0</p>";
	echo "<br>";
	echo "<br>";
	echo "<br>";

	if($Q1 == $ANS1){
		$counter++;
	}
	if($Q2 == $ANS2){
		$counter++;
	}
	if($Q3 == $ANS3){
		$counter++;
	}
	if($Q4 == $ANS4){
		$counter++;
	}
	if($Q5 == $ANS5){
		$counter++;
	}

	
	echo "<p> You got " .$counter. " Questions correct. </p>";
	echo "<p> You got " .$counter/5 * 100 . "% </p>";
?>