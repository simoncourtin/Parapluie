<?php


require_once ("Includes/autoload.inc.php");

$pageManager = new PageManager();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
		<link href="css/style.css" rel="stylesheet">
	    
        <!--Rooter pour la construction dynamique des pages-->
        <?php
			require_once("Includes/parameters.inc.php");
			require_once("Includes/rooter.inc.php");
        ?>
        <title><?php echo $page->getName()." - ".$PARAMETRES['titre_site'] ; ?></title>
    </head>
    
    <?php
		require_once("Includes/admin/header.admin.inc.php");
		require_once("Includes/admin/body.admin.inc.php");
		require_once("Includes/admin/footer.admin.inc.php");
    ?>

</html>
