<?php

//@desc 单件模式
//单件模式的对象可以被系统中的任何对象使用；
//此对象不应该储存在会被覆写的全局变量中
//系统中不应该有超过一个对象

class Perference 
{
	/*{{{members*/
	/**
	 * option 
	 * 
	 * @var array
	 * @access private
	 */
	private $option = array();
	/**
	 * 实例化的对象
	 * @var obj
	 * @access private 
	 * @static
	 */
	private static $instance;
	/*}}}*/
	/*{{{function*/
	/*{{{private function __construct()*/
	/**
	 * 阻止通过构造器实例化对象 
	 * 
	 * @access private
	 * @return void
	 */
	private function __construct() 
	{ 
	
	}
	/*}}}*/
	/*{{{public function getInstance()*/
	/**
	 * 实例化本身
	 * 
	 * @access public
	 * @return void
	 */
	public function getInstance()
	{
		if (empty(self::$instance)) {
			self::$instance = new Perference();
		}

		return self::$instance;
	}
	/*}}}*/
	/*{{{public function setProperty()*/
	/**
	 * 设置参数 
	 * 
	 * @param mixed $key 
	 * @param mixed $val 
	 * @access public
	 * @return void
	 */
	public function setProperty($key, $val)
	{
		$this->option[$key] = $val;
	}
	/*}}}*/
	/*{{{public function getProperty($key) */
	/**
	 * 返回属性值 
	 * 
	 * @param mixed $key 
	 * @access public
	 * @return void
	 */
	public function getProperty($key) 
	{
		return $this->option[$key];
	}
	/*}}}*/
	/*}}}*/
}
//PS: $instance的属性为private及static，无法在类的外部访问，
//而getInstance()却是public及static的，可以在任何地方访问到；

//单件模式的缺点：与全局变量类似，可以在任何地方被调用，
//系统间的依赖关系不容易处理，依赖被隐藏在系统的内部
//适度的使用可以改进系统的设计，可以代替全局变量来使用
//对于低版本的PHP，不支持命名空间使用单件模式很重要

$instance = Perference::getInstance();
$instance->setProperty('sex', 'Female');

unset($instance);

$instance2 = Perference::getInstance();
echo $instance2->getProperty('sex');

//Female

?>
