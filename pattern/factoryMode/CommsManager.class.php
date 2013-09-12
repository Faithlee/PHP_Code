<?php
//@desc 工厂模式

//抽象层：强制子类继承实现

abstract class CommsManager
{
	/*{{{function*/
	/*{{{abstract function getHeaderText()*/
	/**
	 * getHeaderText 
	 * 
	 * @abstract
	 * @access public
	 * @return string
	 */
	abstract function getHeaderText();
	/*}}}*/
	/*{{{abstract function getApptEncode()*/
	/**
	 * getApptEncode 
	 * 
	 * @abstract
	 * @access public
	 * @return string
	 */
	abstract function getApptEncode();
	/*}}}*/
	/*{{{abstract function getFooterText()*/
	/**
	 * getFooterText 
	 * 
	 * @abstract
	 * @access public
	 * @return string
	 */
	abstract function getFooterText();
	/*}}}*/
	/*}}}*/
}

//此处可以继续扩展其它的创建者

?>
