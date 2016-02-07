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
	   <div class="wrapper"> 
	      <h2>Instantiating address</h2>';
/*$address = new Address;*/

/*
** Printing the empty street
*/
/*echo '<h2>Empty Address</h2>';
echo '<tt><pre>'.var_export($address,TRUE).'</pre></tt>';  
*/
/*
* Setting the values for address
*/
/*echo '<h2>Setting the addresses ..</h2>';
$address->street_address_1='5555 Fake Street';
$address->city_name= 'Townsville';
$address->subdivision_name='State';
//$address->postal_code=12345;
$address->country_name='United States of America';
$address->address_type_id=1;
//echo '<tt><pre>'.var_export($address,TRUE).'</pre></tt>'; 
echo $address;
*/
/*
**Displaying the address
*/
/*echo '<h2>Display the addresses ..</h2>';
echo "<div class='panel panel-default'>".$address->display()."</div>";

*/
/*
**Testing protected access
*/
/*echo '<h2>Testing magic method __get and __set..</h2>';
unset($address->postal_code);
echo "<div class='panel panel-default'>".$address->display()."</div>";
*/
/*
**Testing construct method
*/
/*echo '<h2>Testing magic method __construct..</h2>';
$address_2= new Address(Array(
'street_address_1'=> '123 Phony Ave',
'city_name'       => 'Villageland',
'subdivision_name'=> 'Region',
//'postal_code'     => '67980',
'country_name'    => 'Canada'
));
//echo "<div class='panel panel-default'>".$address_2->display()."</div>";
echo $address_2;*/

/*
**Testing toString method
*/
/*echo '<h2>Address __toString..</h2>';
echo "<div class='panel panel-default'>".$address_2."</div>";
*/
/*
**Testing static variables
*/
echo '<h2>Displaying address types..</h2>';
echo '<tt><pre>'.var_export(Address::$valid_address_types,TRUE).'</pre></tt>'; 

echo '<h2>Testing address types ID validation..</h2>';
echo "<div class='panel panel-default'>";
for ($id=0; $id<=4;$id++){
	echo "<div>$id: ";
	echo Address::isValidAddressTypeId($id)? 'Valid' : 'Invalid';
	echo "</div>";
}
echo '</div>';


/*
* Setting the values for address
*/
echo '<h2>Instantiating address</h2>';
$addressResidence = new AddressResidence;
echo '<h2>Setting the residential addresses ..</h2>';
$addressResidence->street_address_1='5555 Fake Street';
$addressResidence->city_name= 'Townsville';
$addressResidence->subdivision_name='State';
//$address->postal_code=12345;
$addressResidence->country_name='United States of America';
//$addressResidence->address_type_id=1;
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
//'postal_code'     => '67980',
'country_name'    => 'Canada'
));
echo "<div class='panel panel-default'>".$address_business ->display()."</div>";
echo '<tt><pre>'.var_export($address_business,TRUE).'</pre></tt>'; 

echo '</div></div>';
include("inc/footer.php");