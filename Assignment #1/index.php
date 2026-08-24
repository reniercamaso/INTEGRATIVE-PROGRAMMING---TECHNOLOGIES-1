<?php
$name = "Renier";

if ($name == "Renier") {
	echo "Hi, Renier. Nice to meet you!";
}
echo "<br>";

$hobby = "Play";

if ($hobby == "Play") {
	echo "I like playing online games";
} else {
	echo "I like sleeping";
}
echo "<br>";

$grade = 79;

if ($grade >= 90) {
	echo "Keep up the good work, Ren!";
} else if ($grade >= 80) {
	echo "You did well, Ren!";
} else if ($grade >= 75) {
	echo "You passed, but you can do better.";
} else {
	echo "Come back stronger, Ren!";
}
echo "<br>";

$light = "Green";

switch ($light) {
	case "Red": 
		echo "RED! HINTO! HUWAG KANG KAMOTE!";
		break;
	case "Yellow":
		echo "Yellow 'yan bossing ah, Huwag na humabol.";
		break;
	case "Green":
		echo "Green na boss, usad na tayo";
		break;
	default: 
		echo " Ako pa ba?";
		break;
}
echo "<br>";

?>
