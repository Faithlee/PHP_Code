<?php

abstract class Lession {
	/*{{{ members*/
	
	/**
	 * 课时长度
	 *
	 * @var mixed
	 * @access private
	 */
	private $duration;
	/**
	 * 课时价格
	 *
	 * @var mixed
	 * @access private
	 */
	private $costStrategy;
	/*}}}*/
	/*{{{functions*/
	/*{{{public function __construct()
	/**
	 * __construct() 
	 * 
	 * @param mixed $duration 
	 * @param CostStrategy $strategy 
	 * @access public
	 * @return void
	 */
	public function __construct($duration, CostStrategy $strategy) 
	{
		$this->duration = $duration;
		$this->costStrategy = $strategy;
	}
	/*}}}*/
	/*{{{public function cost()*/
	/**
	 * 课时价格 
	 * 
	 * @access public
	 * @return void
	 */
	public function cost() 
	{
		return $this->costStrategy->cost($this);
	}
	/*}}}*/
	/*{{{public function changeType()*/
	/**
	 * 调整上课类型 
	 * 
	 * @access public
	 * @return void
	 */
	public function changeType()
	{
		return $this->costStrategy->changeType();
	}
	/*}}}*/
	/*{{{public function getDuration()*/
	public function getDuration()
	{
		return $this->duration;
	}
	/*}}}*/

	// many functions……………………
	
	/*}}}*/
}





?>
