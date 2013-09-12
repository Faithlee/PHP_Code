<?php

//定价收费

class FixedCostStrategy extends CostStrategy
{
	/*{{{function*/
	/*{{{public function cost()*/
	/**
	 * cost 
	 * 
	 * @param Lession $lession 
	 * @access public
	 * @return int
	 */
	public function cost(Lession $lession)
	{
		return 30;
	}
	/*}}}*/
	/*{{{public function changeType()*/
	/**
	 * changeType 
	 * 
	 * @access public
	 * @return string
	 */
	public function changeType()
	{
		return 'fixed rate';
	}
	/*}}}*/
	/*}}}*/
}
/*
function __autoload($class) {
	require $class.'.class.php';
}
$test = new FixedCostStrategy();

echo $test->changeType()
*/
?>
