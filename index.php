<?php 
include("inc/data.php");
include("inc/functions.php");
$pageTitle="Telephones";
$section= null;
include("inc/header.php"); ?>
 
  <div class="section random clearfix">
    <div class="wrapper">
      <h2 style= "text-align:center;">May we suggest something</h2>
       <ul class="items">
            <?php
            /*
            WITH NO RANDOM SELECTION
            foreach ($catalog as $id => $item) {
            echo get_item_html($id,$item);
            */
            //WITH RANDOM SELECTION
            $random=array_rand($catalog,4);
         	foreach ($random as $id) {
            echo get_item_html($id,$catalog[$id]);
            }
            ?>
         </ul>
    </div>
  </div>
  </div> <!-- end of the content-->  
  
 <?php include("inc/footer.php"); ?>

