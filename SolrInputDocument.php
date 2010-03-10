<?php

/**
 * SolrInputDocument class.
 * 
 * This class represents a Solr document that is about to be submitted to the Solr index.
 * Port of Class SolrInputDocument from PECL-Package Solr (by Israel Ekpo)
 *
 * Based on
 * @link http://php.net/manual/en/class.solrinputdocument.php
 * @author Timo Michna <timomichna/yahoo.de>
 * @package ApacheSolr 
 */

 class SolrInputDocument implements ArrayAccess, Iterator, Traversable, Serializable {


	/**
	 * Constructor
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
	 * Creates a copy of a SolrDocument
	 *
	 * @access public
	 * @return void
	 */
	public function __clone(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Creates a copy of a SolrDocument
	 *
	 * @access public
	 * @return void
	 */
	public function __sleep(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Creates a copy of a SolrDocument
	 *
	 * @access public
	 * @return void
	 */
	public function __wakeup(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Sets the boost value for this document
	 *
	 * @access public
	 * @param $documentBoostValue float
	 * @return bool
	 */
	public function setBoost($documentBoostValue){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Retrieves the current boost value for the document
	 *
	 * @access public
	 * @return float
	 */
	public function getBoost(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Resets the input document
	 *
	 * @access public
	 * @return bool
	 */
	public function clear(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * This is an alias of SolrInputDocument::clear
	 *
	 * @access public
	 * @return bool
	 */
	public function reset(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Adds a field to the document
	 *
	 * @access public
	 * @param $fieldName string
	 * @param $fieldValue string
	 * @param $fieldBoostValue float
	 * @return bool
	 */
	public function addField($fieldName, $fieldValue, $fieldBoostValue){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Retrieves the boost value for a particular field
	 *
	 * @access public
	 * @param $fieldName string
	 * @return float
	 */
	public function getFieldBoost($fieldName){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Sets the index-time boost value for a field
	 *
	 * @access public
	 * @param $fieldName string
	 * @param $fieldBoostValue float
	 * @return bool
	 */
	public function setFieldBoost($fieldName, $fieldBoostValue){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns an array containing all the fields in the document
	 *
	 * @access public
	 * @return array
	 */
	public function getFieldNames(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns the number of fields in the document
	 *
	 * @access public
	 * @return int
	 */
	public function getFieldCount(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Retrieves a field by name
	 *
	 * @access public
	 * @param $fieldName SolrDocumentField
	 * @return SolrDocumentField
	 */
	public function getField($fieldName){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns an array representation of the input document
	 *
	 * @access public
	 * @return array
	 */
	public function toArray(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Checks if a field exists
	 *
	 * @access public
	 * @param $fieldName string
	 * @return bool
	 */
	public function fieldExists($fieldName){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Removes a field from the document
	 *
	 * @access public
	 * @param $fieldName string
	 * @return bool
	 */
	public function deleteField($fieldName){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Sorts the fields within the document
	 *
	 * @access public
	 * @param $sortOrderBy int
	 * @param $sortDirection int
	 * @return bool
	 */
	public function sort($sortOrderBy, $sortDirection){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Merges one input document into another
	 *
	 * @access public
	 * @param $sourceDoc SolrInputDocument
	 * @param $overwrite SolrInputDocument
	 * @return bool
	 */
	public function merge($sourceDoc, $overwrite){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}


}