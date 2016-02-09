<?php 
include("inc/data.php");
include("inc/functions.php");

if (isset($_GET["id"])) {
  $id = $_GET["id"];
  if (isset($catalog[$id])){
    $item = $catalog[$id];
  }
}


if(!isset($item)){
 header("location:catalog.php");
 exit;
}

$pageTitle=$item["name"];
$section=null;
 

include("inc/header.php"); ?>

<div class="section page">
  
  <div class="wrapper">

    <h1>
    <div class="breadcrumb">
      <a href="catalog.php">Full Catalog</a>
        &gt; <a href="catalog.php?cat=<?php echo strtolower($item["category"]); ?> ">
       <?php echo $item["category"]; ?> </a>
       &gt;  <?php echo $item["name"]; ?>
    </div>
    </h1>
    <table panel panel-default>
    <tr>
    <td>
    <div class="media-pictures">
      <span>
      <img src="<?php echo $item["img"]; ?>" alt="<?php echo $item["name"]; ?>"/>
    </span>
    </div>
   </td>
   <td>
    <div class="media-details">
    
    <h1> <?php echo $item["name"]; ?>   </h1>

    <table class="specs">
    <tr>
        <th>Age</th>
        <td><?php echo $item["age"]; ?> </td>
    </tr>
    <tr>
        <th>Category</th>
        <td><?php echo $item["category"]; ?> </td>
    </tr>
    <?php if (isset($item["carrier"])) {  ?>
    <tr>
        <th>Carrier</th>
        <td><?php echo $item["carrier"]; ?> </td>
    </tr>
    <?php } ?>
    <tr>
        <th>Snippet</th>
        <td><?php echo $item["snippet"]; ?> </td>
    </tr>
     <?php if ($item["category"]=="Motorola") {  ?>
    <tr>
       <th>Countries</th>
       <td> <?php echo implode(", ",$item["countries"]); ?></td>
    </tr>
    <?php } ?>
    </table>
    </div>
  </td>
</tr>
</table>

  </div>

</div> 
 
 <?php include("inc/footer.php"); ?>