<?php

//page par defaut
$page = $pageManager->getPage($GLOBALS['pages'].'/'.$PARAMETRES['default_page']);

if(isset($_GET["page"])){
  $page_name = $_GET["page"];
  if(strrchr($page_name, '.') == FALSE){
    if(is_dir($GLOBALS['pages']."/$page_name") && strlen($page_name) > 0){
      //la page existe
      $page = $pageManager->getPage($GLOBALS['pages']."/$page_name");
    }
  }
}
?>

