<html>
  <head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
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
                  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Objects <span class="caret"></span></a><ul class="dropdown-menu">
                          <li><a href="demo.php">Basic objects</a></li>
                          <li><a href="demoAbstract.php">Abstract</a></li>
                          <li><a href="#">Protected methods</a></li>
                          <li><a href="#">Static methods</a></li>
                          <li><a href="demoStandard.php">Standard Class</a></li>
                   </ul>
               </li>
      </ul>

    </div>

  </div>
    <div id="content">