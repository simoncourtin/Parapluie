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
    <link rel="stylesheet" href="css/materialize.min.css">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/page.script.js"></script>
        <!--Rooter pour la construction dynamique des pages-->
        <?php
			require_once("Includes/parameters.inc.php");
			require_once("Includes/rooter.inc.php");
        ?>
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
