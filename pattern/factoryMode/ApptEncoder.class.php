<?php

//@desc 创建CommsManager使用的编码器
//抽象类，要求子类继承实现

abstract class ApptEncoder
{
	/*{{{function*/
	/*{{{abstract function encoder()*/
	/**
	 * encoder 
	 * 
	 * @abstract
	 * @access public
	 * @return string
	 */
	abstract function encoder();
	/*}}}*/
	/*}}}*/
}

//如果有其它的编码器可以继续在此处继承抽象类

?>
