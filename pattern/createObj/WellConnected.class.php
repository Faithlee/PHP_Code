<?php

//@desc Employee子类，返回解雇不同的员工的信息

class WellConnected extends Employee
{
	/*{{{function*/
	/*{{{public function fire()*/
	public function fire()
	{
		echo $this->name ."': I\'ll call my dad\n";
	}
	/*}}}*/
	/*}}}*/
}

?>
