<?php

/**
 * SolrException class.
 * 
 * This is the base class for all exception thrown by the Solr extension classes.
 * Port of Class SolrException from PECL-Package Solr (by Israel Ekpo)
 *
 * Based on
 * @link http://php.net/manual/en/class.solrexception.php
 * @author Timo Michna <timomichna/yahoo.de>
 * @package ApacheSolr 
 */

 class SolrException extends Exception implements Serializable {


	/**
	 * Returns internal information where the Exception was thrown
	 *
	 * @access public
	 * @return array
	 */
	public function getInternalInfo(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns internal information where the Exception was thrown
	 *
	 * @access public
	 * @param $message 
	 * @param $code 
	 * @param $previous 
	 * @return array
	 */
	public function __construct($message, $code, $previous){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns internal information where the Exception was thrown
	 *
	 * @access public
	 * @return array
	 */
	public function getMessage(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns internal information where the Exception was thrown
	 *
	 * @access public
	 * @return array
	 */
	public function getCode(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns internal information where the Exception was thrown
	 *
	 * @access public
	 * @return array
	 */
	public function getFile(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns internal information where the Exception was thrown
	 *
	 * @access public
	 * @return array
	 */
	public function getLine(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns internal information where the Exception was thrown
	 *
	 * @access public
	 * @return array
	 */
	public function getTrace(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns internal information where the Exception was thrown
	 *
	 * @access public
	 * @return array
	 */
	public function getPrevious(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns internal information where the Exception was thrown
	 *
	 * @access public
	 * @return array
	 */
	public function getTraceAsString(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns internal information where the Exception was thrown
	 *
	 * @access public
	 * @return array
	 */
	public function __toString(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}


}