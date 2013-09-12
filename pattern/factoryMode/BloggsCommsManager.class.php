<?php

class BloggsCommsManager extends CommsManager
{
	/*{{{function*/
	/*{{{public function getHeaderText()*/
	/**
	 * getHeaderText 
	 * 
	 * @access public
	 * @return void
	 */
	public function getHeaderText()
	{
		return 'Bloggs Headers';
	}
	/*}}}*/
	/*{{{public function getApptEncode()*/
	/**
	 * getApptEncode 
	 * 
	 * @access public
	 * @return void
	 */
	public function getApptEncode()
	{
		return new BloggsApptEncoder();
	}
	/*}}}*/
	/*{{{public function getFooterText()*/
	public function getFooterText()
	{
		return 'Bloggs footerText';
	}
	/*}}}*/
	/*}}}*/
}
?>
