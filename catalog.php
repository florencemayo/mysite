<?php 
include("inc/data.php");
include("inc/functions.php");
$pageTitle="Full Catalog";
$section=null;

if (isset($_GET["cat"])) {
if ($_GET["cat"]=="motorola") {
  $pageTitle = "Motorola";
  $section= "motorola";
}else if ($_GET["cat"]=="samsung") {
  $pageTitle = "Samsung";
  $section= "samsung";
} else if ($_GET["cat"]=="t-mobile") {
  $pageTitle = "T-mobile";
  $section= "t-mobile";
} else if ($_GET["cat"]=="dell") {
  $pageTitle = "Dell";
  $section= "dell";
}  else if ($_GET["cat"]=="droid") {
  $pageTitle = "Droid";
  $section= "droid";
}
}
include("inc/header.php"); ?>

<div class="section catalog page">
  <div class="wrapper">  
        
         <h1 class='thumbnail'> <?php 

        if ($section != null) {
        	echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
        }
         echo $pageTitle ?> </h1>

         <ul class="items">
            <?php
         	$categories=array_category($catalog,$section);
         	foreach ($categories as $id) {
            echo get_item_html($id,$catalog[$id]);
            }
            ?>
         </ul>
    </div>
 </div>
 

 <?php include("inc/footer.php"); ?>