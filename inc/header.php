<html>
  <head>
    <link type='text/css' rel='stylesheet' href='css/style.css'/>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <title><?php echo $pageTitle; ?></title>
  </head>
  <body class="container">
   
   <div class="header">
   
   <div class="wrapper">
     
     <ul class="nav nav-tabs">
                 <li class="motorola <?php if ($section=="motorola") { echo " on"; } ?>"><a href="catalog.php?cat=motorola">Motorola</a></li>
                 <li class="samsung <?php if ($section=="samsung") { echo " on"; } ?>"><a href="catalog.php?cat=samsung">Samsung</a></li>
                 <li class="t-mobile <?php if ($section=="t-mobile") { echo " on"; } ?>"><a href="catalog.php?cat=t-mobile">T-mobile</a></li>
                 <li class="dell <?php if ($section=="dell") { echo " on"; } ?>"><a href="catalog.php?cat=dell">Dell</a></li>
                 <li class="droid <?php if ($section=="droid") { echo " on"; } ?>"><a href="catalog.php?cat=droid">Droid</a></li>
                 <li class="suggest <?php if ($section=="suggest") { echo " on"; } ?>"><a href="suggest.php">Suggest</a></li>
      </ul>

    </div>

  </div>
    <div id="content">