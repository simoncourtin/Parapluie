<?php


require_once ("Includes/autoload.inc.php");

$pageManager = new PageManager();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
       
        

        <!--Rooter pour la construction dynamique des pages-->
        <?php
			require_once("Includes/parameters.inc.php");
			require_once("Includes/rooter.inc.php");
        ?>
        <title><?php echo $page->getName()." - ".$GLOBALS['titre_site'] ; ?></title>
    </head>
    
    <?php
		require_once("Includes/header.inc.php");
		require_once("Includes/body.inc.php");
		require_once("Includes/footer.inc.php");
    ?>

</html>
