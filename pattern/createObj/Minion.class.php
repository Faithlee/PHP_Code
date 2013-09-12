<?php

//@desc 可怜员工

class Minion extends Employee
{
	/*{{{function*/
	/*{{{*public function fire()*/
	/**
	 * 解雇员工 
	 * 
	 * @access public
	 * @return string
	 */
	public function fire()
	{
		echo "{$this->name} : I'll clear my desk\n";
	}
	/*}}}*/
	/*}}}*/
}

//test
/*
function __autoload($class) {
	require $class . '.class.php';
}
$minion = new Minion('Mary');
$minion->fire();
*/
?>
