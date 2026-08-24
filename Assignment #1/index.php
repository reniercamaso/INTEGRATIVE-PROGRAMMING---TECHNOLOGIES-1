<?php
$name = "Renier";

if ($name == "Renier") {
	echo "Hi, Renier. Nice to meet you!\n";
}

$hobby = "Play";

if ($hobby == "Play") {
	echo "I like playing online games\n";
} else {
	echo "I like sleeping\n";
}

$grade = 79;

if ($grade >= 90) {
	echo "Keep up the good work, Ren!\n";
} else if ($grade >= 80) {
	echo "You did well, Ren!\n";
} else if ($grade >= 75) {
	echo "You passed, but you can do better.\n";
} else {
	echo "Come back stronger, Ren!\n";
}

$light = "Green";

switch ($light) {
	case "Red": 
		echo "RED! HINTO! HUWAG KANG KAMOTE!\n";
		break;
	case "Yellow":
		echo "Yellow 'yan bossing ah, Huwag na humabol.\n";
		break;
	case "Green":
		echo "Green na boss, usad na tayo\n";
		break;
	default: 
		echo " Ako pa ba?\n";
		break;
}
?>
