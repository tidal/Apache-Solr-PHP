<?php

/**
 * SolrDocumentField class.
 * 
 * This represents a field in a Solr document. All its properties are read-only.
 * Port of Class SolrDocumentField from PECL-Package Solr (by Israel Ekpo)
 *
 * Based on
 * @link http://php.net/manual/en/class.solrdocumentfield.php
 * @author Timo Michna <timomichna/yahoo.de>
 * @package ApacheSolr 
 */

 class SolrDocumentField implements ArrayAccess, Iterator, Traversable, Serializable {


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


}