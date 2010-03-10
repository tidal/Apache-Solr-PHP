<?php

/**
 * SolrParams class.
 * 
 * Represents a collection of name-value pairs sent to the Solr server during a request.
 * Port of Class SolrParams from PECL-Package Solr (by Israel Ekpo)
 *
 * Based on
 * @link http://php.net/manual/en/class.solrparams.php
 * @author Timo Michna <timomichna/yahoo.de>
 * @package ApacheSolr 
 */

 class SolrParams implements Serializable {


	/**
	 * Sets the parameter to the specified value
	 *
	 * @access public
	 * @param $name SolrParams
	 * @param $value string
	 * @return SolrParams
	 */
	public function setParam($name, $value){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Adds a parameter to the object
	 *
	 * @access public
	 * @param $name SolrParams
	 * @param $value string
	 * @return SolrParams
	 */
	public function addParam($name, $value){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns all the name-value pair parameters in the object
	 *
	 * @access public
	 * @return string
	 */
	public function __toString(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns all the name-value pair parameters in the object
	 *
	 * @access public
	 * @param $url_encode bool
	 * @return string
	 */
	public function toString($url_encode){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns an array of non URL-encoded parameters
	 *
	 * @access public
	 * @return array
	 */
	public function getParams(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 *  Returns a parameter value
	 *
	 * @access public
	 * @param $param_name mixed
	 * @return mixed
	 */
	public function getParam($param_name){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns an array of URL-encoded parameters
	 *
	 * @access public
	 * @return array
	 */
	public function getPreparedParams(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns an array of URL-encoded parameters
	 *
	 * @access public
	 * @return array
	 */
	public function __clone(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Used for custom serialization
	 *
	 * @access public
	 * @return string
	 */
	public function serialize(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Used for custom serialization
	 *
	 * @access public
	 * @param $serialized void
	 * @return void
	 */
	public function unserialize($serialized){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * This is an alias for SolrParams::addParam
	 *
	 * @access public
	 * @param $name SolrParams
	 * @param $value string
	 * @return SolrParams
	 */
	public function add($name, $value){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * An alias of SolrParams::setParam
	 *
	 * @access public
	 * @param $name void
	 * @param $value string
	 * @return void
	 */
	public function set($name, $value){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * This is an alias for SolrParams::getParam
	 *
	 * @access public
	 * @param $param_name mixed
	 * @return mixed
	 */
	public function get($param_name){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}


}