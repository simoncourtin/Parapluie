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
		
		<!--Debut conf materilized-->
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!--Fin conf materilized-->
		
		<link href="css/style.admin.css" rel="stylesheet">
		<script src="Libs/ckeditor/ckeditor.js"></script>
		
    </head>
    
    <?php
		require_once("Includes/admin/header.admin.inc.php");
		require_once("Includes/admin/body.admin.inc.php");
		require_once("Includes/admin/footer.admin.inc.php");
    ?>
	
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/page.script.js"></script>
	
</html>
