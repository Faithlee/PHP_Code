<?php

//定时收费策略

class TimedCostStrategy extends CostStrategy
{
	/*{{{function*/
	/*{{{public function cost()*/
	/**
	 * 价格计算 
	 * 
	 * @param Lession $lession 
	 * @access public
	 * @return void
	 */
	public function cost(Lession $lession)
	{
		return $lession->getDuration() * 5;
	}
	/*}}}*/
	/*{{{public function changeType()*/
	/**
	 * changeType 
	 * 
	 * @access public
	 * @return void
	 */
	public function changeType()
	{
		return 'hourly rate';
	}
	/*}}}*/
	/*}}}*/
}



?>
