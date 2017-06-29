<?php


require_once ("Includes/autoload.inc.php");

$pageManager = new PageManager();
?>
<!DOCTYPE html>

<html>
    <head>
      <meta charset="UTF-8">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/material.min.css" rel="stylesheet">
      <script src="js/material.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <!--Rooter pour la construction dynamique des pages-->
      <?php
		    require_once("Includes/parameters.inc.php");
		    require_once("Includes/rooter.inc.php");
      ?>
      <title><?php echo $page->getName()." - ".$PARAMETRES['titre_site'] ; ?></title>
    </head>
    <div class="mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100 is-upgraded">
      <?php
    	  require_once("Includes/header.inc.php");
    	  require_once("Includes/body.inc.php");
    	  require_once("Includes/footer.inc.php");
      ?>
    </div>
</html>
