<?php

/**
 * SolrObject class.
 * 
 * This is an object whose properties can also by accessed using the array syntax. All its properties are read-only.
 * Port of Class SolrObject from PECL-Package Solr (by Israel Ekpo)
 *
 * Based on
 * @link http://php.net/manual/en/class.solrobject.php
 * @author Timo Michna <timomichna/yahoo.de>
 * @package ApacheSolr 
 */

 class SolrObject implements ArrayAccess {


	/**
	 * Creates Solr object
	 *
	 * @access public
	 * @return 
	 */
	public function __construct(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Destructor
	 *
	 * @access public
	 * @return void
	 */
	public function __destruct(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Sets the value for a property
	 *
	 * @access public
	 * @param $property_name void
	 * @param $property_value string
	 * @return void
	 */
	public function offsetSet($property_name, $property_value){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Used to retrieve a property
	 *
	 * @access public
	 * @param $property_name mixed
	 * @return mixed
	 */
	public function offsetGet($property_name){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Checks if the property exists
	 *
	 * @access public
	 * @param $property_name string
	 * @return bool
	 */
	public function offsetExists($property_name){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Sets the value for the property
	 *
	 * @access public
	 * @param $property_name void
	 * @return void
	 */
	public function offsetUnset($property_name){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns an array of all the names of the properties
	 *
	 * @access public
	 * @return array
	 */
	public function getPropertyNames(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}


}