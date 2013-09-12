<?php

abstract class CostStrategy
{
	/*{{{functions*/
	/*{{{abstract public function cost()*/
	/**
	 * 价格处理方法 
	 * 
	 * @param Lession $lession 
	 * @abstract
	 * @access public
	 * @return void
	 */
	abstract public function cost(Lession $lession);
	/*}}}*/
	/*{{{abstract public function changeType()*/
	/**
	 * changeType 
	 * 
	 * @abstract
	 * @access public
	 * @return void
	 */
	abstract public function changeType();
	/*}}}*/
	/*}}}*/
}


?>
