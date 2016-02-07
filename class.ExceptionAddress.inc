<?php
/*
* Custom exceptions handler
*/
class ExceptionAddress extends Exception {
	/*
	*Magic toString
	*@return string
	*/
	public function __toString(){
		return __CLASS__.": [{$this->code}] : {$this->message}\n";
	}
}