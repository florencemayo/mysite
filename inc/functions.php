<?php
   function get_item_html($id,$item){
   $output = "<li class='phones'><a class='thumbnail' href='details.php?id=".$id."'><img src='"
                  .$item["img"].  "' alt='"
                  .$item["name"]. "'/>"
                  ."<p>View Details</p>"
                  ."</a></li>";
   return $output;
           }
  
  function array_category($catalog,$category) {
    
    $output =array();

  	foreach ($catalog as $id => $item) {
  		 if ($category==null OR strtolower($category)==strtolower($item["category"])){
  			/*
  			BEFORE SORTING
  			$output[]=$id;
  			*/

  			//NOW SORTING
  			$sort = $item["name"];
  			//TRIMMING FROM THE LEFT
  			//$sort = ltrim($sort,"The ");
  			//$sort = ltrim($sort,"A ");
  			//$sort = ltrim($sort,"And ");
  			$output[$id] =$sort;
  		}
  	}
  	/*
  	BEFORE SORTING
    return $output;
  	*/

  	//NOW SORTING
  	asort($output);
  	return array_keys($output);
  }

?>