<?php

abstract class CommsManager
{
	/*{{{function*/
	/*{{{*/
	/**
	 * getHeaderText 
	 * 
	 * @abstract
	 * @access public
	 * @return void
	 */
	abstract function getHeaderText();
	/*}}}*/
	/*{{{*/
	/**
	 * ApptEncoder 
	 * 
	 * @abstract
	 * @access public
	 * @return void
	 */
	abstract function getApptEncoder();
	/*}}}*/
	/*{{{*/
	/**
	 * TdEncoder 
	 * 
	 * @abstract
	 * @access public
	 * @return void
	 */
	abstract function getTdEncoder();
	/*}}}*/
	/*{{{*/
	/**
	 * ConstactEncoder 
	 * 
	 * @abstract
	 * @access public
	 * @return void
	 */
	abstract function getContactEncoder();
	/*}}}*/
	/*{{{*/
	/**
	 * footerEncoder 
	 * 
	 * @abstract
	 * @access public
	 * @return void
	 */
	abstract function getFooterText();
	/*}}}*/
	/*}}}*/
}


?>
