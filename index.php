<?php
//chargement de l autoload
require_once ("Includes/autoload.inc.php");
//page manager
$pageManager = new PageManager();
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <?php
      //includes du site
      require_once("Includes/head.inc.php");
      //chargement des parametres du site
      require_once("Includes/parameters.inc.php");
      //chargement du rooter pour redirection des pages
			require_once("Includes/rooter.inc.php");
      ?>

      <!--titre du site (paramters.inc.php) -->
      <title><?php echo $page->getName()." - ".$PARAMETRES['titre_site'] ; ?></title>
    </head>

    <?php
    //header
		require_once("Includes/header.inc.php");
    //body
    require_once("Includes/body.inc.php");
    //footer
    require_once("Includes/footer.inc.php");
    ?>
</html>
