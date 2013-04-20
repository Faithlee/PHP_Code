<?php

//@desc 苛刻的老板解雇员工
//比较：在类中直接实例化minion(),限制了代码的灵活性

class NastyBoss
{
	/*{{{member*/
	/**
	 * 员工数组 
	 * 
	 * @var array
	 * @access private
	 */
	private $employees = array();
	/*}}}*/
	/*{{{function*/
	/*{{{public function addEmployee()*/
	/**
	 * 添加员工 
	 * 
	 * @param string $name 
	 * @access public
	 * @return void
	 */
	public function addEmployee($name)
	{
		$this->employees[] = new Minion( $name );
	}
	/*}}}*/
	/*{{{*public function projectFails()*/
	/**
	 * 开除员工 
	 * 
	 * @access public
	 * @return void
	 */
	public function projectFails()	 
	{
		if (count($this->employees) > 0) {
			$emp = array_pop($this->employees);
			$emp->fire(); 
		}
	}
	/*}}}*/
	/*}}}*/
}

//test 

function __autoload($class) {
	require $class . '.class.php';
}

$boss = new NastyBoss();

//添加员工
$boss->addEmployee('Mary');
$boss->addEmployee('Harry');
$boss->addEmployee('Bob');

//开除员工
$boss->projectFails();


?>
