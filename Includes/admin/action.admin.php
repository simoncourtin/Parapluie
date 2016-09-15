<?php
include "../../Libs/Parsedown/Parsedown.php";
include "../../Classes/FileManager.class.php";

$fileManager = new FileManager();

if($_POST["submit"]){

	$fileManager->writeFile($_POST["path"],  $_POST["contenu"]);
}
?>