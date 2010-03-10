<?php

/**
 * SolrResponse class.
 * 
 * Represents a response from the Solr server.
 * Port of Class SolrResponse from PECL-Package Solr (by Israel Ekpo)
 *
 * @author Timo Michna <timomichna/yahoo.de>
 * Based on
 * @link http://php.net/manual/en/class.solrresponse.php
 * @package ApacheSolr 
 */

 class SolrResponse extends SolrModifiableParams implements Serializable {


	/**
	 * Returns the HTTP status of the response
	 *
	 * @access public
	 * @return int
	 */
	public function getHttpStatus(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns more details on the HTTP status
	 *
	 * @access public
	 * @return string
	 */
	public function getHttpStatusMessage(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Was the request a success
	 *
	 * @access public
	 * @return bool
	 */
	public function success(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns the full URL the request was sent to
	 *
	 * @access public
	 * @return string
	 */
	public function getRequestUrl(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns the raw request headers sent to the Solr server
	 *
	 * @access public
	 * @return string
	 */
	public function getRawRequestHeaders(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns the raw request sent to the Solr server
	 *
	 * @access public
	 * @return string
	 */
	public function getRawRequest(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns the raw response headers from the server
	 *
	 * @access public
	 * @return string
	 */
	public function getRawResponseHeaders(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns the raw response from the server
	 *
	 * @access public
	 * @return string
	 */
	public function getRawResponse(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns the XML response as serialized PHP data
	 *
	 * @access public
	 * @return string
	 */
	public function getDigestedResponse(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Sets the parse mode
	 *
	 * @access public
	 * @param $parser_mode int
	 * @return bool
	 */
	public function setParseMode($parser_mode){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns a SolrObject representing the XML response from the server
	 *
	 * @access public
	 * @return SolrObject
	 */
	public function getResponse(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}


}