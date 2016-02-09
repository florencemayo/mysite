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

echo '<h2>Cloning address park..</h2>';
$address_park_clone = clone $address_park;
echo '<tt><pre>'.var_export($address_park_clone,TRUE).'</pre></tt>'; 
echo "<div style='background-color:lightgreen' class='panel panel-success'>address_park_clone is"
       . ($address_park==$address_park_clone ?' ' : ' not ')
       . 'a copy of address_park</div>';


echo '<h2>Copying Address Business references..</h2>';
$address_business_copy=$address_business;
echo "<div style='background-color:lightgreen' class='panel panel-success'>address_business_copy is"
. ($address_business===$address_business_copy ?' ' : ' not ' )
. 'a copy of address_business</div>';

echo '<h2>Setting Address Business copy of Address Park..</h2>';
$address_business=new AddressPark();
echo "<div style='background-color:lightgreen' class='panel panel-success'>address_business_copy is"
. ($address_business===$address_business_copy ?' ' : ' not ' )
. 'a copy of address_business';

echo '<br/>$address_business is of class '.get_class($address_business).'.';
echo '<br/>$address_business_copy is'.
            ($address_business_copy instanceOf AddressBusiness ?
            ' ' : ' not ' ). 'an instance of AddressBusiness</div>';




echo '</div></div></div>';
include("inc/footer.php");