<?php

/**
 * SolrUtils class.
 * 
 * Contains utility methods for retrieving the current extension version and preparing query phrases.
 * Port of Class SolrUtils from PECL-Package Solr (by Israel Ekpo)
 *
 * Based on
 * @link http://php.net/manual/en/class.solrutils.php
 * @author Timo Michna <timomichna/yahoo.de>
 * @package ApacheSolr 
 */

 class SolrUtils extends SolrResponse implements Serializable {


	/**
	 * Escapes a lucene query string
	 *
	 * @static
	 * @access public
	 * @param $str string
	 * @return string
	 */
	public static function escapeQueryChars($str){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Prepares a phrase from an unescaped lucene string
	 *
	 * @static
	 * @access public
	 * @param $str string
	 * @return string
	 */
	public static function queryPhrase($str){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Parses an response XML string into a SolrObject
	 *
	 * @static
	 * @access public
	 * @param $xmlresponse SolrObject
	 * @param $parse_mode string
	 * @return SolrObject
	 */
	public static function digestXmlResponse($xmlresponse, $parse_mode){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}

	/**
	 * Returns the current version of the Solr extension
	 *
	 * @static
	 * @access public
	 * @return string
	 */
	public static function getSolrVersion(){
		throw new Exception("Method ".__CLASS__."::".__METHOD__." not implemented yet!");
	}


}