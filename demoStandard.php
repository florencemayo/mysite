<?php
/*
* replaced by autoloader
*require 'class.Address.inc';
*require 'class.Database.inc';
 */

/*
* Define an autoloder. 
*@param string $class_name
*/
function __autoload($class_name){
 include 'class.'.$class_name.'.inc';
}

$pageTitle="Displaying objects of classes";
$section="Objects";

include("inc/header.php");


echo '<div class="section page">
	   <div class="wrapper">';

/*
* Setting the values for address
*/
$addressResidence = new AddressResidence;
echo '<h2>Setting the residential addresses ..</h2>';
$addressResidence->street_address_1='5555 Fake Street';
$addressResidence->city_name= 'Townsville';
$addressResidence->subdivision_name='State';
$addressResidence->country_name='United States of America';
echo $addressResidence;
echo '<tt><pre>'.var_export($addressResidence,TRUE).'</pre></tt>'; 

/*
**Testing the abstract class
*/
echo '<h2>Testing the abstract class..</h2>';
$address_business= new AddressBusiness(Array(
'street_address_1'=> '123 Phony Ave',
'city_name'       => 'Villageland',
'subdivision_name'=> 'Region',
'country_name'    => 'Canada'
));
echo "<div class='panel panel-default'>".$address_business ->display()."</div>";
echo '<tt><pre>'.var_export($address_business,TRUE).'</pre></tt>'; 


echo '<h2>Testing the Overrride variable and a method class..</h2>';
$address_park= new AddressPark(Array(
'street_address_1'=> '789 Missing Circle',
'street_address_2'=> 'Suite 0',
'city_name'       => 'Hamlet',
'subdivision_name'=> 'Territory'
));
echo "<div class='panel panel-default'>".$address_park."</div>";
echo '<tt><pre>'.var_export($address_park,TRUE).'</pre></tt>'; 

echo '<h2>Testing typcasting to an object..</h2>';
$test_object_1 = (object) array(
	'hello'  => 'world',
	'nested' => array('key'=>'value')
);
echo '<tt><pre>'.var_export($test_object_1,TRUE).'</pre></tt>'; 

$test_object_2 = (object) 12345;
echo '<tt><pre>'.var_export($test_object_2,TRUE).'</pre></tt>'; 

try {
echo '<h2>Loading from a database..</h2>';
$address_db=Address::load(0);
echo '<tt><pre>'.var_export($address_db,TRUE).'</pre></tt>';
} 
catch (ExceptionAddress $e) {
	echo "<div class='message'>".$e."</div>";
} 

echo '</div></div>';
include("inc/footer.php");