<?php
require_once ("Includes/autoload.inc.php");
$pageManager = new PageManager();

//Rooter pour la construction dynamique des pages
require_once("Includes/parameters.inc.php");
require_once("Includes/rooter.inc.php");
?>

<!DOCTYPE html>

<html>
    <head>
        <title><?php echo $page->getName()." - ".$PARAMETRES['titre_site'] ; ?></title>
		<meta charset="UTF-8">
		<link href="css/style.css" rel="stylesheet">		
    </head>
    
    <?php
		require_once("Includes/admin/header.admin.inc.php");
		require_once("Includes/admin/body.admin.inc.php");
		require_once("Includes/admin/footer.admin.inc.php");
    ?>

</html>
