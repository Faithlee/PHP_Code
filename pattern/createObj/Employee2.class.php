<?php

//@desc 创建对象另一种手段

abstract class Employee2
{
	/*{{{member*/
	/*{{{*/
	/**
	 * 员工name 
	 * 
	 * @var string
	 * @access protected
	 */
	protected $name;
	/**
	 *  子类
	 *
	 *  @var array
	 *  @access private
	 */
	private static $type = array('Minion', 'CluedUp', 'WellConnected');
	/*}}}*/
	/*{{{function*/
	/*{{{*/
	/**
	 * 开除员工时实例化对象 
	 * 
	 * @param string $name 
	 * @static
	 * @access public
	 * @return object
	 */
	static public function recruit($name)
	{
		$num = rand(1, count(self::$type)) - 1;
		$class = self::$type[$num];
		return new $class($name);
	}
	/*}}}*/
	/*{{{public function __construct()*/
	/**
	 * __construct 
	 * 
	 * @param string $name 
	 * @access public
	 * @return void
	 */
	public function __construct($name) {
		$this->name = $name;
	}
	/*}}}*/
	/*{{{*/
	abstract public function fire();
	/*}}}*/
	/*}}}*/
}

?>
