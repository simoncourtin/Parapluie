<?php
	$menu = "";
	$data = $pageManager->getPage($GLOBALS['pages']);
	foreach ($data->getPages() as $p) {
	  if(!$p->isHidden()){
		  $name_p = $p->getName();
		  //on considère que les rep des page est la racine
		  // on extrait donc ./data/pages
		  $adr_p = preg_split("#".$GLOBALS['pages']."/#", $p->getPath())[1];
	  $menu = $menu."<a class='mdl-navigation__link' href='index.php?page=$adr_p'>$name_p</a>"."\n";
	  }
	}
?>
