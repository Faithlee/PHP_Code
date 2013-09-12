<?php

//@desc 创建雇员对象

abstract class Employee
{
	/*{{{members*/
	/**
	 * 员工name 
	 * 
	 * @var string
	 * @access protected
	 */
	protected $name;
	/*}}}*/
	/*{{{function*/
	/*{{{*public function __construct()/
	/**
	 * 构造器 
	 * 
	 * @param string $name 
	 * @access public
	 * @return void
	 */
	public function __construct($name) 
	{
		$this->name = $name;
	}
	/*}}}*/
	/*{{{*/
	abstract public function fire();
	/*}}}*/
	/*}}}*/
}



?>
