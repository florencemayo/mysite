<?php

/**
* Park Address
**/
class AddressPark extends Address {
 
 // overring the variable
 public $country_name='Australia';

 //overring the method
 public function display(){
 	$output="<div style='background-color:PaleGreen'>";
    $output.=parent::display();
 	$output.='</div>';
 	return $output;
 }
 /*
  * Initialization
  */
    protected function _init(){
   $this ->_setAddressTypeId(Address::ADDRESS_TYPE_PARK);	
  }
}