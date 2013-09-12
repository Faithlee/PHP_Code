<?php
//test strategy pattern


function __autoload($className) {
	require $className . '.class.php';
}
$tes = new TimedCostStrategy();

$lessions[] = new Seminar(5, new TimedCostStrategy());
$lessions[] = new Lecture(5, new FixedCostStrategy());

foreach ($lessions as $lession) {
	echo "the lession charge is " . $lession->cost() . "\n";
	echo "the lession changetype is " . $lession->changeType() . "\n";

	echo "====================\n";
}
?>
