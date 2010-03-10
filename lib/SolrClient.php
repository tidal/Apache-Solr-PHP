<?php

class SolrClient {

	const SEARCH_SERVLET_TYPE = 1;
	const UPDATE_SERVLET_TYPE = 2;
	const THREADS_SERVLET_TYPE = 4;
	const PING_SERVLET_TYPE = 8;
	const TERMS_SERVLET_TYPE = 16;
	const DEFAULT_SEARCH_SERVLET = 'select';
	const DEFAULT_UPDATE_SERVLET = 'update';
	const DEFAULT_THREADS_SERVLET = 'admin/threads';
	const DEFAULT_PING_SERVLET = 'admin/ping';
	const DEFAULT_TERMS_SERVLET = 'terms';	
	
	protected $clientOptions;
	
	protected $servletTypes = array();	
 
	/**
	 * __construct
	 * @access public
	 */
	public  function __construct($clientOptions){
		$this->clientOptions = $clientOptions;	
	}

	/**
	 * __destruct
	 * @access public
	 */
	public  function __destruct(){

	}

	/**
	 * __sleep
	 * @access public
	 */
	public  function __sleep(){

	}

	/**
	 * __wakeup
	 * @access public
	 */
	public  function __wakeup(){

	}

	/**
	 * __clone
	 * @access public
	 */
	public  function __clone(){

	}

	/**
	 * getOptions
	 * @access public
	 */
	public  function getOptions(){
		return $this->clientOptions;
	}

	/**
	 * getDebug
	 * @access public
	 */
	public  function getDebug(){

	}

	/**
	 * setServlet
	 * @access public
	 */
	public  function setServlet($type, $value){
		$this->servletTypes[$type] = $value;
	}

	/**
	 * query
	 * @access public
	 */
	public  function query(SolrParams $query){
		
	}

	/**
	 * addDocument
	 * @access public
	 */
	public  function addDocument($doc, $allowDups, $commitWithin){

	}

	/**
	 * addDocuments
	 * @access public
	 */
	public  function addDocuments($docs, $allowDups, $commitWithin){

	}

	/**
	 * request
	 * @access public
	 */
	public  function request($raw_request){

	}

	/**
	 * deleteById
	 * @access public
	 */
	public  function deleteById($id){

	}

	/**
	 * deleteByIds
	 * @access public
	 */
	public  function deleteByIds($ids){

	}

	/**
	 * deleteByQuery
	 * @access public
	 */
	public  function deleteByQuery($query){

	}

	/**
	 * deleteByQueries
	 * @access public
	 */
	public  function deleteByQueries($queries){

	}

	/**
	 * commit
	 * @access public
	 */
	public  function commit($maxSegments, $waitFlush, $waitSearcher){

	}

	/**
	 * optimize
	 * @access public
	 */
	public  function optimize($maxSegments, $waitFlush, $waitSearcher){

	}

	/**
	 * rollback
	 * @access public
	 */
	public  function rollback(){

	}

	/**
	 * ping
	 * @access public
	 */
	public  function ping(){

	}

	/**
	 * threads
	 * @access public
	 */
	public  function threads(){

	}


}