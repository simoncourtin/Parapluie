<?php
if(isset($_GET["page"])){
  $page = $_GET["page"];
  if(strrchr($page, '.') === FALSE){
    if(is_dir("./Data/$page")){
      //la page existe
      $page = $pageManager->getPage("./Data/$page");
    } else {
      //la pag€ n €xist€ pas , pag€ par d€faut
      $page = $pageManager->getPage('./Data/'.$GLOBALS['default_page']);
    }
  }
}
else {
    $page = $pageManager->getPage('./Data/'.$GLOBALS['default_page']);
}
?>
