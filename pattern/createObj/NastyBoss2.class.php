<?php

//@desc 苛刻的老板解雇员工
//比较说明：将Employee类的实例化作为参数传递，并可能针对不同员工的解雇返回不同信息
//可能将继承的子类传入返回不同信息

class NastyBoss2 
{
	/*{{{members*/
	/**
	 * 员工数组
	 * 
	 * @var array
	 * @access private
	 */
	private $employees = array();
	/*}}}*/
	/*{{{function*/
	/*{{{*public function addEmployee()*/
	/**
	 * 添加员工 
	 * 
	 * @param Employee $employee 
	 * @access public
	 * @return void
	 */
	public function addEmployee(Employee $employee) 
	{
		$this->employees[] = $employee;
	}
	/*}}}*/
	/*{{{*/
	public function projectFails()
	{
		if (count($this->employees) > 0) {
			$employee = array_pop($this->employees);
			$employee->fire();
		}
	}
	/*}}}*/
	/*}}}*/
}

 
//test
function __autoload($class) {
	require $class . '.class.php' ;
}

$boss = new NastyBoss2();

$boss->addEmployee(Employee2::recruit('Mary'));
$boss->addEmployee(Employee2::recruit('Harry'));
$boss->addEmployee(Employee2::recruit('Bob'));

$boss->projectFails();
$boss->projectFails();
$boss->projectFails();

?>
