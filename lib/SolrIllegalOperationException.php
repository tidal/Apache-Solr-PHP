<?php

/**
 * SolrIllegalOperationException class.
 * 
 * This object is thrown when an illegal or unsupported operation is performed on an object.
 * Port of Class SolrIllegalOperationException from PECL-Package Solr (by Israel Ekpo)
 *
 * Based on
 * @link http://php.net/manual/en/class.solrillegaloperationexception.php
 * @author Timo Michna <timomichna/yahoo.de>
 * @package ApacheSolr 
 */

 class SolrIllegalOperationException extends SolrException implements Serializable {


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