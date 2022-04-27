<?php
echo "<h2>Quiz Results</h2>";

$guess1 = $_POST["q1"];
$guess2 = $_POST["q2"];
$guess3 = $_POST["q3"];
$guess4 = $_POST["q4"];
$guess5 = $_POST["q5"];
$correct = 0;

echo "<h3>Question 1: What is the Capital of Alaska?</h3>";
echo "<h3 style='text-indent: 5%;'>You answered: $guess1<br></h3>";
echo "<h3 style='text-indent: 5%;'>Correct answer: Juneau<br>";
if($guess1 == "Juneau")
{
	$correct++;
}

echo "<h3>Question 2: Who was the first emperor of Rome?<br>";
echo "<h3 style='text-indent: 5%;'>You answered: $guess2<br></h3>";
echo "<h3 style='text-indent: 5%;'>Correct answer: Augustus Caesar<br>";
if($guess2 == "Augustus Caesar")
{
	$correct++;
}

echo "<h3>Question 3: What is the Roman name for the Greek goddess Aphrodite?<br>";
echo "<h3 style='text-indent: 5%;'>You answered: $guess3<br></h3>";
echo "<h3 style='text-indent: 5%;'>Correct answer: Venus<br>";
if($guess3 == "Venus")
{
	$correct++;
}

echo "<h3>Question 4:What is the cube root of 125?<br>";
echo "<h3 style='text-indent: 5%;'>You answered: $guess4<br></h3>";
echo "<h3 style='text-indent: 5%;'>Correct answer: 5<br>";
if($guess4 == "5")
{
	$correct++;
}

echo "<h3>Question 5: Who wrote the Aeneid?<br>";
echo "<h3 style='text-indent: 5%;'>You answered: $guess5<br></h3>";
echo "<h3 style='text-indent: 5%;'>Correct answer: Virgil<br><br>";
if($guess5 == "Virgil")
{
	$correct++;
}

echo "<h3>Answered correctly: " . $correct . "<br>";

$p = $correct / 5 * 100;
echo "<h3>Score: " . $p . "%";
?>