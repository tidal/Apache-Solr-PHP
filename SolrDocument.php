<?php

/**
 * SolrDocument class.
 * 
 * Represents a Solr document retrieved from a query response.
 * Port of Class SolrDocument from PECL-Package Solr (by Israel Ekpo)
 *
 * Based on
 * @link http://php.net/manual/en/class.solrdocument.php
 * @author Timo Michna <timomichna/yahoo.de>
 * @package ApacheSolr 
 */

 class SolrDocument implements ArrayAccess, Iterator, Traversable, Serializable {


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
	 * Creates a copy of a SolrDocument object
	 *
	 * @access public
	 * @return void
	 */
	public function __clone(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Adds another field to the document
	 *
	 * @access public
	 * @param $fieldName string
	 * @param $fieldValue string
	 * @return bool
	 */
	public function __set($fieldName, $fieldValue){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Acess the field as a property
	 *
	 * @access public
	 * @param $fieldName SolrDocumentField
	 * @return SolrDocumentField
	 */
	public function __get($fieldName){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Checks if a field exists
	 *
	 * @access public
	 * @param $fieldName string
	 * @return bool
	 */
	public function __isset($fieldName){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Removes a field from the document
	 *
	 * @access public
	 * @param $fieldName string
	 * @return bool
	 */
	public function __unset($fieldName){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Adds a field to the document
	 *
	 * @access public
	 * @param $fieldName void
	 * @param $fieldValue string
	 * @return void
	 */
	public function offsetSet($fieldName, $fieldValue){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Retrieves a field
	 *
	 * @access public
	 * @param $fieldName SolrDocumentField
	 * @return SolrDocumentField
	 */
	public function offsetGet($fieldName){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Checks if a particular field exists
	 *
	 * @access public
	 * @param $fieldName string
	 * @return bool
	 */
	public function offsetExists($fieldName){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Removes a field
	 *
	 * @access public
	 * @param $fieldName void
	 * @return void
	 */
	public function offsetUnset($fieldName){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Retrieves the current field
	 *
	 * @access public
	 * @return SolrDocumentField
	 */
	public function current(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Retrieves the current key
	 *
	 * @access public
	 * @return string
	 */
	public function key(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Moves the internal pointer to the next field
	 *
	 * @access public
	 * @return void
	 */
	public function next(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Resets the internal pointer to the beginning
	 *
	 * @access public
	 * @return void
	 */
	public function rewind(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Checks if the current position internally is still valid
	 *
	 * @access public
	 * @return bool
	 */
	public function valid(){
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
	 * Custom serialization of SolrDocument objects
	 *
	 * @access public
	 * @param $serialized void
	 * @return void
	 */
	public function unserialize($serialized){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Drops all the fields in the document
	 *
	 * @access public
	 * @return bool
	 */
	public function clear(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * This is an alias to SolrDocument::clear()
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
	 * @return bool
	 */
	public function addField($fieldName, $fieldValue){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns an array of fields names in the document
	 *
	 * @access public
	 * @return array
	 */
	public function getFieldNames(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns the number of fields in this document
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
	 * Returns an array representation of the document
	 *
	 * @access public
	 * @return array
	 */
	public function toArray(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Checks if a field exists in the document
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
	 * Sorts the fields in the document
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
	 * Merges source to the current SolrDocument
	 *
	 * @access public
	 * @param $sourceDoc SolrDocument
	 * @param $overwrite SolrDocument
	 * @return bool
	 */
	public function merge($sourceDoc, $overwrite){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns a SolrInputDocument equivalent of the object
	 *
	 * @access public
	 * @return SolrInputDocument
	 */
	public function getInputDocument(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}


}