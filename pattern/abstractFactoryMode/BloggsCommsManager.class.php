<?php
/**
 * Class BloggsCommsManager
 * 处理文档
 */
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
		return 'Bloggs Header';
	}		
	/*}}}*/
	/*{{{public function getApptEncoder()*/
	/**
	 * getApptEncoder 
	 * 
	 * @access public
	 * @return void
	 */
	public function getApptEncoder()
	{
		return new BloggsApptEncoder();
	}
	/*}}}*/
	/*{{{*/
	/**
	 * getTdEncoder 
	 * 
	 * @access public
	 * @return void
	 */
	public function getTdEncoder()
	{
		return new BloggsTdEncoder();
	}
	/*}}}*/
	/*{{{*/
	/**
	 * getContactEncoder 
	 * 
	 * @access public
	 * @return void
	 */
	public function getContactEncoder()
	{
		return new BloggsContactEncoder();
	}
	/*}}}*/
	/*{{{*/
	/**
	 * getFooterText 
	 * 
	 * @access public
	 * @return void
	 */
	public function getFooterText()
	{
		return "Bloggs footer";
	}
	/*}}}*/
	/*}}}*/
}

function __autoload($className) {
	require $className . '.class.php';
}

$bloggs = new BloggsCommsManager();
echo $bloggs->getFooterText();


