<?php
/*
*MySQLi Database; only one connection is allowed
*/
class Database {

	private $_connection;

	//Store the single instance.
	private static $_instance;

	/*
	*Get an instance of the Databse.
	*@ return Database
	*/
	public static function getInstance(){
		if (!self::$_instance){
			self::$_instance=new self();
		}
		return self::$_instance;
	}

	/*
	* Constructor
	*/
	public function __construct(){
		$this->_connection=new mysqli('localhost','root','','mysite');
		//error handling
		if (mysqli_connect_error()){
			trigger_error('Falied to connect to MySQL'.mysqli_connect_error(),E_USER_ERROR);
		}
	}
    

	/*
	* Empty clone magic method to prevent dublication
	*/
    public function __clone(){}

	/*
	* Get the mysqli Connection
	*/
	public function getConnection(){
		return $this->_connection;
	}
}